<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\PaymentService;
use Illuminate\Support\Facades\Log;

use App\Models\Transaction;
use App\Events\PaymentStatusChange;

use YooKassa\Model\Notification\NotificationSucceeded;
use YooKassa\Model\Notification\NotificationWaitingForCapture;
use YooKassa\Model\Notification\NotificationEventType;

use App\Enums\PaymentStatuses;


class PaymentController extends Controller
{
    

    public function create(Request $req, PaymentService $service) {

        //TODO validate userid and email fields, one of them should not be null

        $user = $req->user();

        $transaction = Transaction::create([
            'user_id' => $user != null ? $user->id : null,
            'email' => $req->email,
            'amount' => $req->amount,
            // 'description' => $req->description,
            'order_id' => $req->order_id
        ]);
        
        if($transaction) {
            $link = $service->createPayment($req->amount, ['transaction_id' => $transaction->id, 'order_id'=>$req->order_id]);
        }

        return $link;

    }

    public function index() {

    }

    public function callback(Request $req, PaymentService $service) {

        $source = file_get_contents('php://input');

        // Log::info($source);

        $requestBody = json_decode($source, true);  

        $notification = ($requestBody['event'] === NotificationEventType::PAYMENT_SUCCEEDED)
        ? new NotificationSucceeded($requestBody)
        : new NotificationWaitingForCapture($requestBody);

        $payment = $notification->getObject();

       
        if(isset($payment->status) && $payment->status === 'succeeded') {
            if((bool)$payment->paid === true) {
                $metadata = (object)$payment->metadata;
                if(isset($metadata->transaction_id)) {
                    $transaction = Transaction::find((int)$metadata->transaction_id);
                    $transaction->status = PaymentStatuses::SUCCEEDED;

                    $transaction->save();
                }
            }
        }

        PaymentStatusChange::dispatch($transaction->order_id, $transaction->status);

        
    }
}

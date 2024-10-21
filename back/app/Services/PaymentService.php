<?php

namespace App\Services;

use YooKassa\Client;

class PaymentService {

    private function getClient(): Client {
        $client = new Client();
        $client->setAuth(config('services.yookassa.shop_id'), config('services.yookassa.secret_key'));

        return $client;
    }

    public function createPayment(float $amount, array $options = [], string $description = null) {
        $client = $this->getClient();
        $payment = $client->createPayment(
            array(
                'amount' => [
                    'value' => $amount,
                    'currency' => 'RUB',
                ],
                'confirmation' => [
                    'type' => 'redirect',
                    'return_url' => env('FRONTEND_URL').'/cart',
                ],
                'metadata' => [
                    'transaction_id' => $options['transaction_id'],
                ],
                'capture' => true,
                'description' => $description,
            ),
            uniqid('', true)
        );

        return $payment->getConfirmation()->getConfirmationUrl();
    }
}
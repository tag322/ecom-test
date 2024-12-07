<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Models\Order;
use App\Models\TrendingProduct;
use Illuminate\Support\Facades\DB;

class ComputeTrendingProducts implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /** NOTE: scheduled work actually just pushes/dispatches new job, its not doing it.
    *   CMDS: php artisan schedule:work
    *       and php artisan queue:work
    */
    
    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job. Can be executed by "php artisan schedule:work" for local testing or by running cron or something. 
     */
    public function handle(): void
    {

        $orders = Order::latest()->take(5)->get()->toArray(); //you can take more if needed
        $trending_ids = [];

        foreach($orders as $order) {
            $basket = json_decode($order['basket']);

            foreach($basket->products_payload as $product) {
                if(array_key_exists(strval($product->product_id), $trending_ids)) {
                    $trending_ids[strval($product->product_id)] += 1;
                } else {
                    $trending_ids[strval($product->product_id)] = 1;
                }
            }
        }

        usort($trending_ids, function ($a, $b) {
            if ($a == $b) return 0;
            return ($a < $b) ? -1 : 1;
        });

        TrendingProduct::truncate();

        foreach($trending_ids as $key=>$id) {
            TrendingProduct::create([
                'product_id' => intval($id),
                'position' => intval($key) + 1
            ]);
        }
    }
}

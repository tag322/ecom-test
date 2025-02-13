<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\RabbitMQTest;

class retrieveFromQueue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:retrieve-from-queue';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $inst = new RabbitMQTest();
        $inst->retrieveFromQueue();
    }
}

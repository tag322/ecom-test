<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class RabbitMQTest extends Controller
{
    public function pushToQueue() {
        $connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
        $channel = $connection->channel();

        $channel->queue_declare('queue1', false, true, false, false);

        $msg = new AMQPMessage('aloe');
        $channel->basic_publish($msg, '', 'queue1');

        $channel->close();
        $connection->close();
    }

    public function retrieveFromQueue() {
        $connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
        $channel = $connection->channel();

        $channel->queue_declare('queue1', false, true, false, false);

        $callback = function ($msg) {
            echo ' [x] Received ', $msg->body, "\n";
        };
        
        $channel->basic_consume('queue1', '', false, true, false, false, $callback);
        
        try {
            $channel->consume();
        } catch (\Throwable $exception) {
            echo $exception->getMessage();
        }

        $channel->close();
        $connection->close();
    }
}

<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PaymentStatusChange implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $order_id;
    private $status;

    /**
     * Create a new event instance.
     */
    public function __construct($order_id, $status)
    {
        $this->order_id = $order_id;
        $this->status = $status;
    }

    public function broadcastWith() {
        return [
            'order_id' => $this->order_id,
            'status' => $this->status
        ];
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): Channel
    {
        return new PrivateChannel('payments-status-channel');
    }
}

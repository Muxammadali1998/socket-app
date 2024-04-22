<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PublicEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public string $message ;
    public function __construct($data)
    {
        $this->message = $data;
    }

    public function broadcastOn()
    {
        return  new Channel('public_channel');
    }

    public function With(): array
    {
        return [
            'message'=>$this->message
        ];
    }
}

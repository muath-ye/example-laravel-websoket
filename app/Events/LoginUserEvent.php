<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class LoginUserEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $message;
    public $count;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->message =  'hello';
        $this->count = 1;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('testchannel');
        // return new PrivateChannel('channel-name');
    }
}

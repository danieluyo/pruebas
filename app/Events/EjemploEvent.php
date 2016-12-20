<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class EjemploEvent
{
    use InteractsWithSockets, SerializesModels;

    public $from;
    public $to;
    public $message;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->from = 'Bond';
        $this->to = 'Bean';
        $this->message = 'You dont say??';
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        //return new PrivateChannel('channel-name');
        return ['evento'];
    }
    
}

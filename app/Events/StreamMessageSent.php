<?php

namespace App\Events;

use App\Models\StreamMessage;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class StreamMessageSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;

    public function __construct(StreamMessage $message)
    {
        $this->message = $message;
    }

    public function broadcastOn()
    {
        return new Channel('stream.' . $this->message->stream_id);
    }

    public function broadcastAs()
    {
        return 'message.sent';
    }

    public function broadcastWith()
    {
        return [
            'id' => $this->message->id,
            'user' => [
                'id' => $this->message->user->id,
                'username' => $this->message->user->username,
                'name' => trim(($this->message->user->first_name ?? '') . ' ' . ($this->message->user->last_name ?? '')) ?: $this->message->user->username,
                'avatar_url' => $this->message->user->avatar_url,
            ],
            'message' => $this->message->message,
            'timestamp' => $this->message->created_at->toIso8601String(),
        ];
    }
}

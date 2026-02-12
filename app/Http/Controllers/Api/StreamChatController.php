<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Stream;
use App\Models\StreamMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StreamChatController extends Controller
{
    public function getMessages(Request $request, $streamId)
    {
        $stream = Stream::find($streamId);

        if (!$stream) {
            return response()->json(['error' => 'Stream not found'], 404);
        }

        $messages = StreamMessage::where('stream_id', $streamId)
            ->with('user:id,username,first_name,last_name,avatar_url')
            ->orderBy('created_at', 'desc')
            ->limit(100)
            ->get()
            ->reverse()
            ->values();

        return response()->json([
            'data' => $messages->map(function ($message) {
                return [
                    'id' => $message->id,
                    'user' => [
                        'id' => $message->user->id,
                        'username' => $message->user->username,
                        'name' => trim(($message->user->first_name ?? '') . ' ' . ($message->user->last_name ?? '')) ?: $message->user->username,
                        'avatar_url' => $message->user->avatar_url,
                    ],
                    'message' => $message->message,
                    'timestamp' => $message->created_at->toIso8601String(),
                ];
            })
        ]);
    }

    public function sendMessage(Request $request, $streamId)
    {
        if (!auth()->check()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $validator = Validator::make($request->all(), [
            'message' => 'required|string|max:500',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $stream = Stream::find($streamId);

        if (!$stream) {
            return response()->json(['error' => 'Stream not found'], 404);
        }

        if (!$stream->is_live) {
            return response()->json(['error' => 'Stream is not live'], 400);
        }

        $message = StreamMessage::create([
            'stream_id' => $streamId,
            'user_id' => auth()->id(),
            'message' => $request->input('message'),
        ]);

        $message->load('user:id,username,first_name,last_name,avatar_url');

        // Broadcast to WebSocket channel
        broadcast(new \App\Events\StreamMessageSent($message))->toOthers();

        return response()->json([
            'data' => [
                'id' => $message->id,
                'user' => [
                    'id' => $message->user->id,
                    'username' => $message->user->username,
                    'name' => trim(($message->user->first_name ?? '') . ' ' . ($message->user->last_name ?? '')) ?: $message->user->username,
                    'avatar_url' => $message->user->avatar_url,
                ],
                'message' => $message->message,
                'timestamp' => $message->created_at->toIso8601String(),
            ]
        ]);
    }
}

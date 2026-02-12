<?php

namespace App\Http\Controllers\Api\Webhook;

use App\Http\Controllers\Controller;
use App\Models\Stream;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MediaMTXWebhookController extends Controller
{
    public function handleStreamEvent(Request $request)
    {
        $event = $request->input('event');
        $streamKey = $request->input('stream_key');

        Log::info('MediaMTX Webhook', [
            'event' => $event,
            'stream_key' => $streamKey,
            'payload' => $request->all()
        ]);

        $user = User::where('stream_key', $streamKey)->first();

        if (!$user) {
            Log::warning('MediaMTX: Invalid stream key', ['stream_key' => $streamKey]);
            return response()->json(['error' => 'Invalid stream key'], 404);
        }

        if ($event === 'publish') {
            $this->handleStreamStart($user);
        } elseif ($event === 'unpublish') {
            $this->handleStreamStop($user);
        }

        return response()->json(['status' => 'ok']);
    }

    private function handleStreamStart(User $user)
    {
        $activeStream = Stream::where('user_id', $user->id)
            ->where('is_live', true)
            ->first();

        if (!$activeStream) {
            $activeStream = Stream::create([
                'user_id' => $user->id,
                'title' => 'Live Stream',
                'category' => 'Just Chatting',
                'is_live' => true,
                'started_at' => now(),
                'hls_path' => $user->stream_key,
            ]);
        } else {
            $activeStream->update([
                'is_live' => true,
                'started_at' => now(),
            ]);
        }

        $user->update(['is_live' => true]);

        Log::info('Stream started', [
            'user_id' => $user->id,
            'stream_id' => $activeStream->id
        ]);
    }

    private function handleStreamStop(User $user)
    {
        $stream = Stream::where('user_id', $user->id)
            ->where('is_live', true)
            ->first();

        if ($stream) {
            $stream->update([
                'is_live' => false,
                'ended_at' => now(),
            ]);

            Log::info('Stream stopped', [
                'user_id' => $user->id,
                'stream_id' => $stream->id
            ]);
        }

        $user->update(['is_live' => false]);
    }
}

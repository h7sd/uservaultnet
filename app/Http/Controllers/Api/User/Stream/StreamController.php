<?php

namespace App\Http\Controllers\Api\User\Stream;

use App\Http\Controllers\Controller;
use App\Models\Stream;
use App\Models\StreamStat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StreamController extends Controller
{
    public function index()
    {
        try {
            $streams = Stream::with(['user' => function($query) {
                $query->select('id', 'first_name', 'last_name', 'username');
            }])
                ->where('is_live', true)
                ->orderBy('viewer_count', 'desc')
                ->orderBy('started_at', 'desc')
                ->get();

            return response()->json([
                'data' => $streams
            ]);
        } catch (\Exception $e) {
            \Log::error('Stream index error: ' . $e->getMessage());
            return response()->json([
                'error' => 'Failed to fetch streams',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function show($id)
    {
        $stream = Stream::with(['user' => function($query) {
            $query->select('id', 'first_name', 'last_name', 'username');
        }])
            ->where('id', $id)
            ->orWhereHas('user', function($query) use ($id) {
                $query->where('username', $id);
            })
            ->where('is_live', true)
            ->first();

        if (!$stream) {
            return response()->json([
                'error' => 'Stream not found or offline'
            ], 404);
        }

        return response()->json([
            'data' => $stream
        ]);
    }

    public function start(Request $request)
    {
        $user = $request->user();

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:100',
            'description' => 'nullable|string|max:1000',
        ]);

        $existingStream = Stream::where('user_id', $user->id)
            ->where('is_live', true)
            ->first();

        if ($existingStream) {
            return response()->json([
                'data' => $existingStream
            ]);
        }

        $stream = Stream::create([
            'user_id' => $user->id,
            'title' => $validated['title'],
            'category' => $validated['category'] ?? 'Just Chatting',
            'description' => $validated['description'] ?? null,
            'is_live' => true,
            'started_at' => now(),
            'hls_path' => $user->stream_key,
        ]);

        $user->update(['is_live' => true]);

        $stats = StreamStat::firstOrCreate(['user_id' => $user->id]);
        $stats->increment('total_streams');

        return response()->json([
            'data' => $stream
        ]);
    }

    public function stop(Request $request)
    {
        $user = $request->user();

        $stream = Stream::where('user_id', $user->id)
            ->where('is_live', true)
            ->first();

        if (!$stream) {
            return response()->json([
                'error' => 'No active stream found'
            ], 404);
        }

        $stream->update([
            'is_live' => false,
            'ended_at' => now(),
        ]);

        $user->update(['is_live' => false]);

        $duration = $stream->started_at->diffInSeconds($stream->ended_at);
        $stats = StreamStat::firstOrCreate(['user_id' => $user->id]);
        $stats->increment('total_stream_time_seconds', $duration);
        $stats->increment('total_views', $stream->viewer_count);
        if ($stream->peak_viewers > $stats->peak_viewers) {
            $stats->update(['peak_viewers' => $stream->peak_viewers]);
        }

        return response()->json([
            'message' => 'Stream ended successfully'
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = $request->user();

        $stream = Stream::where('id', $id)
            ->where('user_id', $user->id)
            ->first();

        if (!$stream) {
            return response()->json([
                'error' => 'Stream not found'
            ], 404);
        }

        $validated = $request->validate([
            'title' => 'sometimes|string|max:255',
            'category' => 'sometimes|nullable|string|max:100',
            'description' => 'sometimes|nullable|string|max:1000',
            'thumbnail_url' => 'sometimes|nullable|url',
        ]);

        $stream->update($validated);

        return response()->json([
            'data' => $stream
        ]);
    }

    public function updateViewerCount(Request $request, $id)
    {
        $validated = $request->validate([
            'viewer_count' => 'required|integer|min:0',
        ]);

        $stream = Stream::where('id', $id)->where('is_live', true)->first();

        if (!$stream) {
            return response()->json(['error' => 'Stream not found'], 404);
        }

        $stream->update([
            'viewer_count' => $validated['viewer_count'],
            'peak_viewers' => max($stream->peak_viewers, $validated['viewer_count']),
        ]);

        return response()->json(['message' => 'Viewer count updated']);
    }

    public function generateStreamKey(Request $request)
    {
        $user = $request->user();

        $streamKey = Str::random(48);

        $user->update(['stream_key' => $streamKey]);

        return response()->json([
            'stream_key' => $streamKey
        ]);
    }

    public function getMyStream(Request $request)
    {
        $user = $request->user();

        // Generate stream key if user doesn't have one
        if (!$user->stream_key) {
            $user->update(['stream_key' => Str::random(48)]);
            $user->refresh();
        }

        $stream = Stream::where('user_id', $user->id)
            ->latest()
            ->first();

        $stats = StreamStat::firstOrCreate(['user_id' => $user->id]);

        return response()->json([
            'stream' => $stream,
            'stats' => $stats,
            'stream_key' => $user->stream_key,
        ]);
    }
}

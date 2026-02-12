<?php

namespace App\Console\Commands;

use App\Models\Stream;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class CreateTestStream extends Command
{
    protected $signature = 'stream:test';
    protected $description = 'Create test livestream data';

    public function handle()
    {
        $user = User::first();

        if (!$user) {
            $this->error('No users found in database!');
            return 1;
        }

        if (!$user->stream_key) {
            $user->update(['stream_key' => Str::random(48)]);
            $this->info("Generated stream_key for user: {$user->name}");
        }

        Stream::create([
            'user_id' => $user->id,
            'title' => 'Test Livestream - Gaming Session',
            'category' => 'Gaming',
            'description' => 'This is a test livestream',
            'is_live' => true,
            'viewer_count' => 42,
            'started_at' => now(),
            'hls_path' => $user->stream_key,
        ]);

        $this->info('✓ Test stream created successfully!');
        $this->info("Stream Key: {$user->stream_key}");
        
        return 0;
    }
}

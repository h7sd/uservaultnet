<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StreamStat extends Model
{
    protected $fillable = [
        'user_id',
        'total_streams',
        'total_stream_time_seconds',
        'total_views',
        'peak_viewers',
        'total_chat_messages',
    ];

    protected $casts = [
        'total_streams' => 'integer',
        'total_stream_time_seconds' => 'integer',
        'total_views' => 'integer',
        'peak_viewers' => 'integer',
        'total_chat_messages' => 'integer',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

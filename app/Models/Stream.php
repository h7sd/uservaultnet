<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Stream extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'category',
        'description',
        'hls_path',
        'thumbnail_url',
        'is_live',
        'viewer_count',
        'peak_viewers',
        'started_at',
        'ended_at',
    ];

    protected $casts = [
        'is_live' => 'boolean',
        'viewer_count' => 'integer',
        'peak_viewers' => 'integer',
        'started_at' => 'datetime',
        'ended_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function chatMessages(): HasMany
    {
        return $this->hasMany(StreamChatMessage::class);
    }
}

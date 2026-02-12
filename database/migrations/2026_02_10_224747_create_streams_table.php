<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('streams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('title');
            $table->string('category')->nullable();
            $table->text('description')->nullable();
            $table->string('hls_path')->nullable();
            $table->string('thumbnail_url')->nullable();
            $table->boolean('is_live')->default(false);
            $table->integer('viewer_count')->default(0);
            $table->integer('peak_viewers')->default(0);
            $table->timestamp('started_at')->nullable();
            $table->timestamp('ended_at')->nullable();
            $table->timestamps();
            
            $table->index('user_id');
            $table->index('is_live');
            $table->index(['user_id', 'is_live']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('streams');
    }
};

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
        Schema::create('stream_stats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->unique();
            $table->integer('total_streams')->default(0);
            $table->bigInteger('total_stream_time_seconds')->default(0);
            $table->bigInteger('total_views')->default(0);
            $table->integer('peak_viewers')->default(0);
            $table->integer('total_chat_messages')->default(0);
            $table->timestamps();
            
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stream_stats');
    }
};

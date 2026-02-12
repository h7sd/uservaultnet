<?php

use App\Http\Controllers\Api\Webhook\MediaMTXWebhookController;
use Illuminate\Support\Facades\Route;

Route::post('/mediamtx', [MediaMTXWebhookController::class, 'handleStreamEvent']);

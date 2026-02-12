<?php

use App\Http\Controllers\Api\User\Stream\StreamController;
use App\Http\Controllers\Api\StreamChatController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StreamController::class, 'index']);
Route::get('/{id}', [StreamController::class, 'show']);
Route::get('/{streamId}/chat', [StreamChatController::class, 'getMessages']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/my/dashboard', [StreamController::class, 'getMyStream']);
    Route::post('/start', [StreamController::class, 'start']);
    Route::post('/stop', [StreamController::class, 'stop']);
    Route::put('/{id}', [StreamController::class, 'update']);
    Route::post('/{id}/viewer-count', [StreamController::class, 'updateViewerCount']);
    Route::post('/generate-key', [StreamController::class, 'generateStreamKey']);
    Route::post('/{streamId}/chat', [StreamChatController::class, 'sendMessage']);
});


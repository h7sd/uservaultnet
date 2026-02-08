<?php
/*
|--------------------------------------------------------------------------
| ColibriPlus - The Ultimate Social Network Web Application.
|--------------------------------------------------------------------------
| Home / Feed API Routes
|--------------------------------------------------------------------------
*/

Route::get('/feed', [App\Http\Controllers\Api\User\Timeline\FeedController::class, 'getFeed']);
Route::get('/update', [App\Http\Controllers\Api\User\Timeline\FeedController::class, 'getFeedUpdate']);
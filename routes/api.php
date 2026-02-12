<?php
/*
|--------------------------------------------------------------------------
| ColibriPlus - The Ultimate Social Network Web Application.
|--------------------------------------------------------------------------
| Author: Mansur Terla. Full-Stack Web Developer, UI/UX Designer.
| Website: www.terla.me
| E-mail: mansurtl.contact@gmail.com
| Instagram: @mansur_terla
| Telegram: @mansurtl_contact
|--------------------------------------------------------------------------
| Copyright (c)  ColibriPlus. All rights reserved.
|--------------------------------------------------------------------------
*/

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'device_name' => 'required',
    ]);
 
    $user = User::where('email', $request->email)->first();
 
    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }
 
    return $user->createToken($request->device_name)->plainTextToken;
});

// ============================================
// REGISTER FLOW (2 Schritte wie Website)
// ============================================

// SCHRITT 1: E-Mail senden → Bestätigungscode per E-Mail
Route::post('/register/send-code', function (Request $request) {
    $request->validate([
        'email' => 'required|email|max:62|unique:users,email',
    ]);

    // Prüfen ob E-Mail auf Blacklist
    $blacklistService = app(\App\Services\Blacklist\BlacklistService::class);
    if ($blacklistService->isEmailBlacklisted($request->email)) {
        throw ValidationException::withMessages([
            'email' => ['Diese E-Mail-Adresse ist nicht erlaubt.'],
        ]);
    }

    // Alte Tokens für diese E-Mail löschen
    \App\Models\EmailConfirmation::where('email', $request->email)->delete();

    // Neuen Token und Code erstellen
    $emailToken = \Illuminate\Support\Str::uuid();
    $confirmationCode = (string) rand(100000, 999999); // 6-stelliger Code

    $emailConfirmation = \App\Models\EmailConfirmation::create([
        'email' => $request->email,
        'token' => $emailToken,
        'code' => $confirmationCode, // Code in DB speichern!
    ]);

    // E-Mail mit Code senden
    \Illuminate\Support\Facades\Mail::to($request->email)->queue(
        new \App\Mail\User\Auth\RegistrationCodeMail([
            'title' => 'Verify Your Email Address',
            'subTitle' => 'Your Verification Code',
            'description' => 'Please use the following code to complete your registration:',
            'code' => $confirmationCode,
            'ignoreEmail' => "If you didn't request this code, please ignore this email.",
        ])
    );

    return response()->json([
        'status' => 'success',
        'code' => 200,
        'data' => [
            'message' => 'Bestätigungscode wurde an deine E-Mail gesendet.',
            'email' => $request->email,
        ]
    ]);
});

// SCHRITT 2: Code bestätigen + Account erstellen
Route::post('/register/verify', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'code' => 'required|string|size:6', // 6-stelliger Code
        'password' => 'required|min:8|confirmed',
        'username' => 'required|min:3|max:30|unique:users,username|regex:/^[a-zA-Z0-9._]+$/',
        'first_name' => 'required|string|max:50',
        'last_name' => 'nullable|string|max:50',
        'birth_day' => 'required|integer|min:1|max:31',
        'birth_month' => 'required|integer|min:1|max:12',
        'birth_year' => 'required|integer|min:1900|max:' . (date('Y') - 13),
        'gender' => 'required|in:male,female,not-specified',
        'country' => 'required|string|max:2',
        'city' => 'nullable|string|max:100',
        'device_name' => 'required',
    ]);

    // E-Mail und Code prüfen
    $emailConfirmation = \App\Models\EmailConfirmation::where('email', $request->email)
        ->where('code', $request->code)
        ->first();

    if (!$emailConfirmation) {
        throw ValidationException::withMessages([
            'code' => ['Ungültiger oder abgelaufener Bestätigungscode.'],
        ]);
    }

    // Zeitlimit prüfen (15 Minuten)
    if ($emailConfirmation->created_at->diffInMinutes(now()) > 15) {
        $emailConfirmation->delete();
        throw ValidationException::withMessages([
            'code' => ['Der Bestätigungscode ist abgelaufen. Bitte fordere einen neuen an.'],
        ]);
    }

    // User erstellen
    $user = User::create([
        'email' => $emailConfirmation->email,
        'password' => Hash::make($request->password),
        'username' => strtolower($request->username),
        'first_name' => $request->first_name,
        'last_name' => $request->last_name ?? '',
        'birth_day' => $request->birth_day,
        'birth_month' => $request->birth_month,
        'birth_year' => $request->birth_year,
        'gender' => $request->gender,
        'country' => strtoupper($request->country),
        'city' => $request->city ?? '',
        'tips' => [], // Default leeres Array für Tips
    ]);

    // Token löschen (einmalig verwendbar)
    $emailConfirmation->delete();

    return response()->json([
        'status' => 'success',
        'code' => 200,
        'data' => [
            'token' => $user->createToken($request->device_name)->plainTextToken,
            'user' => [
                'id' => $user->id,
                'username' => $user->username,
                'email' => $user->email,
                'name' => $user->name,
                'avatar_url' => $user->avatar_url,
            ]
        ]
    ]);
});

// ============================================
// FORGOT PASSWORD FLOW (2 Schritte wie Website)
// ============================================

// SCHRITT 1: E-Mail eingeben → Reset-Code per E-Mail
Route::post('/password/forgot', function (Request $request) {
    $request->validate([
        'email' => 'required|email|exists:users,email',
    ]);

    // Alte Tokens für diese E-Mail löschen
    \App\Models\EmailConfirmation::where('email', $request->email)->delete();

    // Neuen Token und Code erstellen
    $emailToken = \Illuminate\Support\Str::uuid();
    $confirmationCode = (string) rand(100000, 999999); // 6-stelliger Code

    $userData = User::where('email', $request->email)->first();

    $emailConfirmation = \App\Models\EmailConfirmation::create([
        'email' => $request->email,
        'token' => $emailToken,
        'code' => $confirmationCode, // Code in DB speichern!
    ]);

    // E-Mail mit Code senden
    \Illuminate\Support\Facades\Mail::to($request->email)->queue(
        new \App\Mail\User\Auth\PasswordResetCodeMail([
            'name' => $userData->name,
            'title' => 'Reset Your Password',
            'subTitle' => 'Your Password Reset Code',
            'description' => 'Please use the following code to reset your password:',
            'code' => $confirmationCode,
            'ignoreEmail' => "If you didn't request a password reset, please ignore this email.",
        ])
    );

    return response()->json([
        'status' => 'success',
        'code' => 200,
        'data' => [
            'message' => 'Passwort-Reset-Code wurde an deine E-Mail gesendet.',
            'email' => $request->email,
        ]
    ]);
});

// SCHRITT 2: Neues Passwort setzen
Route::post('/password/reset', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'code' => 'required|string|size:6', // 6-stelliger Code
        'password' => 'required|min:8|confirmed',
        'device_name' => 'required',
    ]);

    // E-Mail und Code prüfen
    $emailConfirmation = \App\Models\EmailConfirmation::where('email', $request->email)
        ->where('code', $request->code)
        ->first();

    if (!$emailConfirmation) {
        throw ValidationException::withMessages([
            'code' => ['Ungültiger oder abgelaufener Reset-Code.'],
        ]);
    }

    // Zeitlimit prüfen (15 Minuten)
    if ($emailConfirmation->created_at->diffInMinutes(now()) > 15) {
        $emailConfirmation->delete();
        throw ValidationException::withMessages([
            'code' => ['Der Reset-Code ist abgelaufen. Bitte fordere einen neuen an.'],
        ]);
    }

    // User finden und Passwort aktualisieren
    $user = User::where('email', $emailConfirmation->email)->first();

    if (!$user) {
        throw ValidationException::withMessages([
            'email' => ['Benutzer nicht gefunden.'],
        ]);
    }

    $user->update([
        'password' => Hash::make($request->password),
    ]);

    // Token löschen
    $emailConfirmation->delete();

    return response()->json([
        'status' => 'success',
        'code' => 200,
        'data' => [
            'message' => 'Passwort wurde erfolgreich zurückgesetzt.',
            'token' => $user->createToken($request->device_name)->plainTextToken,
            'user' => [
                'id' => $user->id,
                'username' => $user->username,
                'email' => $user->email,
                'name' => $user->name,
                'avatar_url' => $user->avatar_url,
            ]
        ]
    ]);
});

Route::prefix('home')->middleware(['auth:sanctum', 'throttle:240,1'])->group(base_path('routes/api/user/home.php'));

Route::prefix('translations')->middleware(['throttle:60,1'])->group(base_path('routes/api/translations.php'));

Route::prefix('bootstrap')->middleware(['auth:sanctum', 'throttle:60,1'])->group(base_path('routes/api/user/bootstrap.php'));

Route::prefix('settings')->middleware(['auth:sanctum', 'throttle:60,1'])->group(base_path('routes/api/user/account_settings.php'));

Route::prefix('auth')->middleware(['auth:sanctum', 'throttle:60,1'])->group(base_path('routes/api/user/auth.php'));

Route::prefix('post/editor')->middleware(['auth:sanctum', 'throttle:240,1'])->group(base_path('routes/api/user/post_editor.php'));

Route::prefix('story/editor')->middleware(['auth:sanctum', 'throttle:60,1'])->group(base_path('routes/api/user/story_editor.php'));

Route::prefix('timeline')->middleware(['auth:sanctum', 'throttle:240,1'])->group(base_path('routes/api/user/timeline.php'));

Route::prefix('stories')->middleware(['auth:sanctum', 'throttle:60,1'])->group(base_path('routes/api/user/stories.php'));

Route::prefix('profile')->middleware(['auth:sanctum', 'throttle:60,1'])->group(base_path('routes/api/user/profile.php'));

Route::prefix('follows')->middleware(['auth:sanctum', 'throttle:60,1'])->group(base_path('routes/api/user/follows.php'));

Route::prefix('marketplace')->middleware(['auth:sanctum', 'throttle:60,1'])->group(base_path('routes/api/user/marketplace.php'));

Route::prefix('jobs')->middleware(['auth:sanctum', 'throttle:60,1'])->group(base_path('routes/api/user/jobs.php'));

Route::prefix('messenger')->middleware(['auth:sanctum', 'throttle:60,1'])->group(base_path('routes/api/user/messenger.php'));

Route::prefix('admin')->middleware(['auth:sanctum', 'throttle:60,1'])->group(base_path('routes/api/user/admin.php'));

Route::prefix('recommendations')->middleware(['auth:sanctum', 'throttle:60,1'])->group(base_path('routes/api/user/recommend.php'));

Route::prefix('explore')->middleware(['auth:sanctum', 'throttle:60,1'])->group(base_path('routes/api/user/explore.php'));

Route::prefix('notifications')->middleware(['auth:sanctum', 'throttle:60,1'])->group(base_path('routes/api/user/notifications.php'));

Route::prefix('autocompletes')->middleware(['auth:sanctum', 'throttle:60,1'])->group(base_path('routes/api/user/autocompletes.php'));

Route::prefix('translator')->middleware(['auth:sanctum', 'throttle:60,1'])->group(base_path('routes/api/user/translator.php'));

Route::prefix('feedback')->middleware(['auth:sanctum', 'throttle:15,1'])->group(base_path('routes/api/user/feedback.php'));

Route::prefix('bookmarks')->middleware(['auth:sanctum', 'throttle:60,1'])->group(base_path('routes/api/user/bookmarks.php'));

Route::prefix('wallet')->middleware(['auth:sanctum', 'throttle:60,1'])->group(base_path('routes/api/user/wallet.php'));

Route::prefix('system')->middleware(['throttle:60,1'])->group(base_path('routes/api/system/master.php'));

Route::prefix('ads')->middleware(['throttle:60,1'])->group(base_path('routes/api/ads/ad.php'));

Route::prefix('tips')->middleware(['auth:sanctum', 'throttle:60,1'])->group(base_path('routes/api/user/tips.php'));

Route::prefix('streams')->middleware(['throttle:240,1'])->group(base_path('routes/api/user/streams.php'));

Route::prefix('webhooks')->middleware(['throttle:120,1'])->group(base_path('routes/api/webhooks.php'));
<?php

namespace App\Listeners\User\Auth;

use Illuminate\Support\Facades\Mail;
use App\Mail\User\Auth\RegistrationCodeMail;
use App\Events\User\Auth\UserRegisteredEvent;

class HandleUserRegistration
{
    /**
     * Handle the event.
     */
    public function handle(UserRegisteredEvent $event): void
    {
        Mail::to($event->data['email'])->queue(new RegistrationCodeMail([
            'title' => 'Verify Your Email Address',
            'subTitle' => 'Your Verification Code',
            'description' => 'Please use the following code to complete your registration:',
            'code' => $event->data['code'] ?? '000000',
            'ignoreEmail' => "If you didn't request this code, please ignore this email.",
        ]));
    }
}

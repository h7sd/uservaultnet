<?php

namespace App\Livewire\User\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\EmailConfirmation;
use Illuminate\Support\Facades\Mail;
use App\Mail\User\Auth\PasswordResetCodeMail;

class ForgotForm extends Component
{
    public string $emailAddress;

    public function render()
    {
        return view('livewire.user.auth.forgot-form');
    }

    public function submitForm()
    {
        $this->validate(rules: [
            'emailAddress' => ['required', 'string', 'email', 'max:62', 'exists:users,email']
        ], messages: [
            'emailAddress.exists' => __('auth.email_not_found')
        ], attributes: [
            'emailAddress' => __('auth.email')
        ]);

        $emailToken = Str::uuid();
        $confirmationCode = (string) rand(100000, 999999); // 6-stelliger Code

        $userData = User::where('email', $this->emailAddress)->first();

        $emailConfirmation = EmailConfirmation::create([
            'email' => $this->emailAddress,
            'token' => $emailToken,
            'code' => $confirmationCode, // Code in DB speichern
        ]);

        Mail::to($this->emailAddress)->send(new PasswordResetCodeMail([
            'name' => $userData->name,
            'title' => 'Reset Your Password',
            'subTitle' => 'Your Password Reset Code',
            'description' => 'Please use the following code to reset your password:',
            'code' => $confirmationCode,
            'ignoreEmail' => "If you didn't request a password reset, please ignore this email.",
        ]));

        $this->redirect(route('user.auth.forgot-success', ['hashId' => $emailConfirmation->hash_id]));
    }
}

<?php

namespace App\Livewire\User\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\User\Auth\PasswordResetCodeMail;

class ForgotSuccessForm extends Component
{
    public $confirmationData;
    public $emailResent;
    public $emailResendTimeout;

    public function mount()
    {
        $this->emailResendTimeout = session()->get('emailResendTime', null);
    }

    public function render()
    {
        return view('livewire.user.auth.forgot-success-form');
    }

    public function submitForm()
    {
        if($this->confirmationData) {
            if(empty($this->emailResendTimeout) || $this->emailResendTimeout <= now()) {
                $userData = User::where('email', $this->confirmationData->email)->first();

                // Neuen Code generieren und in DB speichern
                $confirmationCode = (string) rand(100000, 999999);
                $this->confirmationData->update(['code' => $confirmationCode]);

                Mail::to($this->confirmationData->email)->queue(new PasswordResetCodeMail([
                    'name' => $userData->name,
                    'title' => 'Reset Your Password',
                    'subTitle' => 'Your Password Reset Code',
                    'description' => 'Please use the following code to reset your password:',
                    'code' => $confirmationCode,
                    'ignoreEmail' => "If you didn't request a password reset, please ignore this email.",
                ]));

                $this->emailResent = true;

                $this->emailResendTimeout = now()->addMinutes(30);

                session()->put('emailResendTime', $this->emailResendTimeout);
            }
            else{
                $this->addError('resend-timeout', __('auth.resend_link_error'));
            }
        }

        else{
            abort(500);
        }
    }
}

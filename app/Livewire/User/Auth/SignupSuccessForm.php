<?php

namespace App\Livewire\User\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\User\Auth\RegistrationCodeMail;

class SignupSuccessForm extends Component
{
    public $confirmationData;
    public $emailResent;
    public $emailResendTimeout;
    public $code;

    public function mount()
    {
        $this->emailResendTimeout = session()->get('emailResendTime', null);
    }

    public function render()
    {
        return view('livewire.user.auth.signup-success-form');
    }

    public function verifyCode()
    {
        $this->validate([
            'code' => 'required|string|size:6',
        ]);

        if($this->confirmationData && $this->confirmationData->code === $this->code) {
            return redirect()->route('user.auth.confirm-signup', ['token' => $this->confirmationData->token]);
        }

        $this->addError('code', 'Invalid verification code.');
    }

    public function submitForm()
    {
        if($this->confirmationData) {
            if(empty($this->emailResendTimeout) || $this->emailResendTimeout <= now()) {
                // Neuen Code generieren und in DB speichern
                $confirmationCode = (string) rand(100000, 999999);
                $this->confirmationData->update(['code' => $confirmationCode]);

                Mail::to($this->confirmationData->email)->send(new RegistrationCodeMail([
                    'title' => 'Verify Your Email Address',
                    'subTitle' => 'Your Verification Code',
                    'description' => 'Please use the following code to complete your registration:',
                    'code' => $confirmationCode,
                    'ignoreEmail' => "If you didn't request this code, please ignore this email.",
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

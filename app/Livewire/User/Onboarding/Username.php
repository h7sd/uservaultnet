<?php

namespace App\Livewire\User\Onboarding;

use Throwable;
use App\Models\User;
use Illuminate\Support\Str;
use App\Enums\User\UserStatus;
use Illuminate\Validation\Rule;
use App\Events\User\Auth\UserSignupCompletedEvent;
use App\Livewire\User\Onboarding\Base\OnboardingBase;

class Username extends OnboardingBase
{
    public string $username;
    public $isAvailable = null;
	public int $stepIndex;
    public array $stepData;

    public function mount()
    {
        $this->username = me()->username;
    }

    public function render()
    {
        return view('livewire.user.onboarding.username');
    }

    public function checkAvailability()
    {
        if(Str::length($this->username) >= 1) {
            $this->isAvailable = (User::where('username', $this->username)->exists() != true);
        }
    }

    public function updatedUsername()
    {
        $this->reset('isAvailable');

        $this->checkAvailability();
    }

    public function submitForm()
    {
        $this->validate(rules: [
            'username' => ['required', 'string', 'max:32', 'regex:/^[a-zA-Z0-9._]+$/', Rule::unique('users', 'username')->ignore(me()->id)]
        ], attributes: [
            'username' => __('labels.username'),
        ], messages: [
            'username.regex' => 'The username can only contain letters, numbers, underscores, and dots.',
        ]);

        $user = me();

        $user->updateQuietly([
            'username' => $this->username,
            'status' => UserStatus::ACTIVE
        ]);

        $this->makeFollowList();

        $this->redirect($this->getNextStepRoute($this->stepIndex));
    }

    private function makeFollowList()
    {
        try {
            $followList = config('user.auto_follow_list');

            if(empty($followList)) {
                return false;
            }

            $followList = explode(',', $followList);

            $followList = User::active()->whereIn('username', $followList)->get();

            if($followList->isNotEmpty()) {
                foreach($followList as $userData) {
                    me()->follow($userData);
                }
            }

            event(new UserSignupCompletedEvent(me()));

            return true;
        } catch (Throwable $th) {
            logger()->error('Error making follow list on onboard.', [
                'error' => $th->getMessage(),
                'followList' => $followList
            ]);

            return false;
        }
    }
}

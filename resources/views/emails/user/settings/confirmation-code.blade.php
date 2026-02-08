@extends('emails.layouts.main')

@section('email_content')
<x-emails.title>
    {{ $data['title'] }}
</x-emails.title>

<x-emails.spacer space="12"></x-emails.spacer>
<x-emails.par>
    <b>{{ $data['subTitle'] }}</b>
</x-emails.par>
<x-emails.par>
    {{ $data['description'] }}
</x-emails.par>
<x-emails.spacer space="32"></x-emails.spacer>
<x-emails.par>
    <x-emails.code>{{ $data['code'] }}</x-emails.code>
</x-emails.par>

{{-- Deep Link für die App --}}
<x-emails.spacer space="24"></x-emails.spacer>
<x-emails.par>
    <a href="rork-app://verify-email/{{ $data['code'] }}" 
       style="background-color: #007AFF; color: white; padding: 12px 24px; text-decoration: none; border-radius: 8px; display: inline-block;">
        verify on app
    </a>
</x-emails.par>

<x-emails.spacer space="4"></x-emails.spacer>
<x-emails.par>
    {{ $data['ignoreEmail'] }}
</x-emails.par>
<x-emails.spacer space="32"></x-emails.spacer>
<x-emails.par>
    {{ __('email.keep_best_experience', ['app_name' => config('app.name')]) }}
</x-emails.par>
<x-emails.spacer space="12"></x-emails.spacer>
<x-emails.par>
    {{ __('email.regards') }},
    {{ __('email.team_caption', ['app_name' => config('app.name')]) }}
</x-emails.par>
@endsection
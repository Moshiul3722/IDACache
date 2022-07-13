@component('mail::message')

# Hello {{$event->user['name']}},
@component('mail::panel')
You have been created an account on IDA Cashe socity. For future login to your account you need to <b>Reset</b> your password.
@endcomponent


@component('mail::button', ['url' => route('password.reset', $token).'?email='.$email])
Reset Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

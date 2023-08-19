@component('mail::message')
# Password Recovery

A temporary password has been generated for you. Change the password to a desired one once you sign in.
<p>Your Username is : {{$details->username}}</p>
<p>Your recovery password is: {{$details->passcode}}</p>

@component('mail::button', ['url' => 'https://pullwork.net'])
Sign In
@endcomponent

Enjoy,<br>
{{ config('app.name') }}
@endcomponent

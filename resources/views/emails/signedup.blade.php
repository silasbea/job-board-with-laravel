@component('mail::message')


<h2>Hello buddy. Your Pullwork has been created.</h2>
<p>Your Username is : {{$details->username}}</p>
<p>Your password is: pass8008!</p>
<p>Your <b>secret password </b> for password recovery purposes is: {{$details->secret}}</p>
<p>*Please change your password to a more secure one once you sign in.</p>

@component('mail::button', ['url' => 'https://pullwork.net'])
Sign In
@endcomponent

@component('mail::panel', ['url' => 'https://pullwork.net'])
Pullwork. Growing an active freelancer community.
@endcomponent


Enjoy,<br>
{{ config('app.name') }}
@endcomponent

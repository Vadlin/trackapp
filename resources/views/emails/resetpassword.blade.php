Hi, {{ $name }}

Here is the link to reset your email

@component('mail::button', ['url' => $resetPasswordUrl])
    Reset Your Password
@endcomponent

Acess this link if the button doesn't work :
{{ $resetPasswordUrl }}

Thanks,<br>
TrackApp

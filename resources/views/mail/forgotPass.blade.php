
@component('mail::message')
Hello **{{$name}}**,  {{-- use double space for line break --}}
Thank you for being a premium member with calyfn.
YOUR OTP IS {{$otp}}.
Click below to start working right now
@component('mail::button', ['url' => $link])
Go to the calyfn and enter OTP
@endcomponent
Sincerely,
Calyfn team.
@endcomponent
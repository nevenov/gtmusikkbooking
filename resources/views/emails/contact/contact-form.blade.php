@component('mail::message')

<strong>Message:</strong>

<strong>Name:</strong> {{ $data['name'] }}

<strong>Email:</strong> {{ $data['email'] }}

{{ $data['comments'] }}


@endcomponent

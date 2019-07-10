@component('mail::message')

<strong>Message:</strong>

{{ $data['comments'] }}

<strong>Name:</strong> {{ $data['name'] }}

<strong>Email:</strong> {{ $data['email'] }}


@endcomponent

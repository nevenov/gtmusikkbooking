@component('mail::message')
# Ново съобщение от:

<strong>Name:</strong> {{ $data['name'] }}

<strong>Email:</strong> {{ $data['email'] }}

<strong>Message:</strong>

{{ $data['comments'] }}


@endcomponent

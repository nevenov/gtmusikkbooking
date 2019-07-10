@component('mail::message')


{{ $data['comments'] }}

<br>

<strong>Name:</strong> {{ $data['name'] }}

<strong>Email:</strong> {{ $data['email'] }}


@endcomponent

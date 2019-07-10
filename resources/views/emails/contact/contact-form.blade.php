@component('mail::message')


{{ $data['comments'] }}



<strong>Name:</strong> {{ $data['name'] }}

<strong>Email:</strong> {{ $data['email'] }}


@endcomponent

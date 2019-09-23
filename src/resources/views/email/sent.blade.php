@component('mail::message')
    # New message from {{ $name }}

    {{ $message }}

    {{ config('app.name') }}
@endcomponent
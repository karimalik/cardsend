<x-mail::message>
# Nouveau Message De {{ $message['nom'] }}

Sujet: {{ $message['sujet'] }}

Email: {{ $message['email'] }}

Message: {{ $message['message'] }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
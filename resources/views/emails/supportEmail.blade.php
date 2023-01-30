<x-mail::message>
# Nouveau Message De {{ $data['nom'] }}

Sujet: {{ $data['sujet'] }}

Email: {{ $data['email'] }}

Message: {{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

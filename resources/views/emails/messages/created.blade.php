@component('mail::message')
# Hey {{ $name }}

La demande suivante a bien été prise en compte :
@component('mail::panel')
{{ $msg }}
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent

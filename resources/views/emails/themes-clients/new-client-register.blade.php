@component('mail::message')
<h1 style="text-align: center;">Hola {{ $name }} , gracias por suscribirte a {{config('app.name')}}</h1>
<img class="img-responsive" src="{{ url('/img/logo_lalabag.png.png') }}" style="padding:15%">
<p style="text-align: center;">Te notificaremos cuando estemos listos.</p>
@endcomponent

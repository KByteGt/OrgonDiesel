@component('mail::message')
# Hola!

## Tienes un nuevo mensaje
<br>
<strong>Nombre:</strong>
@component('mail::panel')
    # {{ $details['name'] }}
@endcomponent
<strong>Correo electrónico:</strong>
@component('mail::panel')
    # {{ $details['email'] }}
@endcomponent
<strong>Número de teléfono:</strong>
@component('mail::panel')
    # {{ $details['phone'] }}
@endcomponent
<strong>Contenido del mensaje:</strong>
@component('mail::panel')
    {{ $details['content'] }}
@endcomponent

{{ date('r') }} <br>
Mensaje enviado de:
<br>
<strong>Formulario de contacto</strong>
@endcomponent

@component('mail::message')
    #Gracias por tu Mensaje

    Nombre: {{ $data['name'] }}
    Email:  {{ $data['email'] }}
    Asunto: {{ $data['subject'] }}

    Mensaje:

    {{ $data['message'] }}
@endcomponent

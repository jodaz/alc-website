Hola <i>{{ $data->name.' '.$data->last_name }}</i>,
<p>Se te asignó un usuario dentro del administrador de nuestro sitio web <a href="{{ $url }}" target="_blank"><i>SomosCarupano</i></a>.</p>

<p>Desde allí podrás apoyarnos en la carga de notas informativas referentes a la gestión de la Prof. Nircia Villegas, alcaldesa del Municipio Bermúdez.</p>

<div>
    <p><b>Datos de acceso</b></p>
    <p><b>Url:   </b>&nbsp; <a href="{{ $url }}" target="_blank">SomosCarupano</a></p>
    <p><b>Email: </b>&nbsp; {{ $data->email }}</p>
    <p><b>Clave: </b>&nbsp; {{ $data->password }}</p>
</div>

<div>
    <p><b>Nota:</b> Recuerda que el acceso es estrictamente personal y eres responsable por cada actividad que realices dentro administrador web.</p>
</div>

Gracias por tu apoyo,
<br/>
<i>Puedes cambiar tu clave, una vez que te hayas logueado, en la sección perfil.</i>

<div>
    #SomosCarupano
    #BermudezEnMArcha
</div>

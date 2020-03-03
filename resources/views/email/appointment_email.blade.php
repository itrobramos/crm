<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
</head>

<body>
    <h1>Solicitud de cita</h1>
    <hr>
    <h2>Información del cliente</h2>
    <b>Nombre:</b><span>{!! $client_name !!}</span><br>
    <b>Email:</b><span>{!! $client_email !!}</span><br>
    <b>Telefono:</b><span>{!! $client_phone !!}</span>

    <hr>
    <h2>Información de la mascota</h2>
    <b>Nombre:</b><span>{!! $pet_name !!}</span><br>
    <b>Raza:</b><span>{!! $pet_breed !!}</span><br>
    <b>Sexo:</b><span>{!! $pet_genre !!}</span>

    <hr>
    <h2>Información de la cita</h2>
    <b>Fecha:</b><span>{!! $appointment_date !!}</span><br>
    <b>Hora:</b><span>{!! $appointment_time !!}</span><br>
    <b>Tipo:</b><span>{!! $appointment_type !!}</span><br>

    <b>Municipio:</b><span>{!! $appointment_city !!}</span><br>
    <b>Dirección:</b><span>{!! $appointment_address !!}</span><br>
    <b>Notas:</b><span>{!! $appointment_notes !!}</span><br><br>
    <a href={!!env("DEPLOY_URL")!!}/appointments/{!! $appointment_id !!}><input type = 'button' value="Más Detalles"></a>
    
    <br><br>

    <a href={!!env("DEPLOY_URL")!!}/api/acceptAppointment/{!! $appointment_id !!}><input type = 'button' value='Aceptar'></a>
    <a href={!!env("DEPLOY_URL")!!}/api/denyAppointment/{!! $appointment_id !!}><input type = 'button' value='Rechazar'></a>
    
</body>

</html>
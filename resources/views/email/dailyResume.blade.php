

<div class="note-editable" contenteditable="true" role="textbox" aria-multiline="true" spellcheck="true" autocorrect="true" style="height: 400px;">
    <h3>
    <br>
    </h3>
    <h2>Notificaciones del día de hoy:  {{$today}}</h2><p>
    <br></p>
    <h3>Citas programadas para hoy
    </h3><p>
    <br></p>

    <table class="table table-bordered">
    <thead>
        <th style="border:2px solid black">Hora</th>
        <th style="border:2px solid black">Cliente</th>
        <th style="border:2px solid black">Mascota</th>
        <th style="border:2px solid black">Comentarios</th>
    </thead>
    <tbody>
    @foreach($appointments as $appointment)
    <tr>
        <td style="border:1px solid black">{{$appointment['time']}}</td>
        <td style="border:1px solid black">{{$appointment->pet->client->first_name}} {{$appointment->pet->client->last_name}}</td>
        <td style="border:1px solid black">{{$appointment->pet->name}}</td>
        <td style="border:1px solid black">{{$appointment->notes}}</td>
    </tr>
    @endforeach

    </tbody>
    </table>
    <p>
    <br></p>


    <h3>Cumpleaños de clientes
    </h3><p>
    <br></p>

    <table class="table table-bordered">
    <thead>
        <th style="border:2px solid black">Cliente</th>
        <th style="border:2px solid black">Aniversario</th>
    </thead>
    <tbody>
    @foreach($clients as $client)
    <tr>
        <td style="border:1px solid black">{{$client->first_name}} {{$client->last_name}}</td>
        <td style="border:1px solid black">{{$client->test}}</td>
    </tr>
    @endforeach

    </tbody>
    </table>
    <p>
    <br></p>


    <h3>Citas programadas para hoy
    </h3><p>
    <br></p>

    <table class="table table-bordered">
    <thead>
        <th style="border:2px solid black">Hora</th>
        <th style="border:2px solid black">Cliente</th>
        <th style="border:2px solid black">Mascota</th>
        <th style="border:2px solid black">Comentarios</th>
    </thead>
    <tbody>
    @foreach($appointments as $appointment)
    <tr>
        <td style="border:1px solid black">{{$appointment['time']}}</td>
        <td style="border:1px solid black">{{$appointment->pet->client->first_name}} {{$appointment->pet->client->last_name}}</td>
        <td style="border:1px solid black">{{$appointment->pet->name}}</td>
        <td style="border:1px solid black">{{$appointment->notes}}</td>
    </tr>
    @endforeach

    </tbody>
    </table>
    <p>
    <br></p>

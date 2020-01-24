@extends('layouts.app')

@section('content')
<script src="https://momentjs.com/downloads/moment.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.js'></script>
<script src='fullcalendar/interaction/main.js'></script>
<link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css" />


<script>
$(document).ready(function() {
    $('#calendar').fullCalendar({
        selectable: true,

        events: [
            @foreach ($appointments as $appointment)
            {
                title : '{{ $appointment["title"] }}',
                start : '{{ $appointment["start"] }}',
            },
            @endforeach
        ],
        select: function(start, end, jsEvent, view) {
            var allDay = !start.hasTime() && !end.hasTime();
            if (confirm(["¿Desea agendar una cita el: " + moment(start).format() + " ?"]) ==
                true)
                window.location.href = "/appointments/create?date=" + moment(start).format();
        }
    });

});
</script>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

<br><br><br>
<br><br><br>

<div id='calendar'></div>

<br>
<br>
<br>
@endsection

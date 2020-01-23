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
        events: [{
            start: '2020-01-10T10:00:00',
            end: '2020-01-10T16:00:00',
            textColor: 'white',   
            color:"#5E72E4",
            title: "Cliente / mascota"
        }],
        select: function(start, end, jsEvent, view) {
            // start contains the date you have selected
            // end contains the end date. 
            // Caution: the end date is exclusive (new since v2).
            var allDay = !start.hasTime() && !end.hasTime();
            if (confirm(["¿Desea agendar una cita el: " + moment(start).format() + " ?"]) ==
                true)
                window.location.href = "/appointments/create/" + moment(start).format();
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
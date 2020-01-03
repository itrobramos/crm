@extends('layouts.app')

@section('content')
<script src="https://momentjs.com/downloads/moment.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.js'></script>
<link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css" />

<script>
        $(document).ready(function() {

            $('#calendar').fullCalendar({
              header:{
                center:'Week'
              },

              customButtons: {
              Week: {
                text: 'Week',
                click: function() {
                  //$('#calendar').fullCalendar('changeView', 'agendaDay');
                  $('#calendar').fullCalendar('changeView', 'agendaWeek');
                  }
                }
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
@extends('layouts.app')

@section('myScripts')
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            // put your options and callbacks here
            defaultView: 'agendaWeek',
            events : [
                    title : 'test',
                    start : '2019-12-11T09:00:00',
                    end: '2019-12-11T10:00:00'
            ],
            dayClick: function(date, jsEvent, view) {
                window.location = "create_menu?date="+ date.format('YYYY-MM-DD');
            }
        });

    });
</script>
@endsection

@section('content')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

<a href='menus/add'><button class="btn btn-md btn-success">Add</button></a>

<div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Calendario</h3>
            </div>

            <div id='calendar'></div>

          </div>
        </div>
      </div>

@endsection

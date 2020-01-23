@extends('layouts.app')

@section('content')

<link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css"
    rel="stylesheet" />

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js">
</script>


<div class="row">

    <div class="col">
        <div class="card shadow">

            <div class="tab-pane fade show active" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                <div class="card bg-secondary shadow" id="test1">
                    <br>
                    <div class="card-body">

                        <div class="pl-lg-4">
                            <div class="row">

                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-date">Fecha</label>
                                        <input type="date" id="input-date" name="date"
                                            class="form-control form-control-alternative datepicker"
                                            data-format="yyyy-mm-dd" value="{{ isset($date)?$date:""}}">
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-time">Hora</label>
                                        <input type="time" id="input-time" name="time"
                                            class="form-control form-control-alternative" require
                                            value="{{ isset($appointment->hour)?$appointment->hour:""}}">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <label class="form-control-label" for="input-time">Cliente / Mascota</label>
                                    <select name="petId" id="clientId" class="form-control">
                                        @foreach($pets as $pet)
                                        <option value="{{$pet->id}}" selected>{{$pet->client->first_name}}
                                            {{$pet->client->last_name}} /
                                            {{$pet->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label class="form-control-label" for="input-time">Tipo</label>
                                    <select name="type" id="type" class="form-control">
                                        <option value="preventivo">Correctivo</option>
                                        <option value="preventivo">Preventivo</option>
                                    </select>
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label>Notas</label>
                                        <textarea rows="4" class="form-control form-control-alternative"
                                            name="notes">{{ isset($appointment->notes)?$appointment->notes:""}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-lg-4">
                                    <div class="text-right">
                                        <a href="{{ url('appointments')}}" class='btn btn-primary btn-md'>Cancelar</a>
                                        <input type="submit" id="btnSave" class='btn btn-success btn-md'
                                            value="Guardar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <script type="text/javascript">
                    $("#btnSave").click(function(e) {

                        var name = $("#input-first_name").val();
                        var last_name = $("#input-last_name").val();
                        if (name == '' || last_name == '') {
                            e.preventDefault();
                            alert("Nombre y apellido son datos obligatorios");
                        }
                    });
                    </script>
                    @endsection
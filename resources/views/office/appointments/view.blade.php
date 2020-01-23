@extends('layouts.app')

@section('content')

<div class="row">


<div class="col">
    <div class="card shadow">
    <div class="card-header border-0">
                <h3 class="mb-0">Citas</h3>
                <br>
                <div class="col-1 text-right">
                    <a href="{{ url('appointments/create')}}" class="btn btn-sm btn-primary">Nueva cita</a>
                </div>
            </div>


        <div class="tab-pane fade show active" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
            <div class="card bg-secondary shadow" id="test1">
                <br>
                <div class="card-body">

                    <div class="pl-lg-6">
                        <div class="row">

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-date">Fecha</label>
                                    <input type="date" id="input-date" name="date"
                                        class="form-control form-control-alternative datepicker"
                                        data-format="yyyy-mm-dd" value="{{$appointment->date}}" >
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-time">Hora</label>
                                    <input type="time" id="input-time" name="time"
                                        class="form-control form-control-alternative" value="{{$appointment->time}}">
                                </div>
                            </div>

                        </div>

                        <br>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="form-control-label" for="input-time">Tipo</label>
                                <input type="client" id="input-client" name="client"
                                        class="form-control form-control-alternative" value="{{ucwords($appointment->type)}}">
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="form-control-label" for="input-time">Client</label>
                                <input type="client" id="input-client" name="client"
                                        class="form-control form-control-alternative" value="{{ucwords($appointment->pet->client->first_name)}} {{ucwords($appointment->pet->client->last_name)}}">
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="form-control-label" for="input-time">Mascota</label>
                                <input type="client" id="input-client" name="client"
                                        class="form-control form-control-alternative" value="{{ucwords($appointment->pet->name)}}">
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label>Notas</label>
                                    <textarea rows="4" class="form-control form-control-alternative"
                                        name="notes">{{$appointment->notes}}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label>Dirección</label>
                                    <textarea rows="4" class="form-control form-control-alternative"
                                        name="notes">{{$appointment->pet->client->address}} {{$appointment->pet->client->city}}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="text-right">
                                    <a href="{{ url('appointments')}}" class='btn btn-primary btn-md'>Regresar</a>
                                    <input type="submit" id="btnSave" class='btn btn-success btn-md'
                                        value="Guardar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>

@endsection


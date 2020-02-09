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

                        <h6 class="heading-small text-muted mb-4">Información básica</h6>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Email</label>
                                    <input type="text" id="input-email" name="email"
                                        class="form-control form-control-alternative" value="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">Nombre</label>
                                    <input type="text" id="input-name" name="first_name"
                                        class="form-control form-control-alternative" value="">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">Apellido</label>
                                    <input type="text" id="input-name" name="last_name"
                                        class="form-control form-control-alternative" value="">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-phone">Teléfono</label>
                                    <input type="text" id="input-phone" name="phone"
                                        class="form-control form-control-alternative" value="">
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-sex-client">Sexo</label>
                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="defaultUnchecked"
                                            name="genre" value="F"
                                            {{ isset($client->genre) && $client->genre == "F" ?"checked":""}}>
                                        <label class="custom-control-label" for="defaultUnchecked">Femenino</label>
                                    </div>

                                    <!-- Default checked -->
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="defaultChecked"
                                            name="genre" value="M"
                                            {{ isset($client->genre) && $client->genre == "M" ?"checked":""}}>
                                        <label class="custom-control-label" for="defaultChecked">Masculino</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-birth_date">Fecha Nacimiento</label>
                                    <input type="date" id="input-birth_date" name="birth_date"
                                        class="form-control form-control-alternative datepicker"
                                        value="{{ isset($client->birth_date)?$client->birth_date:""}}">
                                </div>
                            </div>
                        </div>

                        <br>
                        <h6 class="heading-small text-muted mb-4">Información mascota</h6>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-name">Nombre</label>
                                    <input type="text" id="input-name" name="pet_name"
                                        class="form-control form-control-alternative" require
                                        value="{{ isset($pet->name)?$pet->name:""}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-breed">Raza</label>
                                    <input type="text" id="input-breed" name="breed"
                                        class="form-control form-control-alternative" require
                                        value="{{ isset($pet->breed)?$pet->breed:""}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-birth_date">Fecha Nacimiento</label>
                                    <input type="date" id="input-birth_date" name="pet_birth_date"
                                        class="form-control form-control-alternative datepicker"
                                        value="{{ isset($pet->birth_date)?$pet->birth_date:""}}">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-sex-pet">Sexo</label>
                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="defaultUnchecked2"
                                            name="pet_genre" value="F"
                                            {{ isset($pet->genre) && $pet->genre == "F" ?"checked":""}}>
                                        <label class="custom-control-label" for="defaultUnchecked2">Hembra</label>
                                    </div>

                                    <!-- Default checked -->
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="defaultChecked2"
                                            name="pet_genre" value="M"
                                            {{ isset($pet->genre) && $pet->genre == "M" ?"checked":""}}>
                                        <label class="custom-control-label" for="defaultChecked2">Macho</label>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <br>
                        <h6 class="heading-small text-muted mb-4">Información Cita</h6>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-date">Fecha</label>
                                    <input type="date" id="input-date" name="appointment_date" disabled
                                        class="form-control form-control-alternative datepicker"
                                        data-format="yyyy-mm-dd" value="{{ $date }}">
                                </div>

                            </div>

                            <div class="col-lg-3">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-time">Hora</label>
                                    <input type="time" id="input-time" name="appointment_time" disabled
                                        class="form-control form-control-alternative" require value="{{ $time }}">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label class="form-control-label" for="input-time">Tipo</label>
                                <select name="type" id="type" class="form-control">
                                    <option value="preventivo">Correctivo</option>
                                    <option value="preventivo">Preventivo</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-breed">Municipio</label>
                                    <input type="text" id="input-breed" name="city"
                                        class="form-control form-control-alternative" require
                                        value="">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label>Notas</label>
                                    <textarea rows="4" class="form-control form-control-alternative"
                                        name="notes">{{ isset($appointment->notes)?$appointment->notes:""}}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="text-left" style="font-size:12px">
                                    Al enviar esta información, será contactado por el entrenador para concretar
                                    detalles de la cita.
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="text-right">
                                    <a href="{{ url('appointments')}}" class='btn btn-primary btn-md'>Cancelar</a>
                                    <input type="submit" id="btnSave" class='btn btn-success btn-md'
                                        value="Contactarme">
                                </div>
                            </div>
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
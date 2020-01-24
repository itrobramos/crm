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

            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-control nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-info"
                        role="tab" aria-controls="nav-info" aria-selected="true">Información</a>
                    <a class="nav-item nav-control nav-link" id="nav-pets-tab" data-toggle="tab" href="#nav-pets"
                        role="tab" aria-controls="nav-pets" aria-selected="false">Mascotas</a>
                    <a class="nav-item nav-control nav-link" id="nav-appointments-tab" data-toggle="tab"
                        href="#nav-appointments" role="tab" aria-controls="nav-appointments"
                        aria-selected="false">Historial Citas</a>
                </div>
            </nav>



            <div class="tab-content" id="nav-tabContent">
                <!--INFORMACION TAB-->

                <div class="tab-pane fade show active" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                    <div class="card bg-secondary shadow" id="test1">
                        <br>
                        <div class="card-body">
                            <div class="text-center">

                                @if(isset($client->avatar))<br>
                                <br>

                                <div class="card-profile-image">
                                    <label for="avatar">
                                        <img src="{{asset($client->avatar)}}" id="imgavatar" class="rounded-circle">
                                    </label>
                                </div><br>

                                <input type='file' name="avatar" id="avatar" class='form-control-file'
                                    style="display:none">
                                @else
                                <div class="card-profile-image">
                                    <label for="avatar">
                                        <img id="imgavatar" class="rounded-circle">
                                    </label>
                                </div><br>
                                <input type='file' name="avatar" id="avatar" class='form-control-file'>
                                @endif
                            </div>

                            <br>
                            <br>
                            <br>
                            <h6 class="heading-small text-muted mb-4">Información básica</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-first_name">Nombre</label>
                                            <input type="text" id="input-first_name" name="first_name"
                                                class="form-control form-control-alternative" require
                                                value="{{ isset($client->first_name)?$client->first_name:""}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-last_name">Apellido</label>
                                            <input type="text" id="input-last_name" name="last_name"
                                                class="form-control form-control-alternative" require
                                                value="{{ isset($client->last_name)?$client->last_name:""}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-last_name">Fecha
                                                Nacimiento</label>
                                            <input type="date" id="input-birth_date" name="birth_date"
                                                class="form-control form-control-alternative datepicker"
                                                value="{{ isset($client->birth_date)?$client->birth_date:""}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-last_name">Sexo</label>
                                            <!-- Default unchecked -->
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="defaultUnchecked"
                                                    name="genre" value="F"
                                                    {{ isset($client->genre) && $client->genre == "F" ?"checked":""}}>
                                                <label class="custom-control-label"
                                                    for="defaultUnchecked">Femenino</label>
                                            </div>



                                            <!-- Default checked -->
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="defaultChecked"
                                                    name="genre" value="M"
                                                    {{ isset($client->genre) && $client->genre == "M" ?"checked":""}}>
                                                <label class="custom-control-label"
                                                    for="defaultChecked">Masculino</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">
                            <!-- Contacto -->
                            <h6 class="heading-small text-muted mb-4">Información de Contacto</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-email">Email</label>
                                            <input type="text" id="input-email"
                                                class="form-control form-control-alternative"
                                                value="{{ isset($client->email)?$client->email:""}}" name="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-telefono2">Celular</label>
                                            <input type="text" id="input-telefono2"
                                                class="form-control form-control-alternative"
                                                value="{{ isset($client->phone2)?$client->phone2:""}}" name="phone2">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <hr class="my-4">

                            <!-- Address -->
                            <h6 class="heading-small text-muted mb-4">Información de Localización</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-address">Dirección</label>
                                            <input id="input-address" class="form-control form-control-alternative"
                                                value="{{ isset($client->address)?$client->address:""}}" type="text"
                                                name="address">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-city">Ciudad</label>
                                            <input type="text" id="input-city"
                                                class="form-control form-control-alternative"
                                                value="{{ isset($client->city)?$client->city:""}}" name="city">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">
                            <!-- Description -->
                            <div class="pl-lg-4">
                                <div class="form-group focused">
                                    <label>Notas</label>
                                    <textarea rows="4" class="form-control form-control-alternative"
                                        name="notes">{{ isset($client->notes)?$client->notes:""}}</textarea>
                                </div>
                            </div>
                            <div class="text-right">

                                <a href="{{ url('clients')}}" class='btn btn-primary btn-md'>Cancelar</a>
                                <input type="submit" id="btnSave" class='btn btn-success btn-md' value="Guardar">
                            </div>
                        </div>
                    </div>

                </div>

                <!--MASCOTAS TAB-->
                <div class="tab-pane fade" id="nav-pets" role="tabpanel" aria-labelledby="nav-pets-tab">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Último Servicio</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($pets != null)
                                @foreach($pets as $pet)

                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder" src="{{env('DEPLOY_URL') . $pet->avatar}}">
                                            </a>
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">{{$pet->name}}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-warning"></i> Hace 5 meses
                                        </span>
                                    </td>

                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>

                </div>


                <!--CITAS TAB-->
                <div class="tab-pane fade" id="nav-appointments" role="tabpanel" aria-labelledby="nav-appointments-tab">

                    <div class="card bg-secondary shadow">

                        <br>

                        @if ($appointments != null)
                        @foreach ($appointments as $appointment)


                        <div class="card-body">

                            <div class="">
                                <div class="pl-lg-4 danger">

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-first_name">Fecha / Hora
                                                </label>
                                                <input type='text' class='form-control'
                                                    value='{{$appointment["date"]}}  / {{$appointment["time"]}}'
                                                    disabled>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last_name">Mascota</label>
                                                <input type='text' class='form-control' value='{{$appointment["pet"]}}'
                                                    disabled>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last_name">Estatus</label>

                                                <select name="status" class='form-control'>
                                                    <option value="propuesta">Propuesta</option>
                                                    <option value="aceptada">Aceptada</option>
                                                    <option value="cancelada">Cancelada</option>
                                                    <option value="finalizada">Finalizada</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last_name">Comentarios
                                                    previos</label>
                                                <textarea class='form-control'
                                                    disabled>{{$appointment["notes"]}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last_name">Comentarios
                                                    posteriores</label>
                                                <textarea class='form-control'>{{$appointment["comments"]}}</textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class='text-right'>
                                    <a href="{{ url('clients')}}" class='btn btn-warning btn-md'>Enviar</a>

                                </div>
                            </div>
                        </div>

                        <hr><br>
                        @endforeach
                        @endif

                    </div>
                </div>
            </div>

            <script type="text/javascript">
            function readURL(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#imgavatar').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }

            }

            $("#avatar").change(function() {
                $("#avatar").hide();
                readURL(this);
            });

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
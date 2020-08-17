@extends('layouts.login')

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
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email" >Email</label>
                                    <input type="text" id="input-email" name="email"
                                        class="form-control form-control-alternative" value="" required onfocusout="loadData()">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">Nombre</label>
                                    <input type="text" id="first_name" name="first_name"
                                        class="form-control form-control-alternative" value="" required>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">Apellido</label>
                                    <input type="text" id="last_name" name="last_name"
                                        class="form-control form-control-alternative" value="" required>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-phone">Teléfono</label>
                                    <input type="text" id="phone" name="phone"
                                        class="form-control form-control-alternative" value="" required>
                                </div>
                            </div>

                            <div class="col-lg-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <input type="radio" id="client_genre_f" value="F" name="genre" aria-label="Radio button for following text input" {{ isset($client->genre) && $client->genre == "F" ?"checked":""}}>Femenino<br>
                                    
                                    </div>
                                    <div class="input-group-text">
                                    <input type="radio"  id="client_genre_m" value="M" name="genre" aria-label="Radio button for following text input" {{ isset($client->genre) && $client->genre == "M" ?"checked":""}}>Masculino<br>
                                    
                                    </div>
                                </div>
                                </div>

                            </div>

                        </div>

                    


                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-birth_date">Fecha Nacimiento</label>
                                    <input type="date" id="birth_date" name="birth_date"
                                        class="form-control form-control-alternative datepicker"
                                        value="{{ isset($client->birth_date)?$client->birth_date:""}}" required>
                                </div>
                            </div>
                        </div>

                        <br>
                        <h6 class="heading-small text-muted mb-4">Información mascota</h6>

                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-name">Nombre</label>
                                    <input type="text" id="pet_name" name="pet_name"
                                        class="form-control form-control-alternative" require
                                        value="{{ isset($pet->name)?$pet->name:""}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-breed">Raza</label>
                                    <input type="text" id="pet_breed" name="breed"
                                        class="form-control form-control-alternative" require
                                        value="{{ isset($pet->breed)?$pet->breed:""}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-birth_date">Fecha Nacimiento</label>
                                    <input type="date" id="pet_birthdate" name="pet_birth_date"
                                        class="form-control form-control-alternative datepicker"
                                        value="{{ isset($pet->birth_date)?$pet->birth_date:""}}" required>
                                </div>
                            </div>

                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <input type="radio" id="pet_genre_f" value="F" name="pet_genre" aria-label="Radio button for following text input" {{ isset($pet->genre) && $pet->genre == "F" ?"checked":""}}>Hembra<br>
                                            
                                            </div>
                                            <div class="input-group-text">
                                            <input type="radio"  id="pet_genre_m" value="M" name="pet_genre" aria-label="Radio button for following text input" {{ isset($pet->genre) && $pet->genre == "M" ?"checked":""}}>Macho<br>
                                            
                                            </div>
                                        </div>
                                </div>


                            </div>

                        </div>


                        <br>
                        <h6 class="heading-small text-muted mb-4">Información Cita</h6>

                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-date">Fecha</label>
                                    <input type="date" id="input-date" name="appointment_date" readonly
                                        class="form-control form-control-alternative datepicker"
                                        data-format="yyyy-mm-dd" value="{{ $date }}" required>
                                </div>

                            </div>

                            <div class="col-lg-3">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-time">Hora</label>
                                    <input type="time" id="input-time" name="appointment_time" readonly
                                        class="form-control form-control-alternative" required value="{{ $time }}">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-3"></div>
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
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-breed">Municipio</label>
                                    <input type="text" id="city" name="city"
                                        class="form-control form-control-alternative" required
                                        value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-breed">Dirección</label>
                                    <textarea rows="4" class="form-control form-control-alternative"
                                        name="address" required id="address"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label>Notas</label>
                                    <textarea rows="4" class="form-control form-control-alternative"
                                        name="notes" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <div class="text-left" style="font-size:12px">
                                    Al enviar esta información, será contactado por el entrenador para concretar
                                    detalles de la cita.
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-lg-3"></div>
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

        function loadData(){
            var email = $("#input-email").val();
            $.ajax({
                    type: "GET",
                    dataType: "JSON",
                    contentType: false,
                    processData: false,
                    url: "../api/getClientInfo?email="+email,
                    success: function(data) {
                        if(data['statusCode'] == 1){
                            $('#first_name').val(data["resultset"]['first_name']);
                            $('#last_name').val(data["resultset"]["last_name"]);
                            $('#phone').val(data["resultset"]['phone']);
                            $('#birth_date').val(data["resultset"]["birthdate"]);
                            $('#pet_birthdate').val(data["resultset"]["pet_birthdate"]);
                            $('#pet_name').val(data["resultset"]["pet_name"]);
                            $('#pet_breed').val(data["resultset"]["pet_breed"]);
                            $('#city').val(data["resultset"]["city"]);
                            $('#address').val(data["resultset"]["address"]);

                            if(data["resultset"]["pet_genre"] == 'M')
                                $('#pet_genre_m').prop('checked',true);
                            else
                                $('#pet_genre_f').prop('checked',true);

                            if(data["resultset"]["genre"] == 'M')
                                $('#client_genre_m').prop('checked',true);
                            else
                                $('#client_genre_f').prop('checked',true);
                        }

                    },
                    error : function(data){
                        console.log(data);
                        alert('Error');
                    }
                });

        }
        </script>
        @endsection

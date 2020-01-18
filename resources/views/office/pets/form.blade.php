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

            <div class="card bg-secondary shadow">
                <div class="card-body">
                    <div class="text-center">

                        @if(isset($pet->avatar))
                        <div class="card-profile-image">
                            <label for="avatar">
                                <img src="{{asset($pet->avatar)}}" id="imgavatar" class="rounded-circle">
                            </label>
                        </div><br>
                        <input type='file' name="avatar" id="avatar" class='form-control-file' style="display:none">
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
                                    <label class="form-control-label" for="input-name">Nombre</label>
                                    <input type="text" id="input-name" name="name"
                                        class="form-control form-control-alternative" require
                                        value="{{ isset($pet->name)?$pet->name:""}}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-breed">Raza</label>
                                    <input type="text" id="input-breed" name="breed"
                                        class="form-control form-control-alternative" require
                                        value="{{ isset($pet->breed)?$pet->breed:""}}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-birth_date">Fecha Nacimiento</label>
                                    <input type="text" id="input-birth_date" name="birth_date"
                                        class="form-control form-control-alternative datepicker"
                                        value="{{ isset($pet->birth_date)?$pet->birth_date:""}}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last_name">Sexo</label>
                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="defaultUnchecked"
                                            name="genre" value="F"
                                            {{ isset($pet->genre) && $pet->genre == "F" ?"checked":""}}>
                                        <label class="custom-control-label" for="defaultUnchecked">Hembra</label>
                                    </div>

                                    <!-- Default checked -->
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="defaultChecked"
                                            name="genre" value="M"
                                            {{ isset($pet->genre) && $pet->genre == "M" ?"checked":""}}>
                                        <label class="custom-control-label" for="defaultChecked">Macho</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4">
                    <!-- Contacto -->
                    <h6 class="heading-small text-muted mb-4">Información de Cliente</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-4">
                                <select name="clientId" id="clientId" class="form-control">
                                    @foreach($clients as $client)
                                    @if(!isset($pet) || $client->id == $pet->clientId)
                                    <option value="{{$client->id}}" selected>{{$client->first_name}}
                                        {{$client->last_name}}</option>
                                    @else
                                    <option value="{{$client->id}}">{{$client->first_name}} {{$client->last_name}}
                                    </option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <!-- <div class="col-lg-4">
                                <a href="../../clients/{{$pet->client->id}}/edit"><button
                                        class="btn btn-md btn-primary">Información</button></a>

                            </div> -->
                        </div>
                    </div>
                    <hr class="my-4">

                    <div class="text-right">

                        <a href="{{ url('pets')}}" class='btn btn-primary btn-md'>Cancelar</a>
                        <input type="submit" id="btnSave" class='btn btn-success btn-md' value="Guardar">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js">
</script>

<script type="text/javascript">
$(function() {
    $('.datepicker').datepicker();
});

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

    var name = $("#input-name").val();
    if (name == '' || last_name == '') {
        e.preventDefault();
        alert("Nombre y apellido son datos obligatorios");
    }
});
</script>
@endsection
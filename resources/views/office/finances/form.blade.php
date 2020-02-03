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
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last_name">Nuevo:</label>
                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="defaultUnchecked"
                                            name="type" value="E"
                                            {{ isset($finance->type) && $finance->type == "E" ?"checked":""}}>
                                        <label class="custom-control-label" for="defaultUnchecked">Egreso</label>
                                    </div>

                                    <!-- Default checked -->
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="defaultChecked" name="type"
                                            value="I" {{ isset($finance->type) && $finance->type == "I" ?"checked":""}}>
                                        <label class="custom-control-label" for="defaultChecked">Ingreso</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="appointmentId"
                                    value="{{ isset($appointmentId) ?"$appointmentId":""}}" hidden>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-name">Motivo</label>
                                    <input type="text" id="input-name" name="motive"
                                        class="form-control form-control-alternative" require
                                        value="{{ isset($finance->motive)?$finance->motive:""}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-name">Descripción</label>
                                    <textarea rows="4" class="form-control form-control-alternative"
                                        name="description">{{ isset($finance->description)?$finance->description:""}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-name">Monto</label>
                                    <input type="number" id="input-name" name="amount" step="0.01"
                                        class="form-control form-control-alternative" require
                                        value="{{ isset($finance->amount)?$finance->amount:""}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-name">Fecha</label>
                                    <input type="date" id="input-name" name="date"                                        class="form-control form-control-alternative" require
                                        value="{{ isset($date)?$date:""}}">
                                </div>
                            </div>
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

    var name = $("#input-name").val();
    if (name == '' || last_name == '') {
        e.preventDefault();
        alert("Nombre y apellido son datos obligatorios");
    }
});
</script>
@endsection
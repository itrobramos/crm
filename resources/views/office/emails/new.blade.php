@extends('layouts.app')

@section('content')

<script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js">
</script>

<!-- include libraries(jQuery, bootstrap) -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.js"></script>

<form action="{{ url('/emails/send') }}" method="Post" enctype="multipart/form-data">
{{ csrf_field()}}
    <div class='col-md-12'>
        <div class="row">
            <div class="col">
                <div class="card shadow">

                    <div class="card bg-secondary shadow">
                        <div class="card-body">
                            <div class="text-center">
                                <br>

                                <h6 class="heading-small text-muted mb-4">Redactar correo</h6>
                                <hr class="my-4">

                                <h6 class="heading-small text-muted mb-4">Cliente</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <select name="clientId" id="clientId" class="form-control">
                                                @foreach($clients as $client)
                                                @if(!isset($pet) || $client->id == $pet->clientId)
                                                <option value="{{$client->id}}" selected>{{$client->first_name}}
                                                    {{$client->last_name}}</option>
                                                @else
                                                <option value="{{$client->id}}">{{$client->first_name}}
                                                    {{$client->last_name}}
                                                </option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                </div>

                                <hr class="my-4">          

                                <textarea id="summernote" name="detail"></textarea>

                                <div class="text-right">
                                    <a href="{{ url('emails')}}" class='btn btn-primary btn-md'>Cancelar</a>
                                    <input type="submit" id="btnSave" class='btn btn-success btn-md' value="Enviar">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>

<script type="text/javascript">
$(document).ready(function() {
    $('#summernote').summernote({
        height: 400,
    });
});
</script>
@endsection
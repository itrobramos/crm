@extends('layouts.app')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

<!-- include libraries(jQuery, bootstrap) -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.js"></script>

<div class="row">
    <div class="col">
        <div class="card shadow">

            <div class="card bg-secondary shadow">
                <div class="card-body">
                    <div class="text-center">
                    <br>

                    <h6 class="heading-small text-muted mb-4">{{$email->name}}</h6>
                    <hr class="my-4">

                    <!-- <div id="summernote">{{$email->text}}</div> -->
                    <textarea id="summernote" name="detail">{{$email->text}}</textarea>


                    <div class="text-right">
                        <a href="{{ url('emails')}}" class='btn btn-primary btn-md'>Cancelar</a>
                        <input type="submit" id="btnSave" class='btn btn-success btn-md' value="Guardar">
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

$(document).ready(function() {
  $('#summernote').summernote({
      height:400,
  });
});

</script>
@endsection

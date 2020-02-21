<form action="{{ url('/appointments') }}" method="Post" enctype="multipart/form-data" id="form">
    {{ csrf_field()}}
    <div class='col-md-12'>
        @include("office.appointments.form")


    </div>
</form>
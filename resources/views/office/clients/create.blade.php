<form action="{{ url('/clients') }}" method="Post" enctype="multipart/form-data" id="form">
    {{ csrf_field()}}
    <div class='col-md-12'>
        @include("office.clients.form")


    </div>
</form>
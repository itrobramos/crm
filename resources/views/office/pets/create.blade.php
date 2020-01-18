<form action="{{ url('/pets') }}" method="Post" enctype="multipart/form-data" id="form">
    {{ csrf_field()}}
    <div class='col-md-12'>
        @include("office.pets.form")


    </div>
</form>
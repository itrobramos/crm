|<form action="{{ url('/finances') }}" method="Post" enctype="multipart/form-data" id="form">
    {{ csrf_field()}}
    <div class='col-md-12'>
        @include("office.finances.form")


    </div>
</form>
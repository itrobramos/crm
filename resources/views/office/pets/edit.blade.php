<form action="{{ url('/pets/' . $pet->id) }}" method="Post" enctype="multipart/form-data">
    {{ csrf_field()}}
    {{ method_field('PATCH')}}

    <div class='col-md-12'>
        @include("office.pets.form")


    </div>


</form>
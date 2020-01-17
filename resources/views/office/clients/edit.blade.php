<form action="{{ url('/clients/' . $client->id) }}" method="Post" enctype="multipart/form-data">
    {{ csrf_field()}}
    {{ method_field('PATCH')}}

    <div class='col-md-12'>
        @include("office.clients.form")


    </div>


</form>
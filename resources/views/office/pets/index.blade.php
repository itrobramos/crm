@extends('layouts.app')



@section('content')

<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <h3 class="mb-0">Mascotas</h3>
                <br>
                <div class="col-1 text-right">
                    <a href="{{ url('pets/create')}}" class="btn btn-sm btn-primary">Nueva mascota</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush" id="datatable">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Propietario</th>
                            <th scope="col">Último Servicio</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pets as $pet)
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <a href="#" class="avatar rounded-circle mr-3">
                                        <img alt="Image placeholder" src="{{$pet->avatar}}">
                                    </a>
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">{{$pet->name}}</span>
                                    </div>
                                </div>
                            </th>
                            <td>
                                {{$pet->client->first_name}} {{$pet->client->last_name}}
                            </td>
                            <td>
                                <span class="badge badge-dot mr-4">
                                    <i class="bg-warning"></i> Pendiente
                                </span>
                            </td>
                            <td class="text-left">
                                <form method='post' action="{{ url('/pets/' . $pet->id) }}">
                                    {{ csrf_field()}}
                                    {{ method_field('DELETE')}}
                                    <a href="./pets/{{$pet->id}}/edit"><button
                                            class="btn btn-icon btn-2 btn-primary btn-sm" type="button">
                                            <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                                        </button></a>
                                    <button class="btn btn-icon btn-2 btn-danger btn-sm" type="submit"
                                        onclick="return confirm('¿Está seguro?');">
                                        <span class="btn-inner--icon"><i class="fas fa-trash-alt"></i></span>
                                    </button>

                                </form>
                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>

<script>
$(document).ready( function () {
    $('#datatable').DataTable();
} );
</script>

@endsection
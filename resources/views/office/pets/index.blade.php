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
                <table class="table align-items-center table-flush">
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
                                    <i class="bg-warning"></i> Hace 5 meses
                                </span>
                            </td>
                            <td class="text-left">
                                <form method='post' action="{{ url('/pets/' . $pet->id) }}">
                                    {{ csrf_field()}}
                                    {{ method_field('DELETE')}}
                                    <a href="./pets/{{$pet->id}}/edit"><button
                                            class="btn btn-icon btn-2 btn-primary btn-sm" type="button">
                                            <span class="btn-inner--icon"><i class="fas fa-eye"></i></span>
                                        </button></a>
                                    <!-- <input type="submit" onclick="return confirm('Are you sure?');" value="Delete" class='btn btn-sm btn-danger'>    -->
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
            <!-- <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div> -->
        </div>
    </div>
</div>

@endsection
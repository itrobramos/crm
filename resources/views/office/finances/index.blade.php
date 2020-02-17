@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <h3 class="mb-0">Finanzas</h3>
            </div>
            <div class="col-4">
                <a href="{{ url('finances/create')}}" class="btn btn-sm btn-primary">Nuevo registro</a>
                <a href="{{ url('finances/reports')}}" class="btn btn-sm btn-warning">Ver Reportes</a>
            </div>
           <br>
            <div class="table-responsive">
                <table class="table align-items-center table-flush" id="datatable">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Fecha</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Motivo</th>
                            <th scope="col">Ingresos</th>
                            <th scope="col">Egresos</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($finances as $finance)
                        <tr>
                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">{{$finance->date}}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                {{$finance->client}}
                            </td>
                            <td>
                                {{$finance->motive}}
                            </td>
                            <td>
                                <span class="badge badge-dot mr-4">

                                    @if ($finance->type == "I")<i class="bg-success"></i>
                                    $ {{$finance->amount}}
                                    @endif
                                </span>
                            </td>
                            <td>
                                <span class="badge badge-dot mr-4">
                                    @if ($finance->type == "E")<i class="bg-warning"></i>
                                    $ {{$finance->amount}}
                                    @endif
                                </span>
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
@extends('layouts.app')


@section('content')

<form action="{{ url('/settings/') }}" method="Post" enctype="multipart/form-data">
    {{ csrf_field()}}
    {{ method_field('PATCH')}}

    <div class='col-md-12'>
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Configuración</h3>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Valor</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($settings as $setting)
                                <tr>
                                    <td>
                                        {{$setting->name}}
                                    </td>

                                    <td>
                                        <input type="{{$setting->input}}" name="{{$setting->name}}"
                                            value="{{$setting->value}}" class="form-control">
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class='text-right'>
                            <button class='btn btn-success btn-md'>Guardar</button>
                        </div>

                        <br>
                        <br>
                    </div>

                </div>
            </div>
        </div>

        @endsection

    </div>


</form>
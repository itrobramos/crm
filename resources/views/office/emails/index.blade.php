@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <h3 class="mb-0">Emails</h3>
                <br>
                <div class="col-1 text-right">
                    <a href="{{ url('emails/new')}}" class="btn btn-sm btn-primary">Redactar email</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($emails as $email)
                        <tr>
                            <td>
                                {{$email->name}}
                            </td>
                            <td class="text-left">
                                <form method='post' action="{{ url('/emails/' . $email->id) }}">
                                    {{ csrf_field()}}
                                    {{ method_field('DELETE')}}
                                    <a href="./emails/{{$email->id}}/edit"><button
                                            class="btn btn-icon btn-2 btn-primary btn-sm" type="button">
                                            <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                                        </button></a>
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

@endsection

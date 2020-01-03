@extends('layouts.app')



@section('content')

<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <h3 class="mb-0">Finanzas</h3>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Fecha</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Ingresos</th>
                            <th scope="col">Egresos</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">2020-01-03</span>
                                    </div>
                                </div>
                            </th>
                            <td>
                                John Smith
                            </td>
                            <td>
                                <span class="badge badge-dot mr-4">
                                    <i class="bg-success"></i> $ 800.00
                                </span>
                            </td>
                            <td>
                                <span class="badge badge-dot mr-4">
                                    <i class="bg-warning"></i> $ 200.00
                                </span>
                            </td>
                            <td>
                                <a href="./finances/1"><button class="btn btn-icon btn-2 btn-primary btn-sm"
                                        type="button">
                                        <span class="btn-inner--icon"><i class="fas fa-eye"></i></span>
                                    </button></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">2020-01-03</span>
                                    </div>
                                </div>
                            </th>
                            <td>
                                John Smith
                            </td>
                            <td>
                                <span class="badge badge-dot mr-4">
                                    <i class="bg-success"></i> $ 800.00
                                </span>
                            </td>
                            <td>
                                <span class="badge badge-dot mr-4">
                                    <i class="bg-warning"></i> $ 200.00
                                </span>
                            </td>
                            <td>
                                <a href="./finances/1"><button class="btn btn-icon btn-2 btn-primary btn-sm"
                                        type="button">
                                        <span class="btn-inner--icon"><i class="fas fa-eye"></i></span>
                                    </button></a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="card-footer py-4">
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
            </div>
        </div>
    </div>
</div>

@endsection
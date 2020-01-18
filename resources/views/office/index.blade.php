<!--

=========================================================
* Argon Dashboard - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Office
    </title>
    <!-- Favicon -->
    <link href="dashboard/assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    
    <!-- Icons -->
    <link href="{{ URL::asset('/dashboard/assets/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('/dashboard/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ URL::asset('/dashboard/assets/css/argon-dashboard.css?v=1.1.0') }}" rel="stylesheet" />




    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    </ </head> <body class="">
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
                aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <!-- User -->
            <ul class="nav align-items-center d-md-none">
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="ni ni-bell-55"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="media align-items-center">
                            <span class="avatar avatar-sm rounded-circle">
                                <img alt="Image placeholder" src="dashboard/assets/img/theme/team-1-800x800.jpg
">
                            </span>
                        </div>
                    </a>
                    <!-- <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Bienvenido</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>Mi Perfil</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Configuración</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Salir</span>
            </a>
          </div> -->
                </li>
            </ul>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Collapse header -->
                <div class="navbar-collapse-header d-md-none">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="./index.html">
                                <img src="dashboard/assets/img/brand/blue.png">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                                aria-label="Toggle sidenav">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Form -->
                <form class="mt-4 mb-3 d-md-none">
                    <div class="input-group input-group-rounded input-group-merge">
                        <input type="search" class="form-control form-control-rounded form-control-prepended"
                            placeholder="Search" aria-label="Search">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fa fa-search"></span>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item  class=" active" ">
          <a class=" nav-link active " href="{{ url('office')}}"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('clients')}}">
                            <i class="ni ni-single-02 text-blue"></i> Clientes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('pets')}}">
                            <i class="fas fa-paw" style="color:#DDDDDD;"></i> Mascotas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('appointments')}}">
                            <i class="ni ni-watch-time text-red"></i> Citas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('finances')}}">
                            <i class="fas fa-money-bill-wave" style="color:green;"></i>Finanzas
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
            </div>
        </div>
    </nav>
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./office">Dashboard</a>

                <!-- User -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                <img alt="Image placeholder" src="{{ URL::asset('/dashboard/assets/img/theme/team-4-800x800.jpg')}}">
                                </span>
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold">Nombre Admin</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Bienvenido</h6>
                            </div>
                            <a href="./examples/profile.html" class="dropdown-item">
                                <i class="ni ni-single-02"></i>
                                <span>Perfil</span>
                            </a>
                            <a href="./examples/profile.html" class="dropdown-item">
                                <i class="ni ni-settings-gear-65"></i>
                                <span>Configuración</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#!" class="dropdown-item">
                                <i class="ni ni-user-run"></i>
                                <span>Salir</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
        <!-- Header -->
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
            <div class="container-fluid">
                <div class="header-body">
                    <!-- Card stats -->
                    <div class="row">
                        <div class="col-xl-3 col-lg-6">
                            <a href="./clients">
                                <div class="card card-stats mb-4 mb-xl-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Clientes</h5>
                                                <span class="h2 font-weight-bold mb-0">291</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <a href="./pets">
                                <div class="card card-stats mb-4 mb-xl-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Mascotas</h5>
                                                <span class="h2 font-weight-bold mb-0">342</span>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                                    <i class="fas fa-paw"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <a href="./appointments">
                                <div class="card card-stats mb-4 mb-xl-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Citas</h5>
                                                <span class="h2 font-weight-bold mb-0">924</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                                    <i class="fas fa-calendar-check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <a href="./finances">
                                <div class="card card-stats mb-4 mb-xl-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Ingresos</h5>
                                                <span class="h2 font-weight-bold mb-0">$ 64,500</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                    <i class="fas fa-money-bill-wave"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col-xl-6">
                    <div class="card shadow">
                        <div class="card-header bg-transparent">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="text-uppercase text-muted ls-1 mb-1">Alertas</h6>
                                    <h2 class="mb-0">Notificaciones</h2>
                                </div>
                                <div class="col text-right">
                                    <a href="#!" class="btn btn-sm btn-primary">Ver todas</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Mensaje</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            Llamar a cliente: John Smith, 3 meses sin servicio
                                        </th>
                                        <td>
                                            <button class="btn btn-sm btn-danger">Eliminar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            Cumpleaños de "Goffy", mascota de Adam Simons
                                        </th>
                                        <td>
                                            <button class="btn btn-sm btn-danger">Eliminar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card shadow">
                        <div class="card-header bg-transparent">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="text-uppercase text-muted ls-1 mb-1">Agenda</h6>
                                    <h2 class="mb-0">Próximas citas</h2>
                                </div>
                                <div class="col text-right">
                                    <a href="#!" class="btn btn-sm btn-primary">Ver todas</a>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Hora</th>
                                        <th scope="col">Cliente</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            05-01-2020
                                        </th>
                                        <td>
                                            10:00
                                        </td>
                                        <td>
                                            John Smith
                                        </td>
                                        <td>
                                            <button class="btn btn-sm">Detalles</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            05-01-2020
                                        </th>
                                        <td>
                                            12:00
                                        </td>
                                        <td>
                                            Adam Simons
                                        </td>
                                        <td>
                                            <button class="btn btn-sm">Detalles</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xl-12 mb-5 mb-xl-0">

                    <div class="card default">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0">Ingresos $</h3>
                                </div>
                                <div class="col text-right">
                                    <a href="#!" class="btn btn-sm btn-primary">Ver todas</a>
                                </div>
                            </div>
                        </div>
                        <div id="myfirstchart" style="height: 250px;"></div>
                    </div>
                </div>

            </div>

            <hr>
        </div>
    </div>
    <!--   Core   -->

    </body>

</html>

<script type="text/javascript">
new Morris.Line({
    element: 'myfirstchart',
    data: [{
            date: '2019-11-02',
            value: 25
        },
        {
            date: '2019-11-08',
            value: 40
        },
        {
            date: '2019-11-10',
            value: 5
        },
        {
            date: '2019-11-14',
            value: 5
        },
        {
            date: '2019-11-17',
            value: 42
        }
    ],
    xkey: 'date',
    ykeys: ['value'],
    labels: ['Value'],
    xLabels: 'date'
});
</script>
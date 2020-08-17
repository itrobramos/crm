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
        Dashboard - CRM
    </title>
    <!-- Favicon -->
    <link href="../dashboard/assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{env('DEPLOY_URL')}}/dashboard/assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
    <link href="{{env('DEPLOY_URL')}}/dashboard/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{env('DEPLOY_URL')}}/dashboard/assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />


    <!--   Core   -->
    <script src="{{env('DEPLOY_URL')}}/dashboard/assets/js/plugins/jquery/dist/jquery.min.js"></script>
    <script src="{{env('DEPLOY_URL')}}/dashboard/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!--   Optional JS   -->
    <script src="{{env('DEPLOY_URL')}}/dashboard/assets/js/plugins/chart.js/dist/Chart.min.js"></script>
    <script src="{{env('DEPLOY_URL')}}/dashboard/assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
    <!--   Argon JS   -->
    <script src="{{env('DEPLOY_URL')}}/dashboard/assets/js/argon-dashboard.min.js?v=1.1.0')}}"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script type ="text/javascript" src ="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</head>

<body class="">
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
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="media align-items-center">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Bienvenido</h6>
                        </div>f
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
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Collapse header -->
                <div class="navbar-collapse-header d-md-none">
                    <div class="row">
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
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item  class=" active>
                        <a class=" nav-link active " href="{{ url('office')}}"> <i class="fas fa-tachometer-alt"></i> Dashboard</a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('notifications')}}">
                            <i class="fas fa-bell" style="color:orange;"></i>Notificaciones
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('emails')}}">
                            <i class="fas fa-envelope" style="color:blue;"></i>Emails
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('settings')}}">
                            <i class="fas fa-cogs" style="color:black;"></i>Configuración
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('logout')}}">
                            <i class="fa fa-sign-out-alt" style="color:black;"></i>Salir
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
        <div class="bg-gradient-primary pb-6 pt-3 pt-md-8">

        </div>
        <div class="container-fluid mt--7">

            @yield('content')

        </div>
    </div>


</body>

</html>

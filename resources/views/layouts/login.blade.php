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

    <div class="main-content">
        <!-- Navbar -->
        <div class="header bg-gradient-primary pb-6 pt-3 pt-md-8">

        </div>
        <div class="container-fluid mt--7">

            @yield('content')

        </div>
    </div>


</body>

</html>

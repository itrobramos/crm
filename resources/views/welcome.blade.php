<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adrian Hernandez</title>

    <link rel="stylesheet" href="{{env('DEPLOY_URL')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{env('DEPLOY_URL')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{env('DEPLOY_URL')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{env('DEPLOY_URL')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{env('DEPLOY_URL')}}/css/themify-icons.css">
    <link rel="stylesheet" href="{{env('DEPLOY_URL')}}/css/nice-select.css">
    <link rel="stylesheet" href="{{env('DEPLOY_URL')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{env('DEPLOY_URL')}}/css/gijgo.css">
    <link rel="stylesheet" href="{{env('DEPLOY_URL')}}/css/animate.min.css">
    <link rel="stylesheet" href="{{env('DEPLOY_URL')}}/css/slick.css">
    <link rel="stylesheet" href="{{env('DEPLOY_URL')}}/css/slicknav.css">
    <link rel="stylesheet" href="{{env('DEPLOY_URL')}}/css/style.css">
</head>

<body>

    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu   d-none d-lg-block">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8 ">
                        <div class="slider_text text-center">
                            <div class="text">
                                <h3>

                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
    <!-- recepie_area_start  -->
    <div class="recepie_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_recepie text-center">
                        <div class="recepie_thumb">
                            <img src="{{env('DEPLOY_URL')}}/img/recepie/menu5.png" alt="">
                        </div>
                        <!-- <h3>Comportamiento</h3> 
                        <span>Básico</span>
                        <p>Sesiones 3</p>
                        <a href="#" class="line_btn">Más información</a> -->
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_recepie text-center">
                        <div class="recepie_thumb">
                            <img src="{{env('DEPLOY_URL')}}/img/recepie/menu2.png" alt="">
                        </div>
                        <!-- <h3>Juegos</h3>
                        <span>Básico</span>
                        <p>Sesiones 3</p>
                        <a href="#" class="line_btn">Más información</a> -->
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_recepie text-center">
                        <div class="recepie_thumb">
                            <img src="{{env('DEPLOY_URL')}}/img/recepie/menu4.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- session_videos  -->
    <div class="customer_feedback_area">
        <div class="container">
            <div class="row justify-content-center mb-50">
                <div class="col-xl-9">
                    <div class="section_title text-center">
                        <h3>Sesiones en video</h3>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-xl-4">
                    <div class="dish_wrap d-flex">
                        <div class="single_dish text-center">
                            <video width="320" height="240" controls>
                                <source src="/img/video/sesion1.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="dish_wrap d-flex">
                        <div class="single_dish text-center">
                            <video width="320" height="240" controls>
                                <source src="/img/video/sesion2.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="dish_wrap d-flex">
                        <div class="single_dish text-center">
                            <video width="320" height="240" controls>
                                <source src="/img/video/sesion3.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- / customer_feedback_area  -->
    <div class="customer_feedback_area">
        <div class="container">
            <center>
                <h2>Adrián Hernández</h2>
            </center>

            <div class="row justify-content-center">
                <ul>
                    <li>Asesor en comportamiento canino</li>
                    <li>Certificado por el sistema CONOCER, perteneciente a la SEP como entrenador de perros</li>
                    <li>Servicio a domicilio personalizado</li>
                    <li>Entrenamiento sin collares de castigo o electrónicos</li>
                </ul>

            </div>
        </div>
    </div>

    <!-- customer_feedback_area  -->
    <div class="customer_feedback_area">
        <div class="container">
            <div class="row justify-content-center mb-50">
                <div class="col-xl-9">
                    <div class="section_title text-center">
                        <h3>Clientes Satisfechos</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4"></div>

                <div class="col-xl-4">
                    <div class="dish_wrap d-flex">
                        <div class="single_dish text-center">
                            <video width="320" height="240" controls>
                                <source src="/img/testmonial/video1.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- / customer_feedback_area  -->

    <!--Calendario -->

    <div class="customer_feedback_area">
        <div class="container">
            <div class="row justify-content-center mb-50">
                <div class="col-xl-9">
                    <div class="section_title text-center">
                        <h3>Reserva tu cita</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-2"></div>

                <div class="col-xl-8">

                    <div id='calendar' style="width:100%; height:400px;"></div>

                </div>
            </div>

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

        </div>
    </div>
    <!--Fin de calendario-->

    <!-- footer  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Admin
                            </h3>
                            <ul>
                                <li><a href="/office">Office</a></li>
                            </ul>

                        </div>
                    </div>

                </div>


            </div>
        </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row align-items-center">
                    <div class="col-xl-8 col-md-8">
                        <p class="copy_right">
                            <!-- Link back to Colorlib can't be removed.  is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                            </script> All rights reserved | This is made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed.  is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer  -->


    <!-- JS here -->

    <script src="{{env('DEPLOY_URL')}}/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="{{env('DEPLOY_URL')}}/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{env('DEPLOY_URL')}}/js/popper.min.js"></script>
    <script src="{{env('DEPLOY_URL')}}/js/bootstrap.min.js"></script>
    <script src="{{env('DEPLOY_URL')}}/js/owl.carousel.min.js"></script>
    <script src="{{env('DEPLOY_URL')}}/js/isotope.pkgd.min.js"></script>
    <script src="{{env('DEPLOY_URL')}}/js/ajax-form.js"></script>
    <script src="{{env('DEPLOY_URL')}}/js/waypoints.min.js"></script>
    <script src="{{env('DEPLOY_URL')}}/js/jquery.counterup.min.js"></script>
    <script src="{{env('DEPLOY_URL')}}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{env('DEPLOY_URL')}}/js/scrollIt.js"></script>
    <script src="{{env('DEPLOY_URL')}}/js/jquery.scrollUp.min.js"></script>
    <script src="{{env('DEPLOY_URL')}}/js/wow.min.js"></script>
    <script src="{{env('DEPLOY_URL')}}/js/nice-select.min.js"></script>
    <script src="{{env('DEPLOY_URL')}}/js/jquery.slicknav.min.js"></script>
    <script src="{{env('DEPLOY_URL')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{env('DEPLOY_URL')}}/js/plugins.js"></script>
    <script src="{{env('DEPLOY_URL')}}/js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="{{env('DEPLOY_URL')}}/js/contact.js"></script>
    <script src="{{env('DEPLOY_URL')}}/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{env('DEPLOY_URL')}}/js/jquery.form.js"></script>
    <script src="{{env('DEPLOY_URL')}}/js/jquery.validate.min.js"></script>
    <script src="{{env('DEPLOY_URL')}}/js/mail-script.js"></script>

    <script src="{{env('DEPLOY_URL')}}/js/main.js"></script>

    <script src="https://momentjs.com/downloads/moment.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.js'></script>
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css" />

    <!-- <script src="fullcalendar/interaction/main.js"></script> -->


    <script type='text/javascript'>
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            selectable: true,
            defaultView: 'agendaWeek',
            minTime: '{{$inicio_citas}}',
            maxTime: '{{$fin_citas}}',
            showEndEvent: true,
            nowIndicator: true,
            hiddenDays: [ 0 ], //hide sundays
            eventLimit: true, // for all non-TimeGrid views
            views: {
                timeGrid: {
                eventLimit: 6 // adjust to 6 only for timeGridWeek/timeGridDay
                }
            },
            events: [
                @foreach($appointments as $appointment) {
                    id: '{{ $appointment["id"]}}',
                    title: 'No Disponible',
                    start: '{{ $appointment["start"] }}',
                    end: '{{ $appointment["end"]}}',
                    color: '{{$color}}'
                },
                @endforeach
            ],
            select: function(start, end, jsEvent, view) {
                if(start.isBefore(moment())) {
                    $('#calendar').fullCalendar('unselect');
                    return false;
                }

                var allDay = !start.hasTime() && !end.hasTime();
                if (confirm(["¿Desea agendar una cita el: " + moment(start).format() + " ?"]) ==
                    true)
                    window.location.href = "/appointments/request?date=" + moment(start).format();
            }
        });
    });
    </script>


</body>

</html>
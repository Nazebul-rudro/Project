<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <link rel="shortcut icon" href="{{ asset('ui/fontend/img/fav.png') }}">
        <title>{{ $title ?? 'Not Found' }}</title>

        <!-- Base Css Files -->
        <link href="{{ asset('ui/backend') }}/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="{{ asset('ui/backend') }}/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="{{ asset('ui/backend') }}/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="{{ asset('ui/backend') }}/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="{{ asset('ui/backend') }}/css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="{{ asset('ui/backend') }}/css/waves-effect.css" rel="stylesheet">

        <!-- sweet alerts -->
        <link href="{{ asset('ui/backend') }}/assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">

        <!-- Custom Files -->
        <link href="{{ asset('ui/backend') }}/css/helper.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('ui/backend') }}/css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{ asset('ui/backend') }}/js/modernizr.min.js"></script>
        
        
    </head>



    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
        <x-backend.layouts.partials.header/>


<x-backend.layouts.partials.sidebar/>

  <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

          {{ $slot }}
        </div> <!-- container -->
                               
    </div> <!-- content -->

    <x-backend.layouts.partials.footer/>

</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-10.jpg" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>  
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ asset('ui/backend') }}/js/jquery.min.js"></script>
        <script src="{{ asset('ui/backend') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('ui/backend') }}/js/waves.js"></script>
        <script src="{{ asset('ui/backend') }}/js/wow.min.js"></script>
        <script src="{{ asset('ui/backend') }}/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="{{ asset('ui/backend') }}/js/jquery.scrollTo.min.js"></script>
        <script src="{{ asset('ui/backend') }}/assets/chat/moment-2.2.1.js"></script>
        <script src="{{ asset('ui/backend') }}/assets/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="{{ asset('ui/backend') }}/assets/jquery-detectmobile/detect.js"></script>
        <script src="{{ asset('ui/backend') }}/assets/fastclick/fastclick.js"></script>
        <script src="{{ asset('ui/backend') }}/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="{{ asset('ui/backend') }}/assets/jquery-blockui/jquery.blockUI.js"></script>

        <!-- sweet alerts -->
        <script src="{{ asset('ui/backend') }}/assets/sweet-alert/sweet-alert.min.js"></script>
        <script src="{{ asset('ui/backend') }}/assets/sweet-alert/sweet-alert.init.js"></script>

        <!-- flot Chart -->
        <script src="{{ asset('ui/backend') }}/assets/flot-chart/jquery.flot.js"></script>
        <script src="{{ asset('ui/backend') }}/assets/flot-chart/jquery.flot.time.js"></script>
        <script src="{{ asset('ui/backend') }}/assets/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="{{ asset('ui/backend') }}/assets/flot-chart/jquery.flot.resize.js"></script>
        <script src="{{ asset('ui/backend') }}/assets/flot-chart/jquery.flot.pie.js"></script>
        <script src="{{ asset('ui/backend') }}/assets/flot-chart/jquery.flot.selection.js"></script>
        <script src="{{ asset('ui/backend') }}/assets/flot-chart/jquery.flot.stack.js"></script>
        <script src="{{ asset('ui/backend') }}/assets/flot-chart/jquery.flot.crosshair.js"></script>

        <!-- Counter-up -->
        <script src="{{ asset('ui/backend') }}/assets/counterup/waypoints.min.js" type="text/javascript"></script>
        <script src="{{ asset('ui/backend') }}/assets/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="{{ asset('ui/backend') }}/js/jquery.app.js"></script>

        <!-- Dashboard -->
        <script src="{{ asset('ui/backend') }}/js/jquery.dashboard.js"></script>

        <!-- Chat -->
        <script src="{{ asset('ui/backend') }}/js/jquery.chat.js"></script>

        <!-- Todo -->
        <script src="{{ asset('ui/backend') }}/js/jquery.todo.js"></script>

        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
    
    </body>
</html>
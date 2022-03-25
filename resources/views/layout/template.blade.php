<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>@yield('title')</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="{{asset('bootsrap')}}/images/favicon.ico">

        <!--Chartist Chart CSS -->
        <link rel="stylesheet" href="{{asset('bootsrap')}}/plugins/chartist/css/chartist.min.css">

        <!-- Summernote -->
        <link rel="stylesheet" href="{{asset('bootsrap')}}/plugins/summernote/summernote-bs4.css">

        <!-- DataTables -->
        <link href="{{asset('bootsrap')}}/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('bootsrap')}}/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{asset('bootsrap')}}/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <link href="{{asset('bootsrap')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="{{asset('bootsrap')}}/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="{{asset('bootsrap')}}/css/icons.css" rel="stylesheet" type="text/css">
        <link href="{{asset('bootsrap')}}/css/style.css" rel="stylesheet" type="text/css">


    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span>
                                <img src="{{asset('bootsrap')}}/images/logo-light.png" alt="" height="18">
                            </span>
                        <i>
                                <img src="{{asset('bootsrap')}}/images/logo-sm.png" alt="" height="22">
                            </i>
                    </a>
                </div>

                <nav class="navbar-custom">

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Main</li>
                            <li>
                                <a href="/" class="waves-effect"><i class="ti-view-grid"></i><span> Tabel </span></a>
                            </li>

                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            @yield('content')
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- jQuery  -->
        <script src="{{asset('bootsrap')}}/js/jquery.min.js"></script>
        <script src="{{asset('bootsrap')}}/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('bootsrap')}}/js/metisMenu.min.js"></script>
        <script src="{{asset('bootsrap')}}/js/jquery.slimscroll.js"></script>
        <script src="{{asset('bootsrap')}}/js/waves.min.js"></script>

        <!--tinymce js-->
        <script src="{{asset('bootsrap')}}/plugins/tinymce/tinymce.min.js"></script>

        <!--Summernote js-->
        <script src="{{asset('bootsrap')}}/plugins/summernote/summernote-bs4.min.js"></script>

        <script src="{{asset('bootsrap')}}/pages/form-editors.int.js"></script>

        <!-- Required datatable js -->
        <script src="{{asset('bootsrap')}}/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{asset('bootsrap')}}/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Buttons examples -->
        <script src="{{asset('bootsrap')}}/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="{{asset('bootsrap')}}/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="{{asset('bootsrap')}}/plugins/datatables/jszip.min.js"></script>
        <script src="{{asset('bootsrap')}}/plugins/datatables/pdfmake.min.js"></script>
        <script src="{{asset('bootsrap')}}/plugins/datatables/vfs_fonts.js"></script>
        <script src="{{asset('bootsrap')}}/plugins/datatables/buttons.html5.min.js"></script>
        <script src="{{asset('bootsrap')}}/plugins/datatables/buttons.print.min.js"></script>
        <script src="{{asset('bootsrap')}}/plugins/datatables/buttons.colVis.min.js"></script>

        <!-- Responsive examples -->
        <script src="{{asset('bootsrap')}}/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="{{asset('bootsrap')}}/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="{{asset('bootsrap')}}/pages/datatables.init.js"></script>    

        <!--Chartist Chart-->
        <script src="{{asset('bootsrap')}}/plugins/chartist/js/chartist.min.js"></script>
        <script src="{{asset('bootsrap')}}/plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>

        <!-- peity JS -->
        <script src="{{asset('bootsrap')}}/plugins/peity-chart/jquery.peity.min.js"></script>

        <script src="{{asset('bootsrap')}}/pages/dashboard.js"></script>
        
        <!-- App js -->
        <script src="{{asset('bootsrap')}}/js/app.js"></script>
        
    </body>

</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csfr-token" content="{{ csrf_token() }}">
        <meta name="routeName" content="{{ Route::currentRouteName() }}">

        <title>@yield('title') </title>

        <!-- Bootstrap -->
        <link  href="{{ url('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link  href="{{ url('/assets/css/font-awesome.min.css') }}" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link  href="{{ url('/assets/css/custom.css') }}" rel="stylesheet">
        
        <!-- Mis Estilos -->
        <link  href="{{ url('/assets/css/styles.css') }}" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                @include('layout.sidenavbar')
                @include('layout.navbar')
                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>@yield('main-title')</h3>
                            </div>

                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12  ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2 style="width:100%;" class="d-flex justify-content-between align-items-center">@yield('subtitle')</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li>
                                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->
            @include('layout.footer')
        </div>
        </div>

        <!-- jQuery -->
        <script src="{{ url('/assets/js/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ url('/assets/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Custom Theme Scripts -->
        <script src="{{ url('/assets/js/custom.min.js') }}"></script>
    </body>
</html>
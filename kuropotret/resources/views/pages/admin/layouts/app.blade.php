<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">


    <title>Sleek - Admin Dashboard Template</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{asset('admin_asset/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
    <!-- No Extra plugin used -->
    <link href="{{asset('admin_asset/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />

    <link href="{{asset('admin_asset/assets/plugins/toastr/toastr.min.css')}}" rel="stylesheet" />

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{asset('admin_asset/assets/css/sleek.css')}}" />

    <!-- FAVICON -->
    <!-- <link href="{{asset('admin_asset/assets/img/favicon.png')}}" rel="shortcut icon" /> -->
    <script src="{{asset('admin_asset/assets/plugins/nprogress/nprogress.js')}}"></script>
    <!-- Data Table -->
    <link href="{{asset('admin_asset/assets/plugins/data-tables/datatables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/assets/plugins/data-tables/responsive.datatables.min.css')}}" rel="stylesheet">
</head>


<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">

    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>


    <div id="toaster"></div>


    <div class="wrapper">
        <!-- Github Link -->
        <a href="https://github.com/tafcoder/sleek-dashboard" target="_blank" class="github-link">
            <svg width="70" height="70" viewBox="0 0 250 250" aria-hidden="true">
                <defs>
                    <linearGradient id="grad1" x1="0%" y1="75%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#896def;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#482271;stop-opacity:1" />
                    </linearGradient>
                </defs>
                <path d="M 0,0 L115,115 L115,115 L142,142 L250,250 L250,0 Z" fill="url(#grad1)"></path>
            </svg>
            <i class="mdi mdi-github-circle"></i>
        </a>
        @include('pages.admin.layouts.sidebar');
        <div class="page-wrapper">
            @include('pages.admin.layouts.navbar');
            @yield('content');

            @include('pages.admin.layouts.footer');
        </div>
    </div>

    <script src="{{asset('admin_asset/assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugins/slimscrollbar/jquery.slimscroll.min.js')}}"></script>
    
    <script src="{{asset('admin_asset/assets/plugins/charts/Chart.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
    
    <script src="{{asset('admin_asset/assets/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugins/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/js/sleek.bundle.js')}}"></script>

    <script src="{{asset('admin_asset/assets/plugins/charts/Chart.min.js')}}"></script>


    <!-- Data Table -->
    <script src="{{asset('admin_asset/assets/plugins/data-tables/jquery.datatables.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugins/data-tables/datatables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugins/data-tables/datatables.responsive.min.js')}}"></script>
    
    <script src="{{asset('admin_asset/assets/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/js/sleek.bundle.js')}}"></script>
</body>

</html>
<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>shotgear</title>
    <link rel="icon" href="{{url('img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{url('css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{url('css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{url('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('css/swiper.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{url('css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{url('css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>

<body>
  @include('layouts.header');
    <!--::banner part start::-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-5">
                    <div class="banner_text text-center">
                        <div class="banner_text_iner">
                            <h5>Model Photography</h5>
                            <h1>Creative <span>Studio</span></h1>
                            <p>Capturing moments from today</p>
                            <a href="#" class="btn_1">view work</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::banner part start::-->
    @yield('content');

    @include('layouts.footer');

    <!-- jquery plugins here-->
    <script src="{{url('js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{url('js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{url('js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{url('js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{url('js/jquery.filterizr.min.js')}}"></script>
    <!-- particles js -->
    <script src="{{url('js/owl.carousel.min.js')}}"></script>
    <script src="{{url('js/jquery.nice-select.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{url('js/slick.min.js')}}"></script>
    <script src="{{url('js/swiper.min.js')}}"></script>
    <script src="{{url('js/jquery.counterup.min.js')}}"></script>
    <script src="{{url('js/waypoints.min.js')}}"></script>
    <script src="{{url('js/contact.js')}}"></script>
    <script src="{{url('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{url('js/jquery.form.js')}}"></script>
    <script src="{{url('js/jquery.validate.min.js')}}"></script>
    <script src="{{url('js/mail-script.js')}}"></script>
    <!-- custom js -->
    <script src="{{url('js/custom.js')}}"></script>
</body>

</html>
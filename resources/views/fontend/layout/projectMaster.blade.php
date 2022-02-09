<!DOCTYPE html>
<html lang="zxx"> 
    
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title> @yield('title')</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('image/fontend/img/fav.png')}}">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/fontend/css/bootstrap.min.css')}}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/fontend/fonts/font-awesome.min.css')}}">
        <!-- flaticon css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/fontend/fonts/flaticon.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/fontend/css/animate.css')}}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/fontend/css/owl.carousel.css')}}">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="{{ asset('css/fontend/css/rsmenu-main.css')}}">
        <!-- nivo slider CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('coustom-slider/inc/custom-slider/css/nivo-slider.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('coustom-slider/inc/custom-slider/css/preview.css')}}">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/fontend/css/rs-spacing.css')}}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/fontend/css/style.css')}}">
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/fontend/css/responsive.css')}}">
        
    </head>
    <body class="defult-home">

<body>
            
    <div class="offwrap"></div>
     
    <!-- Main content Start -->
    <div class="main-content">

    @include('components.headerProject')
    <!--==================== HEADER ====================-->
    @yield('content')

</div> 
<!-- Main content End -->
    <!--==================== FOOTER ====================-->
    @include('components.footer')

    <!--=============== SCROLL UP ===============-->

        <!-- start scrollUp  -->
        <div id="scrollUp" class="orange-color">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- modernizr js -->
        <script src="{{ asset('js/fontend/js/modernizr-2.8.3.min.js')}}"></script>
        <!-- jquery latest version -->
        <script src="{{ asset('js/fontend/js/jquery.min.js')}}"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="{{ asset('js/fontend/js/bootstrap.min.js')}}"></script>
        <!-- op nav js -->
        <script src="{{ asset('js/fontend/js/jquery.nav.js')}}"></script>
        <!-- isotope.pkgd.min js -->
        <script src="{{ asset('js/fontend/js/isotope.pkgd.min.js')}}"></script>
        <!-- owl.carousel js -->
        <script src="{{ asset('js/fontend/js/owl.carousel.min.js')}}"></script>
        <!-- wow js -->
        <script src="{{ asset('js/fontend/js/wow.min.js')}}"></script>
        <!-- Skill bar js -->
        <script src="{{ asset('js/fontend/js/skill.bars.jquery.js')}}"></script>
        <!-- imagesloaded js -->
        <script src="{{ asset('js/fontend/js/imagesloaded.pkgd.min.js')}}"></script>
         <!-- waypoints.min js -->
        <script src="{{ asset('js/fontend/js/waypoints.min.js')}}"></script>
        <!-- counterup.min js -->
        <script src="{{ asset('js/fontend/js/jquery.counterup.min.js')}}"></script> 
        <!-- magnific popup js -->
        <script src="{{ asset('js/fontend/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- Nivo slider js -->
        <script src="{{ asset('coustom-slider/inc/custom-slider/js/jquery.nivo.slider.js')}}"></script>
        <!-- contact form js -->
        <script src="{{ asset('js/fontend/js/contact.form.js')}}"></script>
        <!-- main js -->
        <script src="{{ asset('js/fontend/js/main.js')}}"></script>

    </body>

</html>
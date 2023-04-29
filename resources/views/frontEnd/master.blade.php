<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="{{asset('frontEnd-Asset')}}/assets/css/cart-style.css">

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{asset('frontEnd-Asset')}}/css/styles2.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('frontEnd-Asset')}}/assets/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('frontEnd-Asset')}}/assets/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('frontEnd-Asset')}}/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('frontEnd-Asset')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('frontEnd-Asset')}}/assets/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    @include('frontEnd.include.header')
 <!-- End header area -->

<!-- End site branding area -->

 <!-- End mainmenu area -->

    @yield('content')

    @extends('frontEnd.include.footer')
    <!-- End footer top area -->

 <!-- End footer bottom area -->

<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="{{asset('frontEnd-Asset')}}/assets/js/owl.carousel.min.js"></script>
<script src="{{asset('frontEnd-Asset')}}/assets/js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="{{asset('frontEnd-Asset')}}/assets/js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="{{asset('frontEnd-Asset')}}/assets/js/main.js"></script>

<!-- Slider -->
<script type="text/javascript" src="{{asset('frontEnd-Asset')}}/assets/js/bxslider.min.js"></script>
<script type="text/javascript" src="{{asset('frontEnd-Asset')}}/assets/js/script.slider.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('frontEnd-Asset')}}/assets/js-modify/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{asset('frontEnd-Asset')}}/assets/js-modify/datatables-simple-demo.js"></script>




</body>
</html>

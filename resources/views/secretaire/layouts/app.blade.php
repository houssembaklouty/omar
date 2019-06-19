<!DOCTYPE html>
<html lang="en">
<head>
<title>{{ config('app.name') }}</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css') }}"> 
</head>
<body>

<div class="super_container">

    <!-- Menu -->

    <div class="menu trans_500">
        <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
            <div class="menu_close_container"><div class="menu_close"></div></div>
            <form action="#" class="menu_search_form">
                <input type="text" class="menu_search_input" placeholder="Search" required="required">
                <button class="menu_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
            <ul>
                <li class="menu_item"><a href="index.html">Home</a></li>
                <li class="menu_item"><a href="#">About us</a></li>
                <li class="menu_item"><a href="#">Services</a></li>
                <li class="menu_item"><a href="news.html">News</a></li>
                <li class="menu_item"><a href="secretaire">Contact</a></li>
            </ul>
        </div>
        <div class="menu_social">
            <ul>
                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
    
    <!-- Home -->

    <div class="home">
        <div class="background_image" style="background-image:url(images/index_hero.jpg)"></div>

        <!-- Header -->

    <style>
.header_nav {
    z-index: 0;
}
</style>
<header class="header" id="header">
            <div>
                <div class="header_top">
                    <div class="">
                        <div class="row">
                            <div class="col">
                                <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                                    <div>
                                    <img style="width:109px" src="{{asset('images/logo.png')}}">
                                    </div>
                                    <div class="logo">
                                    <a href="#"> Dr mseddi Med<span></span></a> 
                                    </div>
                                    <div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto"><!-- Services 
                                        <div class="header_top_nav">
                                            <ul class="d-flex flex-row align-items-center justify-content-start">
                                                <li><a href="#">Help Desk</a></li>
                                                <li><a href="#">Emergency Services</a></li>
                                                <li><a href="#">Appointment</a></li>
                                            </ul>
                                        </div>-->
                                                                                <div class="row" class="auth">
                                        <div class="col-sm-6">
                                        <h5><a class="nav-link"  style="font-weight: 600;" class="pull-right" href="{{route('secretaire.login') }}">Connexion</a></h5>
                                        </div>
                                                                                <div class="col-sm-6">
                                        <h5><a class="nav-link" style="font-weight: 600;" class="pull-left" href="{{ route('secretaire.register') }}">s'identifier</a><h5>
                                        </div>
                                                                                </div>
                                        
                                    </div>
                                    <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header_nav" id="header_nav_pin">
                    <div class="header_nav_inner">
                        <div class="header_nav_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
                                            <nav class="main_nav">
                                                <ul class="d-flex flex-row align-items-center justify-content-start">
                                                    <li><a href="/">Acceuil </a></li>
                                                    <li><a href="/patient">Espace Patient</a></li>
                                                    <li><a href="/medecin">Espace Medecin</a></li>
                                                    <li  class="active"><a href="/secretaire">Espace Secretaire</a></li>
                                                </ul>
                                            </nav>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </header>



<div class="home_container">
    @yield('content') 

</div>


<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('plugins/easing/easing.js') }}"></script>
<script src="{{ asset('plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
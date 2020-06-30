<!DOCTYPE html>
<html lang="en">
<head>
<title>OnanKomputer</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ asset('public/frontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontEnd/top-header/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }} ">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontEnd/top-header/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontEnd/top-header/plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontEnd/top-header/plugins/slick-1.8.0/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontEnd/top-header/styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontEnd/top-header/styles/responsive.css') }}">

</head>

<body>


<div class="super_container">
<header class="header">

<div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        <div class="top_bar_contact_item"><div class="top_bar_icon"><i class="fa fa-mobile" style="font-size:32px" alt=""></i></div>+38 068 005 3570</div>
                        <div class="top_bar_contact_item"><div class="top_bar_icon"><i class="fa fa-envelope-o" style="font-size:20px" alt=""></i></div><a href="mailto:onankomputer@gmail.com">onankomputer@gmail.com</a></div>
                        <div class="top_bar_content ml-auto">
                            <div class="top_bar_user">
                            <form class="form-inline my-6 my-lg-0">
                            <div id="FontMenu">
                            <a href="{{url('/infoFAQ')}}"><i class="fa fa-question-circle" style="font-size:22px"></i> FAQ</a>
                            <a href="{{url('/viewcompare')}}"><i class="fa fa-balance-scale" style="font-size:22px"></i> Compare</a>
                           

                            @if(Auth::check())
                            <a href="{{url('/manage-product')}}"><i class="fa fa-product-hunt" style="font-size:22px"></i>Product</a>
                            <a href="{{url('/admin_account')}}"><i class="fa fa-user"></i>Admin</a>
                            <a href="{{ url('/logout') }}"><i class="fa fa-lock"></i> Logout </a>
                                
                            @else
                                <a href="{{url('/login_page')}}"><i class="fa fa-user"style="font-size:22px"></i> Login</a>
                                <a href="{{url('/register_page')}}"><i class="fa fa-registered"style="font-size:20px"></i> Register</a>
                            @endif
                            </div>
                    
                            </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>      
        </div>
</div>

<div class="header_main">
            <div class="container">
                <div class="row">

                    <!-- Logo -->
                    <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{url('/admin_home')}}"><img src="{{asset('frontEnd/images/logo.png')}}" width="230px" alt="" /></a>
                    </div>
                    </div>

                    <!-- Search -->
                    <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                        <div class="header_search">
                            <div class="header_search_content">
                                <div class="header_search_form_container">
                                    <form action="/" method ="GET" class="header_search_form clearfix">
                                        <input type="text" name="cari" id="query" value="{{ request()->input('search') }}" required="required" 
                                        class="header_search_input" placeholder="Search product...">
                                        <button type="submit" class="header_search_button trans_300" value="Submit">
                                            <i class="fas fa-search" style="font-size:20px"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>         
</div>





</header>
</div>

<script src="{{ asset('public/frontEnd/top-header/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('public/frontEnd/top-header/styles/bootstrap4/popper.js')}}"></script>
<script src="{{ asset('public/frontEnd/top-header/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{ asset('public/frontEnd/top-header/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{ asset('public/frontEnd/top-header/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{ asset('public/frontEnd/top-header/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{ asset('public/frontEnd/top-header/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{ asset('public/frontEnd/top-header/plugins/greensock/ScrollToPlugin.min.jsplugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{ asset('public/frontEnd/top-header/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{ asset('public/frontEnd/top-header/plugins/slick-1.8.0/slick.js')}}"></script>
<script src="{{ asset('public/frontEnd/top-header/plugins/easing/easing.js')}}"></script>
<script src="{{ asset('public/frontEnd/top-header/js/custom.js')}}"></script>
</body>

</html>







    

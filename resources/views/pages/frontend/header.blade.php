<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('frontend/img/background/Innovation4.png') }}" type="image/x-icon">
    <title>Innovative Skills</title>


    <!------------ Font Awesome Link ------------>
    <script src="https://kit.fontawesome.com/0e40ebbbef.js" crossorigin="anonymous"></script>


    <!------------ Google Fonts ------------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">


    <!------------ Bootstrap Link -------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!------------- Owl Carousel CSS ---------------->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}">

    <!---------- Slick Slider ---------------->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick-theme.css') }}">

    <!------------ Custom CSS ------------>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
  </head>
  <!-- <body> -->

    <!-- ----------------------- Header Section For Desktop ----------------------->
    <section class="header">
        <div class="container">
            <div class="header_main">
                <div class="logo_search">
                    <div class="main_logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('frontend/img/background/Innovation4.png') }}" alt="Logo">
                        </a>
                    </div>
                    {{-- <div class="serach_bar search1">
                        <form action="#">
                            <input class="search" type="search" name="#" id="#" placeholder="Search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </form>
                    </div> --}}
                </div>
                <div class="manu_account">
                    <div class="main_menu">
                        <ul class="main_ul">
                            <li class="main_li"><a href="{{ url('/') }}">Home

                                </a>
                                {{-- <ul class="inner_menu">
                                    <li><a href="#">Leading</a></li>
                                    <li><a href="#">Leading</a></li>
                                    <li><a href="#">Language School</a></li>
                                    <li><a href="#">Language School</a></li>
                                </ul> --}}
                            </li>
                            <li class="main_li"><a href="{{ url('about') }}">About
                                </i>
                                </a>

                            </li>
                            <li class="main_li"><a href="#">Courses
                                <i class="fa-solid fa-chevron-down"></i>
                                </a>
                                <ul class="inner_menu">
                                    @foreach ($dt as $dt)


                                    <li><a href="{{ url('course/'.$dt->id) }}">{{ $dt->course_category }}</a></li>
                                    @endforeach
                                    {{-- <li><a href="course.html">Photoshop</a></li>
                                    <li><a href="course.html">Python</a></li> --}}
                                </ul>
                            </li>
                            <li class="main_li"><a href="{{ url('contact') }}">Contact us
                                </i>
                                </a>

                            </li>


                            <!--<li class="main_li"><a href="{{ url('blog') }}">-->
                            <!--    Blog-->

                            <!--    </a>-->
                            <!--    {{-- <ul class="inner_menu">-->
                            <!--        <li class="inner_li"><a href="blog.html">Blog 1</a></li>-->
                            <!--        <li class="inner_li"><a href="blog.html">Blog 2</a></li>-->
                            <!--        <li class="inner_li"><a href="blog.html">Blog 3</a></li>-->
                            <!--    </ul> --}}-->
                            <!--</li>-->
                        </ul>
                    </div>

                    <!-- User btn For Desktop -->
                    {{-- <div class="user user_desktop">
                        <a href="auth.html" class="btn_red">
                            <div class="user_icon">
                                <i class="fa-regular fa-user"></i>
                            </div>
                            <div class="user_details">
                                Login/Register
                            </div>
                        </a>
                    </div> --}}
                    <!-- User btn for mobile -->
                    <div class=" user_mobile">
                        <a href="auth.html" class="btn_red user_btn_mobile">
                            <div class="user_icon">
                                <i class="fa-regular fa-user"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------------ Mobile Menu Section --------------------->
    <section class="modile_menu_section">
        <div class="container">
            <div class="mobile_menu_main">
                <div class="mobile_logo">
                    <a href="{{url('/')}}"><img src="{{ asset('frontend/img/background/Innovation4.png') }}" alt="Logo"></a>
                </div>
                <div class="mobile_icons">
                    <div class="shoping_bag mobile_bag">
                        <a href="#"><i class="fa-regular fa-cart-shopping"></i>
                        </a>
                        <p>0</p>
                    </div>
                    <div class=" ">
                        <a href="auth.html" class="btn_red user_btn_mobile">
                            <div class="user_icon">
                                <i class="fa-regular fa-user"></i>
                            </div>
                        </a>
                    </div>
                    <div class="bar_icon">
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                            <i class="fa-solid fa-bars"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mobile_menu_search" id="myLinks">
                <div class="mobile_search">
                    <div class="serach_bar search1">
                        <form action="#">
                            <input class="search" type="search" name="#" id="#" placeholder="Search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </form>
                    </div>
                </div>
                <div class="mobile_menu">
                    <div class="mobile_menu_inner">
                        <div class="mobile_menu_title">
                            <h4><a href="{{ url('/') }}">Home</a></h4>
                        </div>

                    </div>
                    <div class="mobile_menu_inner">
                        <div class="mobile_menu_title">
                            <h4><a href="{{ url('/about') }}">About</a></h4>
                        </div>

                    </div>

                    <div class="mobile_menu_inner">
                        <div class="mobile_menu_title">
                            <h4><a href="#">Courses</a></h4>
                        </div>
                        <div class="mobile_menu_body">
                            @foreach ($dt1 as $dt1)




                            <h5><a href="{{ url('course/'.$dt1->id) }}">{{ $dt1->course_category }}</a></h5>

                            @endforeach
                        </div>
                    </div>
                    <!--<div class="mobile_menu_inner">-->
                    <!--    <div class="mobile_menu_title">-->
                    <!--        <h4><a href="{{ url('blog') }}">Blog</a></h4>-->
                    <!--    </div>-->

                    <!--</div>-->
                    <div class="mobile_menu_inner">
                        <div class="mobile_menu_title">
                            <h4><a href="{{ url('contact') }}">Contact us</a></h4>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
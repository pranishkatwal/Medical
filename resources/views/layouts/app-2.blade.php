<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title')
    </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href={{asset("css/style.css")}} />
    {{--Index-css Styles--}}
    <link rel="stylesheet" type="text/css" href={{asset("css/index-css/header-top.css")}} />
    <link rel="stylesheet" type="text/css" href={{asset("css/index-css/teacher-desk.css")}} />
    {{--<link rel="stylesheet" type="text/css" href={{asset("css/index-css/message-desk.css")}} />
    <link rel="stylesheet" type="text/css" href={{asset("css/index-css/awards-desk.css")}} />
    <link rel="stylesheet" type="text/css" href={{asset("css/index-css/testonomial-desk.css")}} />
    <link rel="stylesheet" type="text/css" href={{asset("css/index-css/event-desk.css")}} />
    <link rel="stylesheet" type="text/css" href={{asset("css/index-css/teacher-desk.css")}} />
    <link rel="stylesheet" type="text/css" href={{asset("css/index-css/footer-desk.css")}} />--}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

    <!---Swiper-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <script src="https://unpkg.com/swiper/js/swiper.js"></script>

    <style>
        nav {
            background: teal;
            margin-top: 39px;
        }

        .header-top {
            padding-bottom: 40px;
            transition: .3s;
        }

        #navbar {
            transition: 0s;
        }

        .sticky {
            position: fixed;
            margin-top: 0;
            width: 100%;
        }
    </style>
    @yield('style')
</head>
<body>
<div class="container-fluid">
    <section class="header">
        <div class="container">
            <div class="header-top d-flex align-items-center">
                <div class="p-2">
                    <i class="fas fa-envelope"></i> <span>Email</span> <a href="#"> buddhajyoti@gmail.com</a>
                </div>
                <div class="p-2">
                    <i class="fas fa-map-marker-alt"></i> Blvd Libertad, 34 m05200 Arévalo
                </div>
                <div class="p-2 ml-auto"><span>Connect with us:</span> <a href="#"><i
                            class="fab fa-facebook-square"></i> </a> <a href="#"><i
                            class="fab fa-twitter-square"></i> </a> <a href="#"><i
                            class="fab fa-instagram-square"></i></a>
                </div>
            </div>
        </div>
        <div class="header">
            <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="{{asset("images/logo.png")}}" alt=""> Buddha Jyoti
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        {{--<span class="navbar-toggler-icon"></span>--}}
                        <i class="fas fa-sliders-h"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">About Us</a>
                                <ul class="sub-menu animate">
                                    <li><a href="/aboutus">About Us</a></li>
                                    <li><a href="/aboutus/history">History</a></li>
                                    <li><a href="/aboutus/ourteam">Our Team</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Courses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('teacher.index')}}">Teachers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Facilities</a>
                                <ul class="sub-menu animate">
                                    <li><a href="/facilities/library">Library</a></li>
                                    <li><a href="/facilities/extraclasses">Extra Classes</a></li>
                                    <li><a href="/facilities/extracurriculum">Extra Curriculum</a></li>
                                    <li><a href="/facilities/hostel">Hostels</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">News</a>
                                <ul class="sub-menu animate">
                                    <li><a href="/news/event">Events</a></li>
                                    <li><a href="/news/blog">Blogs</a></li>
                                    <li><a href="/news/notice">Notices</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height: 300px">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset("images/milestones_background.jpg")}}"
                             class="img-fluid-carousel d-block w-100 h-50 fadeInLeft" style="animate-delay: 1s;" alt="">
                        <div class="carousel-caption2 d-none d-sm-block d-md-block">
                            <h5 class="animated fadeInDown" style="animation-delay: 1s">Teacher Details</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset("images/milestones_background.jpg")}}"
                             class="img-fluid-carousel d-block w-100 h-50 fadeInLeft" style="animate-delay: 2s" alt="">
                        <div class="carousel-caption2 d-none d-sm-block d-md-block">
                            <h5 class="animated fadeInUp" style="animation-delay: 1s">Teacher Details</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset("images/milestones_background.jpg")}}"
                             class="img-fluid-carousel d-block w-100 h-50 fadeInLeft" style="animate-delay: 2s" alt="">
                        <div class="carousel-caption2 d-none d-sm-block d-md-block">
                            <h5 class="animated bounceIn" style="animation-delay: 1s">Teacher Details</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @yield('content')
</div>

</body>
<script>
    window.onscroll = function () {
        myFunction()
    };

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>
@yield('scripts')
</html>

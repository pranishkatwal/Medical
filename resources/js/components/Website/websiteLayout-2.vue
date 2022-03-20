<template>
    <header class="header-area overlay">
        <!--Top Nav-->
        <nav class="navbar navbar-expand-md navbar-dark" id="nav1">
            <div class="collapse navbar-collapse" id="navbarSupporedContent">
                <ul class="navbar-nav mr-auto mt-1">
                    <li class="mr-4">
                        <a class="" href="#"><i class="fas fa-envelope">&nbsp; buddhajyoti@gmail.com</i></a>
                    </li>
                    <li class="mr-4">
                        <a class="" href="#"><i class="fas fa-phone">&nbsp; +977-1234567890</i></a>
                    </li>
                </ul>
                <ul class="my-2 my-lg-0 mt-1">
                    <ul class="social-nav">
                        <li class="mr-2">
                            <a class="" href="#"><i class="fab fa-facebook-square"></i></a>
                        </li>
                        <li class="mr-2">
                            <a class="" href="#"><i class="fab fa-instagram-square"></i></a>
                        </li>
                        <li class="">
                            <a class="" href="#"><i class="fab fa-twitter-square"></i></a>
                        </li>
                    </ul>
                </ul>
            </div>
        </nav>
        <!--Top Nav Ends-->

        <!--Main Navbar-->
        <nav class="navbar navbar-expand-md navbar-dark bg-transparent" id="nav2">
            <div class="container">
                <a class="navbar-brand" href="#" title="Buddha Jyoti">
                    <img src="images/logo.png" alt="Budha Jyoti School Logo"> Buddha Jyoti
                </a>
                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                About
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/about">About Us</a>
                                <a class="dropdown-item" href="/history">History</a>
                                <!--<div class="dropdown-divider"></div>-->
                                <a class="dropdown-item" href="/ourteam">Our Team</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Facilities
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                <a class="dropdown-item" href="#">Computer</a>
                                <a class="dropdown-item" href="#">Libraries</a>
                                <a class="dropdown-item" href="#">Montessery Classes</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/teachers">Teachers</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Information
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                <a class="dropdown-item" href="/notices">News and Notices</a>
                                <a class="dropdown-item" href="/upcomingevents">Upcoming Events</a>
                                <!--<div class="dropdown-divider"></div>-->
                                <a class="dropdown-item" href="/blogs">Blogs</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Main Nav Ends-->

        <!--Banner Area | Carousel -->
        <section class="banner-area">
            <div id="carouselExampleControls" class="carousel" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100"
                             src="images/BuddhaJyotiImages/School1.jpg"
                             alt="First slide of Buddha Jyoti Boarding School">
                        <div class="carousel-caption centered">
                            <h1 class="ex-large-900 animated fadeInUp delay-1s">Buddha<span> Jyoti</span></h1>
                            <p class="animated zoomIn delay-2s">You learn something everyday.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                             src="images/BuddhaJyotiImages/School1.jpg"
                             alt="Second slide of Buddha Jyoti Boarding School">
                        <div class="carousel-caption centered">
                            <h1 class="ex-large-900 animated zoomIn delay-1s"><span>Innovative </span>Teachers</h1>
                            <p class="animated fadeIn delay-2s">
                                Intelligence plus character that is the goal of true education.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                             src="images/BuddhaJyotiImages/School1.jpg"
                             alt="Third slide of Buddha Jyoti Boarding School">
                        <div class="carousel-caption centered">
                            <h1 class="ex-large-900 animated flipInX delay-1s">Hard <span class="">Working</span></h1>
                            <p class="animated fadeIn delay-2s">I’m not telling you it’s going to be easy, <br/>
                                I’m telling you it’s going to be worth it.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </section>

        <!--banner Area Ends-->
    </header>
</template>

<script>
    export default {
        name: "websiteLayout-2",
        mounted() {
                $('.carousel').carousel({
                    interval: 10000
                });

                $(window).on('scroll', function() {
                    if ($(this).scrollTop() >= 400) {
                        $('#nav2').addClass('fixed-top');
                        $('#nav2').removeClass('bg-transparent');
                        $('#nav2').css('padding-top', 0);
                    } else if ($(this).scrollTop() <= 400) {
                        $('#nav2').removeClass('fixed-top');
                        $('#nav2').addClass('bg-transparent');
                        $('#nav2').css('padding-top', '40px');
                    }
                });

                function adjustNav() {
                    var winWidth = $(window).width(),
                        dropdown = $('.dropdown'),
                        dropdownMenu = $('.dropdown-menu');

                    if (winWidth >= 768) {
                        dropdown.on('mouseenter', function() {
                            $(this).addClass('show')
                                .children(dropdownMenu).addClass('show');
                        });

                        dropdown.on('mouseleave', function() {
                            $(this).removeClass('show')
                                .children(dropdownMenu).removeClass('show');
                        });
                    } else {
                        dropdown.off('mouseenter mouseleave');
                    }
                }
                $(window).on('resize', adjustNav);

                adjustNav();
        }
    }
</script>

<style scoped>

    /********/
    .fixed-top .nav-link, .fixed-top .navbar-brand {
        color: #000000 !important;
    }

    #nav1 ul li a{
        color: #222222;
    }

    .navbar-dark .navbar-nav a.nav-link{
        text-decoration: none;
    }
    .nav-item.dropdown .dropdown-menu a{
        text-decoration: none;
    }
    .fixed-top.navbar .navbar-toggler .menu-icon-bar {
        position: absolute;
        left: 15px;
        right: 15px;
        height: 2px;
        background-color: #000;
        opacity: 0;
        -webkit-transform: translateY(-1px);
        -ms-transform: translateY(-1px);
        transform: translateY(-1px);
        transition: all 0.3s ease-in;
    }

    /********/

    h1 {
        margin-bottom: 0.2em;
        font-size: 3.6rem;
    }
    p {
        margin-bottom: 0.5em;
        font-size: 1.2rem;
        line-height: 1.2;
    }
    .overlay::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        top: 0;
        background-color: rgba(25, 0, 0, .5);
    }
    .header-area {
        position: relative;
        height: 100vh;
        /*background: #5bc0de;*/
        background-attachment: fixed;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /*Nav 1*/
    #nav1{
        padding: 5px 100px;
        background: #ffffff;
        border-top: 1px solid rgba(60,64,67,.15);
        /*border-bottom: 0.7px solid rgba(0, 0, 0, 0.8);*/
        -webkit-box-shadow: 0 1px 2px 0 rgba(60,64,67,.3), 0 2px 6px 2px rgba(60,64,67,.15);
        box-shadow: 0 1px 2px 0 rgba(60,64,67,.3), 0 2px 6px 2px rgba(60,64,67,.15);
    }
    #nav1 ul li{
        color: #0f1e26;
        display: inline;
    }

    /*Nav 2*/
    #nav2{
        padding-top: 40px;
    }

    .navbar {
        position: absolute;
        left: 0;
        top: 0;
        padding: 0;
        width: 100%;
        transition: background 0.5s ease-in-out;
        z-index: 99999;
    }
    /*Navbar Togggler | Navbar Icon Bar | Changing on Click*/
    .navbar .navbar-toggler {
        position: relative;
        height: 50px;
        width: 50px;
        border: none;
        cursor: pointer;
        outline: none;
    }
    .navbar .navbar-toggler .menu-icon-bar {
        position: absolute;
        left: 15px;
        right: 15px;
        height: 2px;
        background-color: #fff;
        opacity: 0;
        -webkit-transform: translateY(-1px);
        -ms-transform: translateY(-1px);
        transform: translateY(-1px);
        transition: all 0.3s ease-in;
    }
    .navbar .navbar-toggler .menu-icon-bar:first-child {
        opacity: 1;
        -webkit-transform: translateY(-1px) rotate(45deg);
        -ms-sform: translateY(-1px) rotate(45deg);
        transform: translateY(-1px) rotate(45deg);
    }
    .navbar .navbar-toggler .menu-icon-bar:last-child {
        opacity: 1;
        -webkit-transform: translateY(-1px) rotate(135deg);
        -ms-sform: translateY(-1px) rotate(135deg);
        transform: translateY(-1px) rotate(135deg);
    }
    .navbar .navbar-toggler.collapsed .menu-icon-bar {
        opacity: 1;
    }
    .navbar .navbar-toggler.collapsed .menu-icon-bar:first-child {
        -webkit-transform: translateY(-7px) rotate(0);
        -ms-sform: translateY(-7px) rotate(0);
        transform: translateY(-7px) rotate(0);
    }
    .navbar .navbar-toggler.collapsed .menu-icon-bar:last-child {
        -webkit-transform: translateY(5px) rotate(0);
        -ms-sform: translateY(5px) rotate(0);
        transform: translateY(5px) rotate(0);
    }

    .navbar .navbar-brand {
        font-family: 'Lobster', cursive;
        font-size: 26px;
    }
    .navbar-dark .navbar-nav .nav-link {
        position: relative;
        color: #fff;
        font-size: 16px;
        font-family: 'Lato', sans-serif;
    }
    .navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover {
        color: #fff;
    }
    /*Navbar Dropdown Styles*/
    .navbar .dropdown-menu {
        padding: 0;
        background-color: rgba(0, 0, 0, .8);
    }
    .navbar .dropdown-menu .dropdown-item {
        position: relative;
        padding: 8px 20px;
        color: #fff;
        font-size: 15px;
        font-family: 'Lato', sans-serif;
        border-bottom: 1px solid rgba(255, 255, 255, .1);
        transition: color 0.2s ease-in;
    }
    .navbar .dropdown-menu .dropdown-item:last-child {
        border-bottom: none;
    }
    .navbar .dropdown-menu .dropdown-item:hover {
        background: transparent;
        color: #c0ca33;
    }
    .navbar .dropdown-menu .dropdown-item::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        top: 0;
        width: 5px;
        background-color: #c0ca33;
        opacity: 0;
        transition: opacity 0.2s ease-in;
    }
    .navbar .dropdown-menu .dropdown-item:hover::before {
        opacity: 1;
    }


    /*Fixed Navbar*/
    .navbar.fixed-top {
        position: fixed;
        -webkit-animation: navbar-animation 0.5s;
        animation: navbar-animation 0.5s;
        background-color: #ffffff;
        -webkit-box-shadow: 0 1px 2px 0 rgba(60,64,67,.3), 0 2px 6px 2px rgba(60,64,67,.15);
        box-shadow: 0 1px 2px 0 rgba(60,64,67,.3), 0 2px 6px 2px rgba(60,64,67,.15);
    }
    .navbar.fixed-top.navbar-dark .navbar-nav .nav-link.active {
        color: #c0ca33;
    }
    .navbar.fixed-top.navbar-dark .navbar-nav .nav-link::after {
        background-color: #c0ca33;
    }

    @media screen and (max-width: 767px) {
        #nav1{
            display: none;
        }
        #nav2{
            padding-top: 10px !important;
        }
        .navbar-brand {
            margin-left: 20px;
        }
        .navbar-nav {
            padding: 0 20px;
            background-color: rgba(0, 0, 0, .9);
        }
        .navbar.fixed-top .navbar-nav {
            background: transparent;
        }
    }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
        .navbar .navbar-brand {
            font-family: 'Lobster', cursive;
            font-size: 0;
        }
        .navbar-dark .navbar-nav .nav-link {
            position: relative;
            color: #fff;
            font-size: 16px;
        }
    }

    @media screen and (min-width: 768px) {
        .navbar-dark .navbar-nav .nav-link:last-child {
            padding-right: 0px !important;
        }
        .navbar-dark.fixed-top .navbar-nav .nav-link:last-child {
            padding-right: 0px !important;
        }
        .navbar-dark .navbar-nav .nav-link {
            padding: 25px 15px;
        }
        .navbar-dark.fixed-top .navbar-nav .nav-link {
            padding: 20px 15px;
        }
        .navbar-dark .navbar-nav .nav-link::after{
            content: "";
            display: block;
            left: 50%;
            right: 50%;
            border-bottom: 3px solid;
            margin: 8px auto -20px;
            transition: transform 0.3s ease-in;
            -webkit-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform: scaleX(0);
        }
        .navbar-dark .navbar-nav .nav-link:hover::after {
            -webkit-transform: scaleX(1);
            -ms-transform: scaleX(1);
            transform: scaleX(1);
        }
        /*.navbar-dark .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            bottom: 10px;
            left: 30%;
            right: 30%;
            height: 0.5px;
            background-color: #fff;
            -webkit-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform: scaleX(0);
            transition: transform 0.1s ease-in;
        }*/
        /*.navbar-dark .navbar-nav .nav-link:hover::after {
            -webkit-transform: scaleX(2);
            -ms-transform: scaleX(2);
            transform: scaleX(2);
        }*/
        .dropdown-menu {
            min-width: 200px;
            -webkit-animation: dropdown-animation 0.3s;
            animation: dropdown-animation 0.3s;
            -webkit-transform-origin: top;
            -ms-transform-origin: top;
            transform-origin: top;
        }
    }


    /*Carousel Area*/
    .banner-area {
        height: 100vh;
        width: 100%;
        top: 0;
        left: 0;
    }
    .banner-area h1 {
        font-weight: 800;
    }
    .banner-area p {
        font-weight: 500;
    }
    .carousel-item img {
        width: 100vw;
        height: 100vh;
        -webkit-background-size: cover;
        background-size: cover;
    }
    .carousel-caption.centered {
        z-index: 1;
        width: 340px;
        position: absolute;
        text-align: center !important;
        top: 60%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    @media screen and (min-width: 768px) {
        .carousel-caption.centered {
            width: 700px;
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    }
    .carousel-control-prev, .carousel-control-next {
        background: #2b324e none repeat scroll 0 0;
        color: #fff;
        font-size: 34px;
        height: 42px;
        position: absolute;
        text-align: center;
        top: calc(50% - 20px);
        width: 40px;
        z-index: 2;
        line-height: 38px;
    }

    /*Navbar Animations*/
    @-webkit-keyframes navbar-animation {
        0% {
            opacity: 0;
            -webkit-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            transform: translateY(-100%);
        }
        100% {
            opacity: 1;
            -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0);
        }
    }
    @keyframes navbar-animation {
        0% {
            opacity: 0;
            -webkit-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            transform: translateY(-100%);
        }
        100% {
            opacity: 1;
            -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0);
        }
    }


    /*Dropdown Animations*/
    @-webkit-keyframes dropdown-animation {
        0% {
            -webkit-transform: scaleY(0);
            -ms-transform: scaleY(0);
            transform: scaleY(0);
        }
        75% {
            -webkit-transform: scaleY(1.1);
            -ms-transform: scaleY(1.1);
            transform: scaleY(1.1);
        }
        100% {
            -webkit-transform: scaleY(1);
            -ms-transform: scaleY(1);
            transform: scaleY(1);
        }
    }
    @keyframes dropdown-animation {
        0% {
            -webkit-transform: scaleY(0);
            -ms-transform: scaleY(0);
            transform: scaleY(0);
        }
        75% {
            -webkit-transform: scaleY(1.1);
            -ms-transform: scaleY(1.1);
            transform: scaleY(1.1);
        }
        100% {
            -webkit-transform: scaleY(1);
            -ms-transform: scaleY(1);
            transform: scaleY(1);
        }
    }

    /*Carousel Animations*/
    @-webkit-keyframes zoom-out {
        from {
            -webkit-transform: scale(1.2, 1.2);
        }
        to {
            -webkit-transform: scale(1, 1);
        }
    }

    @-webkit-keyframes zoom-in {
        from {
            -webkit-transform: scale(1, 1);
        }
        to {
            -webkit-transform: scale(1.2, 1.2);
        }
    }

    @keyframes zoom-out {
        from {
            transform: scale(1.2, 1.2);
        }
        to {
            transform: scale(1, 1);
        }
    }

    @keyframes zoom-in {
        from {
            transform: scale(1, 1);
        }
        to {
            transform: scale(1.2, 1.2);
        }
    }

    /*.carousel-inner .carousel-item > img {
        -webkit-animation: zoom-out 10s !important;
        animation: zoom-out 10s !important;
    }*/
    .carousel-inner .carousel-item:nth-child(odd) > img {
        -webkit-animation: zoom-out 10s !important;
        animation: zoom-out 10s !important;
    }

    .carousel-inner .carousel-item:nth-child(even) > img {
        -webkit-animation: zoom-in 10s !important;
        animation: zoom-in 10s !important;
    }
    /*Carousel Animations Ends*/

</style>



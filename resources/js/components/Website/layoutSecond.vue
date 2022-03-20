<template>
    <div class="">
        <section class="layout">
            <div class="header">
                <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" id="navbar">
                    <div class="container">
                        <a class="navbar-brand" href="#" title="Buddha Jyoti">
                            <img src="images/logo.png" alt="Budha Jyoti School Logo"> Buddha Jyoti
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                                        <div class="dropdown-divider"></div>
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
                                        <div class="dropdown-divider"></div>
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
            </div>
            <div class="jumbotron jumbotron-fluid carousel"
                 style="background-image: url('./images/BuddhaJyotiImages/School1.jpg')">
                <div class="container">
                    <div class="carousel-caption">
                        <h1></h1>
                        <h2 class="ex-large-900 display-4 animated flipInX delay-1s">Hard <span>Working</span></h2>
                    </div>
                </div>
            </div>
            <!--<div id="carouselImages" class="carousel slide" data-ride="carousel">
                &lt;!&ndash;<ol class="carousel-indicators">
                    <li data-target="#carouselImages" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselImages" data-slide-to="1"></li>
                    <li data-target="#carouselImages" data-slide-to="2"></li>
                </ol>&ndash;&gt;
                <div class="carousel-inner">
                    &lt;!&ndash;For Box Shadow&ndash;&gt;
                    &lt;!&ndash;<div class="carousel-caption vignette-shadow-ex">
                    </div>&ndash;&gt;
                    &lt;!&ndash;Carousel Images&ndash;&gt;
                    <div class="carousel-item active">
                        <img src="images/BuddhaJyotiImages/School1.jpg"
                             class="img-fluid-carousel d-block w-100" alt="Budha Jyoti School">
                        <div class="carousel-caption centered">
                            <h2 class="ex-large-900 animated fadeIn delay-1s">Buddha<span> Jyoti</span></h2>
                            <p class="d-none d-sm-block animated fadeIn delay-2s" style="animation-duration: 3s;">You
                                Learn Something Everyday</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/BuddhaJyotiImages/School1.jpg"
                             class="img-fluid-carousel d-block w-100" alt="Budha Jyoti School">
                        <div class="carousel-caption centered">
                            <h2 class="ex-large-900 animated flipInY delay-1s"><span>Innovative </span>Teachers</h2>
                            <p class="d-none d-sm-block animated fadeIn delay-2s" style="animation-duration: 3s;">
                                Intelligence plus character that is the goal of true
                                education</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/BuddhaJyotiImages/School1.jpg"
                             class="img-fluid-carousel d-block w-100" alt="Budha Jyoti School">
                        <div class="carousel-caption centered">
                            <h2 class="ex-large-900 animated flipInX delay-1s">Hard <span>Working</span></h2>
                            <p class="d-none d-sm-block animated fadeIn delay-2s" style="animation-duration: 3s;">I’m
                                not telling you it’s going to be easy <br/>
                                I’m telling you it’s going to be worth it</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselImages" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselImages" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>-->
        </section>

    </div>
</template>

<script>
    import $ from "jquery";

    export default {
        name: "layoutSecond",
        mounted() {
            $(document).scroll(function () {
                $('.navbar').toggleClass('scrolled', $(this).scrollTop() > 100);
            });
        }
    }
</script>

<style scoped>

    .carousel-control-prev, .carousel-control-next {
        background: #09143c none repeat scroll 0 0;
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

    /*-------*/
    .header {
        position: relative;
        z-index: 100000;
    }

    @media screen and (max-width: 767px) {
        .navbar ul.navbar-nav li {
            margin-left: 20px;
        }
    }

    @media screen and (min-width: 768px) {
        .navbar {
            background: #09143c !important;
            height: 70px;
            transition: 0.7s;
            border-bottom: 1px solid rgba(255, 255, 255, 0.8);
        }

        .navbar.scrolled {
            height: 50px;
            transiction: 0.7s;
        }
    }

    /*Navbar*/
    .navbar {
        background: #193254 !important;
    }

    .navbar-brand {
        font-family: 'Bebas Neue', cursive;
        font-size: 25px;
        line-height: 25px;
        letter-spacing: 2px;
    }

    .navbar-dark .navbar-nav .active > .nav-link, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .nav-link.active {
        background-color: rgba(255, 255, 255, 1);
        border-radius: 5px;
        color: #000;
    }

    .navbar-dark .navbar-nav .nav-link {
        color: rgba(255, 255, 255, .9);
        padding-right: 10px;
        padding-left: 10px;
    }

    .navbar-dark .navbar-nav .nav-link:hover,
    .navbar-dark .navbar-nav .nav-link:focus {
        background-color: #003366;
        border-radius: 5px;
        color: #fff;
        /*color: rgba(255, 255, 255, 1) !important;*/
        text-decoration: none;
    }

    .navbar-dark .navbar-nav .nav-item.active .nav-link:hover,
    .navbar-dark .navbar-nav .nav-item.active .nav-link:focus {
        color: rgba(0, 0, 0, .8) !important;
        background-color: rgba(255, 255, 255, 1) !important;
        text-decoration: none;
    }

    /*!*Carousel---*!*/
    .carousel {
        position: relative;
        top: 0;
        width: 100%;
        background: rgba(0, 0, 0, .7);
        overflow: hidden;
    }

    .img-fluid-carousel {
        height: 70vh;
        width: 100%;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        background-size: cover;
    }

    @media screen and (min-width: 663px) {
        .carousel {
            position: relative;
            top: 0;
            width: 100%;
            height: 70vh;
            background: rgba(0, 0, 0, .7);
            overflow: hidden;
        }
    }

    /*    @media screen and (min-width: 769px){
            .carousel {
                position: relative;
                top: 0;
                width: 100%;
                height: 100vh;
                background: rgba(0, 0, 0, .7);
                overflow: hidden;
                !*box-shadow: inset 0 15px 100px green !important;*!
            }
        }*/
    /*!************!*/

    /*!*Dropdown On Hover*!*/
    .dropdown:hover .dropdown-menu, .btn-group:hover .dropdown-menu {
        display: block;
    }

    .dropdown-menu {
        margin-top: 0;
        background-color: rgba(9, 20, 60, 0.6) !important;
    }

    .dropdown-menu a, .dropdown-menu router-link {
        color: #ffffff !important;
    }

    .dropdown-menu a:hover, .dropdown-menu router-link:hover {
        text-decoration: none !important;
        background-color: rgba(0, 0, 0, 0.1) !important;
    }

    .dropdown-toggle {
        margin-bottom: 2px;
    }

    .navbar .dropdown-toggle, .nav-tabs .dropdown-toggle {
        margin-bottom: 0;
    }

    /*!* Centered text *!*/
    @media screen and (min-width: 991px) {
        .carousel-caption {
            width: 700px;
        }

        .carousel-caption.centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    }

    @media screen and (min-width: 577px) and (max-width: 991px) {
        .carousel-caption {
            width: 500px;
        }

        .carousel-caption.centered {
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    }

    @media screen and (max-width: 576px) {
        .carousel-caption {
            width: 300px;
        }

        .carousel-caption.centered {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .carousel-caption h2 {
            font-size: 28px !important;
            line-height: 32px !important;
            text-align: center;
            color: white;
            font-family: 'Montserrat', sans-serif;
        }

        .carousel-caption h2 span {
            color: #ff9800;
        }

        /*.carousel-caption p {
            text-align: center;
            font-size: 15px;
            font-weight: 500;
            color: #ff9a00;
        }*/
    }

    .carousel-caption h2 {
        text-align: center;
        color: white;
        font-family: 'Montserrat', sans-serif;
    }

    .carousel-caption p {
        font-size: 20px;
        line-height: 25px;
        width: 400px !important;
        margin: auto;
        padding: 20px 0;
        background-color: rgba(9, 20, 60, 0.5);
    }

    .carousel-caption h2 span {
        color: #ff9800;
    }

    /*.carousel-caption p {
        text-align: center;
        font-size: 20px;
        font-weight: 600;
        color: #ff9a00;
    }*/


    /*.vignette-shadow-ex {
        background-color: transparent !important;
        margin-bottom: -5vh !important;
        margin-left: -15vw !important;
        height: 100vh;
        width: 100vw;
        box-shadow: inset 0 20px 100px black !important;
    }*/


</style>

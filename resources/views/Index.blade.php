@extends('layouts.websiteLayout')

@section('title')
    Medical
@endsection

@section('style')
    <style>
        /*Swiper*/
        .swiper-container {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
            margin: 20px 30px 0 30px;

        }

        .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background-color: #fff;
        }

        .swiper-pagination-bullet-active {
            width: 15px;
            height: 15px;
            background-color: #fff;
        }

        /* Swiper Ends*/

    </style>
@endsection

@section('content')
    <!--Container Starts-->
    <div class="container-fluid">
        <!--Header-->
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
                <nav class="navbar navbar-expand-lg bg-gradient-dark fixed-top">
                    <div class="container">
                        <a class="navbar-brand" href="#">
                            <img src="images/logo.png" alt=""> Buddha Jyoti
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">About Us</a>
                                    <ul class="sub-menu animate">
                                        <li><a href="/aboutus">About Us</a></li>
                                        <li><a href="/aboutus/history">History</a></li>
                                        <li><a href="/aboutus/ourteam">Our Team</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">Courses</a>
                                    <ul class="sub-menu animate">
                                        <li><a href="#">Extra Courses</a></li>
                                        <li><a href="#">Regular Courses</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Teachers</a>
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
                                        <li><a href="/news/event">Event and Notices</a></li>
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
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/milestones_background.jpg"
                                 class="img-fluid-carousel d-block w-100 fadeInLeft" style="animate-delay: 1s" alt="">
                            <div class="carousel-caption d-none d-sm-block d-md-block">
                                <h5 class="animated fadeInDown" style="animation-delay: 1s">School Details</h5>
                                <p class="animated fadeIn" style="animation-delay: 2s">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Ad aspernatur beatae cumque distinctio dolor.</p>
                                <p class="animated fadeIn" style="animation-delay: 3s"><a href="#">More Info</a></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/milestones_background.jpg"
                                 class="img-fluid-carousel d-block w-100 fadeInLeft" style="animate-delay: 2s" alt="">
                            <div class="carousel-caption d-none d-sm-block d-md-block">
                                <h5 class="animated fadeInUp" style="animation-delay: 1s">School Details</h5>
                                <p class="animated fadeIn" style="animation-delay: 2s">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Ad aspernatur beatae cumque distinctio dolor.</p>
                                <p class="animated fadeIn" style="animation-delay: 3s"><a href="#">More Info</a></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/milestones_background.jpg"
                                 class="img-fluid-carousel d-block w-100 fadeInLeft" style="animate-delay: 2s" alt="">
                            <div class="carousel-caption d-none d-sm-block d-md-block">
                                <h5 class="animated bounceIn" style="animation-delay: 1s">School Details</h5>
                                <p class="animated fadeIn" style="animation-delay: 2s">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Ad aspernatur beatae cumque distinctio dolor.</p>
                                <p class="animated fadeIn" style="animation-delay: 3s"><a href="#">More Info</a></p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
        <!--Message Desk-->
        <section class="message-desk">
            <div class="container">
                {{--Message Part--}}
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="message-box">
                            <div class="message-box-name">
                                <h3 class="">Message From The Chairman</h3>
                            </div>
                            <div class="message-box-content">
                                <div>
                                    <img src="images/yugalPic.jpg" class="message-box-img" alt=""/>
                                </div>
                                <p class="text-justify m-0 p-0"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cum debitis deleniti deserunt dolores ducimus ea error ex id ipsa laborum magnam, magni maxime quis repellendus. Aliquam esse facere vel.</span><span>Aperiam atque aut cupiditate deleniti distinctio dolorem eos facilis impedit labore libero magnam nisi nulla quos veniam, voluptatum! Consequatur consequuntur delectus est eveniet libero nam obcaecati porro quibusdam reiciendis ut.</span><span>Aspernatur cumque, doloremque eaque illum in mollitia necessitatibus non optio ratione saepe. Accusantium alias asperiores dicta distinctio, dolorem eos eveniet illo illum ipsam laboriosam maxime natus numquam perferendis repellendus vero?</span><span>A adipisci aspernatur commodi culpa cupiditate diae ratione, rem rerum sed tempora tempore tenetur totam veritatis voluptatem? Culpa, non, provident?</span><span>Animi culpa dicta dolorem et ex exercitationem explicabo facere fuga hic inventore ipsam ipsum, itaque iusto, laudantium libero magnam natus nesciunt nisi perferendis quibusdam repellat tempore velit voluptatum? Incidunt, voluptatibus.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12  why-us-part">
                        <div class="section_title1">
                            <h2>Why <span>Buddha Jyoti ?</span></h2>
                        </div>
                        <div class="row text-justify mb-2">
                            <p class="">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consectetur doloremque
                                magnam
                                nemo odio quod sapiente ut! Ab, dignissimos eligendi in itaque magni minima nesciunt
                                quaerat
                                quidem sunt, vel, vitae!
                            </p>
                        </div>
                        <div class="row ml-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <i class="fas fa-school fa-4x"></i>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <h5>Strong Foundation</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <i class="fab fa-creative-commons-remix fa-4x"></i>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <h5>Hi-Tech Techniques and Teachers</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ml-1 mt-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <i class="fas fa-book-reader fa-4x"></i>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <h5>Record Keeping Toppers</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <i class="fas fa-seedling fa-4x"></i>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <h5>Healthy and Natural Enviornment</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12  col-md-5">

                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-sm-12 col-md-5">
                        <div class="message-box">
                            <div class="message-box-name">
                                <h3 class="">Message From The Principal</h3>
                            </div>
                            <div class="message-box-content">
                                <div>
                                    <img src="images/yugalPic.jpg" class="message-box-img" alt=""/>
                                </div>
                                <p class="text-justify m-0 p-0"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cum debitis deleniti deserunt dolores ducimus ea error ex id ipsa laborum magnam, magni maxime quis repellendus. Aliquam esse facere vel.</span><span>Aperiam atque aut cupiditate deleniti distinctio dolorem eos facilis impedit labore libero magnam nisi nulla quos veniam, voluptatum! Consequatur consequuntur delectus est eveniet libero nam obcaecati porro quibusdam reiciendis ut.</span><span>Aspernatur cumque, doloremque eaque illum in mollitia necessitatibus non optio ratione saepe. Accusantium alias asperiores dicta distinctio, dolorem eos eveniet illo illum ipsam laboriosam maxime natus numquam perferendis repellendus vero?</span><span>A adipisci aspernatur commodi culpa cupiditate diae ratione, rem rerum sed tempora tempore tenetur totam veritatis voluptatem? Culpa, non, provident?</span><span>Animi culpa dicta dolorem et ex exercitationem explicabo facere fuga hic inventore ipsam ipsum, itaque iusto, laudantium libero magnam natus nesciunt nisi perferendis quibusdam repellat tempore velit voluptatum? Incidunt, voluptatibus.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-----------------}}
            <div class="container">
            </div>
            {{-----------------}}


        </section>
        {{--Awards Section--}}
        <section class="award-desk">
            <div class="container">
                <div class="row featured-service">
                    <div class="featured_box">
                        <div class="row">
                            <div class="col-lg-4 mb-30 mb-sm-60 mb-xs-60">
                                <div class="featured-service-item pb-2 text-center">
                                    <span class="featured-service-icon"><img
                                            src="http://theembazaar.com/demo/goldey/memozin/assets/images/icon1.png"
                                            alt=""></span>
                                    <h3>Course Facilities</h3>
                                    <p class="mb-0">
                                        Artbees is humbled and proud to be showcased in many criti allyacclaimed blogs
                                        and online magazines.
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-30 mb-sm-60 mb-xs-60">
                                <div class="featured-service-item pb-2 text-center">
                                    <span class="featured-service-icon"><img
                                            src="http://theembazaar.com/demo/goldey/memozin/assets/images/icon2.png"
                                            alt=""></span>
                                    <h3>Modern Library</h3>
                                    <p class="mb-0">
                                        Artbees is humbled and proud to be showcased in many criti allyacclaimed blogs
                                        and online magazines.
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-30">
                                <div class="featured-service-item pb-2 text-center">
                                    <span class="featured-service-icon"><img
                                            src="http://theembazaar.com/demo/goldey/memozin/assets/images/icon3.png"
                                            alt=""></span>
                                    <h3>Industrial Leader</h3>
                                    <p class="mb-0">
                                        Artbees is humbled and proud to be showcased in many criti allyacclaimed blogs
                                        and online magazines.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mt-60 mt-xs-30 mt-sm-30">
                        <div class="about_point">
                            <i class="fas fa-users icon_conunt"></i>
                            <h3>Students</h3>
                            <span class="counter" data-count="67">0</span>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-60 mt-xs-30 mt-sm-30">
                        <div class="about_point">
                            <i class="fas fa-trophy icon_conunt"></i>
                            <h3>Awards</h3>
                            <span class="counter" data-count="3562">0</span>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-60 mt-xs-30 mt-sm-30">
                        <div class="about_point">
                            <i class="fas fa-user-md icon_conunt"></i>
                            <h3>Teachers</h3>
                            <span class="counter" data-count="1054">0</span>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-60 mt-xs-30 mt-sm-30">
                        <div class="about_point">
                            <i class="fas fa-check-circle icon_conunt"></i>
                            <h3>Successors</h3>
                            <span class="counter" data-count="1904">0</span>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <div id="app">
        <!---Testonomials Desk-->
        {{--Event Section--}}

            <event-desk></event-desk>
        </div>


        {{--Teachers Desk--}}
        <section class="teacher-desk bg-gradient-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 text-center" id="teacher-container">
                        <div class="teacher-front">
                            <div class="teacher-top"></div>
                            <div class="teacher">
                                <img src="images/teacher_1.jpg" class="teacher-img">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </p>
                                <h3> Teacher Name</h3>
                                <h5> Post ..... </h5>
                            </div>
                        </div>
                        <div class="teacher-back">
                            <div class="teacher-top2">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </p>
                            </div>
                            <div class="teacher">
                                <h3> Teacher Description</h3>
                                <h5> Post ..... </h5>
                                <p>Icons</p>
                            </div>
                            <div class="teacher-back-fotter2">
                                <b>
                                    Years Active <br/>
                                    5
                                </b>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center" id="teacher-container">
                        <div class="teacher-front">
                            <div class="teacher-top"></div>
                            <div class="teacher">
                                <img src="images/teacher_2.jpg" class="teacher-img">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </p>
                                <h3> Teacher Name</h3>
                                <h5> Post ..... </h5>
                            </div>
                        </div>
                        <div class="teacher-back">
                            <div class="teacher-top2">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </p>
                            </div>
                            <div class="teacher">
                                <h3> Teacher Description</h3>
                                <h5> Post ..... </h5>
                                <p>Icons</p>
                            </div>
                            <div class="teacher-back-fotter">
                                <b>
                                    Years Active <br/>
                                    5
                                </b>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center" id="teacher-container">
                        <div class="teacher-front">
                            <div class="teacher-top"></div>
                            <div class="teacher">
                                <img src="images/teacher_5.jpg" class="teacher-img">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </p>
                                <h3> Teacher Name</h3>
                                <h5> Post ..... </h5>
                            </div>
                        </div>
                        <div class="teacher-back">
                            <div class="teacher-top2">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </p>
                            </div>
                            <div class="teacher">
                                <h3> Teacher Description</h3>
                                <h5> Post ..... </h5>
                                <p>Icons</p>
                            </div>
                            <div class="teacher-back-fotter2">
                                <b>
                                    Years Active <br/>
                                    5
                                </b>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center" id="teacher-container">
                        <div class="teacher-front">
                            <div class="teacher-top"></div>
                            <div class="teacher">
                                <img src="images/teacher_2.jpg" class="teacher-img">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </p>
                                <h3> Teacher Name</h3>
                                <h5> Post ..... </h5>
                            </div>
                        </div>
                        <div class="teacher-back">
                            <div class="teacher-top2">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </p>
                            </div>
                            <div class="teacher">
                                <h3> Teacher Description</h3>
                                <h5> Post ..... </h5>
                                <p>Icons</p>
                            </div>
                            <div class="teacher-back-fotter2">
                                <b>
                                    Years Active <br/>
                                    5
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--Contact--}}
        <section class="contact-desk">
            <footer class="footer">
                <div class="container">

                    <!-- Newsletter -->

                    <div class="newsletter">
                        <div class="row">
                            <div class="col">
                                <div class="section_title text-center">
                                    <h1>Subscribe to newsletter</h1>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col text-center">
                                <div class="newsletter_form_container mx-auto">
                                    <form action="post">
                                        <div
                                            class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
                                            <input id="newsletter_email" class="newsletter_email" type="email"
                                                   placeholder="Email Address" required="required"
                                                   data-error="Valid email is required.">
                                            <button id="newsletter_submit" type="submit"
                                                    class="newsletter_submit_btn trans_300"
                                                    value="Submit">Subscribe
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Footer Content -->

                    <div class="footer_content">
                        <div class="row">

                            <!-- Footer Column - About -->
                            <div class="col-lg-3 footer_col">

                                <!-- Logo -->
                                <div class="logo_container">
                                    <div class="logo">
                                        <img src="images/logo.png" alt="">
                                        <span>course</span>
                                    </div>
                                </div>

                                <p class="footer_about_text text-white">In aliquam, augue a gravida rutrum, ante nisl
                                    fermentum
                                    nulla,
                                    vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor
                                    fermentum,
                                    tempor
                                    lacus.</p>

                            </div>

                            <!-- Footer Column - Menu -->

                            <div class="col-lg-3 footer_col">
                                <div class="footer_column_title">Menu</div>
                                <div class="footer_column_content">
                                    <ul>
                                        <li class="footer_list_item"><a href="#">Home</a></li>
                                        <li class="footer_list_item"><a href="#">About Us</a></li>
                                        <li class="footer_list_item"><a href="courses.blade.php">Courses</a></li>
                                        <li class="footer_list_item"><a href="news.blade.php">News</a></li>
                                        <li class="footer_list_item"><a href="contact.blade.php">Contact</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Footer Column - Usefull Links -->

                            <div class="col-lg-3 footer_col">
                                <div class="footer_column_title">Usefull Links</div>
                                <div class="footer_column_content">
                                    <ul>
                                        <li class="footer_list_item"><a href="#">Testimonials</a></li>
                                        <li class="footer_list_item"><a href="#">FAQ</a></li>
                                        <li class="footer_list_item"><a href="#">Community</a></li>
                                        <li class="footer_list_item"><a href="#">Campus Pictures</a></li>
                                        <li class="footer_list_item"><a href="#">Tuitions</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Footer Column - Contact -->

                            <div class="col-lg-3 footer_col">
                                <div class="footer_column_title">Contact</div>
                                <div class="footer_column_content">
                                    <ul>
                                        <li class="footer_contact_item">
                                            <div class="footer_contact_icon">
                                                <img src="images/placeholder.svg"
                                                     alt="https://www.flaticon.com/authors/lucy-g">
                                            </div>
                                            Blvd Libertad, 34 m05200 Arévalo
                                        </li>
                                        <li class="footer_contact_item">
                                            <div class="footer_contact_icon">
                                                <img src="images/smartphone.svg"
                                                     alt="https://www.flaticon.com/authors/lucy-g">
                                            </div>
                                            0034 37483 2445 322
                                        </li>
                                        <li class="footer_contact_item">
                                            <div class="footer_contact_icon">
                                                <img src="images/envelope.svg"
                                                     alt="https://www.flaticon.com/authors/lucy-g">
                                            </div>
                                            hello@company.com
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Footer Copyright -->

                    <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
                        <div class="footer_copyright">
					<span class="text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i
                            class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                                                              target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                        </div>
                        <div class="footer_social ml-sm-auto">
                            <ul class="menu_social">
                                <li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </footer>
        </section>


        {{---------}}
    </div>
    <!--Container Ends-->


@endsection

@section('scripts')
    <script>
        /*Navber*/
        /*(function ($) {
            var previousScroll = 20;
            // scroll functions
            $(window).scroll(function (e) {

                // add/remove class to navbar when scrolling to hide/show
                var scroll = $(window).scrollTop();
                if (scroll >= previousScroll) {
                    $('.navbar').addClass("navbar-hide");

                } else if (scroll < previousScroll) {
                    $('.navbar').removeClass("navbar-hide");
                }
                previousScroll = scroll;

            });

        })(jQuery);*/
        /*----*/
        /*Swiper*/
        var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            initialSlide: 2,
            autoplay: {
                delay: 6000,
                disableOnInteraction: true,
            },
            coverflowEffect: {
                rotate: 10,
                stretch: 0,
                depth: 120,
                modifier: 3,
                slideShadows: false,
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                bulletSize: 20,
                clickable: true,
            },
        });
        /*---*/
    </script>
@endsection

<template>
    <section class="testimonial-desk">

        <div class="container-fluid">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-md-6"
                     style="background-image: url('images/svg/school-svg.svg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                    <div class="row d-flex justify-content-center circle-container">
                        <div class="circle thinCircle"></div>
                        <div class="circle innerCircle1"></div>
                        <div class="circle  innerCircle2"></div>
                        <div class="quotes-container">
                            <h2 class="quotes"><span>The most important day of a person's education is the first day of school, not Graduation Day</span></h2>
                            <h2 class="quotes"><span>Today is the first day of the rest of your life.</span></h2>
                            <h2 class="quotes"><span>The first day of school: The day when the countdown to the last day of the school begins.</span></h2>
                            <h2 class="quotes"><span>The roots of education are bitter, but the fruit is sweet.</span></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" id="testimonial-div">
                    <div class="row">
                        <div class="col-lg-9 col-md-12 col-sm-12">
                            <md-card>
                                <md-card-media class="swiper-inner">
                                    <div class="row justify-content-center">
                                        <div class="mt-2 mb-0">
                                            <h2 class="title-top">Testimonial</h2>
                                            <hr class="bg-base-color separator-line mr-auto ml-auto" style="width: 40% !important;">
                                        </div>
                                    </div>
                                    <!-- swiper -->
                                    <swiper :options="swiperOption">
                                        <!--<swiper-slide v-for="testimonials in testemonial" v-bind:key="testimonials.id"
                                                      style="height: 500px;">
                                            <div class="testimonial-profile">
                                                <img :src="testimonials.photo" class="testonomial-user">
                                                <blockquote>
                                                    {{testimonials.saying}}
                                                </blockquote>
                                                <div class="text-center pt-2">
                                                    <h3> {{testimonials.f_name}}</h3>
                                                    <p> {{testimonials.type}}</p>
                                                </div>
                                            </div>
                                        </swiper-slide>-->
                                        <swiper-slide>
                                            <div class="testimonial-profile">
                                                <img src="images/teacher_4.jpg" class="testonomial-user">
                                                <blockquote style="height: auto; text-align: center; margin: auto;">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut
                                                    deserunt
                                                    dolor
                                                    enim expedita, fuga in molestias nihil nobis nulla numquam omnis
                                                    quibusdam
                                                    reiciendis saepe suscipit veritatis vero vitae! Quis.
                                                </blockquote>
                                                <div class="text-center">
                                                    <h3> Testimonials Name</h3>
                                                    <p> Post at ...</p>
                                                </div>
                                            </div>
                                        </swiper-slide>
                                        <swiper-slide>
                                            <div class="testimonial-profile">
                                                <img src="images/teacher_4.jpg" class="testonomial-user">
                                                <blockquote>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut
                                                    deserunt
                                                    dolor
                                                    enim expedita, fuga in molestias nihil nobis nulla numquam omnis
                                                    quibusdam
                                                    reiciendis saepe suscipit veritatis vero vitae! Quis.
                                                    enim expedita, fuga in molestias nihil nobis nulla numquam omnis
                                                    quibusdam
                                                    reiciendis saepe suscipit veritatis vero vitae! Quis.
                                                </blockquote>
                                                <div class="text-center">
                                                    <h3> Testimonials Name</h3>
                                                    <p> Post at ...</p>
                                                </div>
                                            </div>
                                        </swiper-slide>
                                        <swiper-slide>
                                            <div class="testimonial-profile">
                                                <img src="images/teacher_4.jpg" class="testonomial-user">
                                                <blockquote>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut
                                                    deserunt

                                                </blockquote>
                                                <div class="text-center">
                                                    <h3> Testimonials Name</h3>
                                                    <p> Post at ...</p>
                                                </div>
                                            </div>
                                        </swiper-slide>
                                        <div class="swiper-pagination" slot="pagination"></div>
                                    </swiper>
                                </md-card-media>
                            </md-card>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</template>

<script>
    export default {
        name: "testimonialDesk",
        data() {
            return {
                swiperOption: {
                    effect: 'coverflow',
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: 'auto',
                    loop: true,
                    coverflowEffect: {
                        rotate: 100,
                        stretch: 0,
                        depth: 100,
                        modifier: 1,
                        slideShadows: false
                    },
                    autoplay: {
                        delay: 12000,
                        disableOnInteraction: true
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                }
            }
        },
        mounted() {
            $(document).ready(function() {

                var quotes = $(".quotes");
                var quoteIndex = -1;

                function showNextQuote() {
                    ++quoteIndex;
                    quotes.eq(quoteIndex % quotes.length)
                        .fadeIn(2000)
                        .delay(5000)
                        .fadeOut(2000, showNextQuote);
                }
                showNextQuote();
            });
            var swiper = new Swiper('.swiper-wrapper', {});

            axios.get('/api/fetchTestemonial', {}).then(response => {
                this.testemonial = response.data.testemonial;

            });
        }

    }
</script>

<style scoped>

    /****Swipper****/

    @media screen and (min-width: 768px) {
        #testimonial-div {
            transform: translateY(-80px);
        }
    }

    .swiper-container-horizontal>.swiper-pagination-bullets, .swiper-pagination-custom, .swiper-pagination-fraction {
        bottom: 90px;
        left: 0;
        width: 100%;
    }

    .swiper-inner {
        width: 100%;
        height: 100%;
        border: none;
        position: relative;
        background-color: #fff;
    }

    .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 80%;
        height: 100%;
        box-shadow: 0 0 0 0 rgba(158, 152, 153, 0.8);
    }

    /*Testonomials Start*/
/*    .testimonial-desk {
        padding: 50px 0;
        background-color: #fafafa;
    }*/

    .testimonial-profile {
        box-shadow: 0 8px 10px 0px rgba(158, 152, 153, 0.3);
        margin: 30px 0;
    }
    .testimonial-profile p{
        padding-bottom: 20px;
    }

    .testonomial-user {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        margin-top: 40px;
        /*transform: translateX(80%);*/
    }

    .profile h3 {
        font-size: 20px;
        margin-top: 15px;
        color: #ff9800;
    }

    .profile h3 span {
        font-size: 15px;
        color: #333333;
    }
    blockquote {
        overflow: hidden;
        text-overflow: ellipsis;
        height: auto;
        /*display: -webkit-box;
        -webkit-line-clamp: 5;*/
        -webkit-box-orient: vertical;
        font-size: 16px;
        line-height: 22px;
        border-left: none;
        word-wrap: break-word;
    }

    blockquote::before {
        content: '\201C';
        font-size: 60px;
        font-family: "Times New Roman";
        position: relative;
        color: #cd2541;
        line-height: 20px;
        bottom: -15px;
        right: 5px;
    }

    blockquote::after {
        content: '\201D';
        font-size: 60px;
        font-family: "Times New Roman";
        position: relative;
        color: #cd2541;
        line-height: 10px;
        bottom: -15px;
        left: 5px;
    }

    .testimonial-profile:hover {
        -webkit-box-shadow: -1px 2px 5px 8px rgba(212,212,212,0.3);
        -moz-box-shadow: -1px 2px 5px 8px rgba(212,212,212,0.3);
        box-shadow: -1px 2px 5px 8px rgba(212,212,212,0.3);
        cursor: pointer;
        transition: 0.7s ;
    }

    @media screen and (min-width: 991px) {
        .testimonial-profile img {
            /*margin-left: 22%;*/
        }
    }

    /*Testonomials Ends*/
    .testimonial-desk {
        padding: 50px 0 0;
        background: #fff;
        height: auto;
    }

    /*Quotes*/
    .quotes-container {
        width: 60%;
        margin: auto;
    }
    .quotes {
        display: none;
        z-index: 1000;
        /*margin: 1em;*/
    }
    .quotes span{
        color: white;
        font-size: 20px;
        background: #191c34;
        padding: 4px;
        line-height: 1.6;
    }
    /*Quotes Ends*/
    .circle-container {
        position: relative;
    }

    .circle {
        position: absolute;
        top: 0;
        margin: 0 auto;
    }

    .thinCircle {
        background-color: transparent;
        border: 1px solid #555555;
        opacity: 1;
        border-radius: 50%;
        animation: ellipseRotate 20s ease-in-out infinite;
    }

    .innerCircle1 {
        background-color: transparent;
        border: 8px solid #FFEB00;
        opacity: 1;
        border-right: 8px solid transparent;
        border-left: 8px solid transparent;
        border-radius: 50%;
        /*margin: 0 auto;*/
        -moz-animation: spinPulse 7s infinite ease-in-out;
        -webkit-animation: spinPulse 7s infinite ease-in-out;
    }

    .innerCircle2 {
        background-color: transparent;
        border: 8px solid #222222;
        opacity: 1;
        border-top: 8px solid transparent;
        border-bottom: 8px solid transparent;
        border-radius: 50%;
        -moz-animation: spinPulse 7s infinite ease-in-out;
        -webkit-animation: spinPulse 7s infinite ease-in-out;
    }

    .innerCircle1, .innerCircle2 {
        top: 10px;
    }

    @media screen and (min-width: 1200px) {
        .circle-container {
            height: 460px;
            overflow: hidden;
        }

        .thinCircle {
            width: 460px;
            height: 460px;
        }

        .innerCircle1 {
            width: 440px;
            height: 440px;
        }

        .innerCircle2 {
            width: 440px;
            height: 440px;
        }
    }

    @media screen and (min-width: 768px) and (max-width: 911px) {
        .circle-container {
            height: 390px;
            overflow: hidden;
        }

        .thinCircle {
            width: 370px;
            height: 370px;
        }

        .innerCircle1 {
            width: 350px;
            height: 350px;
        }

        .innerCircle2 {
            width: 350px;
            height: 350px;
        }
    }

    @media screen and (min-width: 912px) and (max-width: 1199px) {
        .circle-container {
            height: 440px;
            overflow: hidden;
        }

        .thinCircle {
            width: 420px;
            height: 420px;
        }

        .innerCircle1 {
            width: 400px;
            height: 400px;
        }

        .innerCircle2 {
            width: 400px;
            height: 400px;
        }
    }

    @media screen and (max-width: 767px) {
        .circle-container {
            height: 360px;
            overflow: hidden;
        }

        .thinCircle {
            width: 340px;
            height: 340px;
        }

        .innerCircle1 {
            width: 320px;
            height: 320px;
        }

        .innerCircle2 {
            width: 320px;
            height: 320px;
        }
    }


    @-moz-keyframes spinPulse {
        0% {
            -moz-transform: rotate(0deg);
            opacity: 1;
            box-shadow: 0 0 1px #bdd73c;
        }
        50% {
            -moz-transform: rotate(-180deg);
            opacity: 0.7;
        }
        100% {
            -moz-transform: rotate(-360deg);
            opacity: 1;
        }
    }

    @-webkit-keyframes spinPulse {
        0% {
            -webkit-transform: rotate(0deg);
            opacity: 1;
            box-shadow: 0 0 1px #bdd73c;
        }
        50% {
            -webkit-transform: rotate(-180deg);
            opacity: 0.7;
        }
        100% {
            -webkit-transform: rotate(-360deg);
            opacity: 1;
        }
    }

    @keyframes ellipseRotate {
        0% {
            transform: rotate(-45deg);
        }
        100% {
            transform: rotate(-405deg);
        }
    }

</style>

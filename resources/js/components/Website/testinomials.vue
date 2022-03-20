<template>
    <div class="">
        <section class="testimonial-desk">
            <div class="">

                <div class="row justify-content-center">
                    <div class="mb-2">
                        <h2 class="title-top">Testimonial</h2>
                        <hr class="bg-base-color separator-line mr-auto ml-auto" style="width: 40% !important;">
                    </div>
                </div>

                <md-card>
                    <md-card-media>
                        <!-- swiper -->
                        <swiper :options="swiperOption" style="height: 500px;">
                            <swiper-slide v-for="testimonials in testemonial" v-bind:key="testimonials.id" style="height: 500px;">
                                <div class="testimonial-profile" >
                                    <img :src="testimonials.photo" class="testonomial-user">
                                    <blockquote>
                                        {{testimonials.saying}}
                                    </blockquote>
                                    <div class="text-center pt-2">
                                        <h3> {{testimonials.f_name}}</h3>
                                        <p> {{testimonials.type}}</p>
                                    </div>
                                </div>
                            </swiper-slide>
                            <swiper-slide>
                                <div class="testimonial-profile">
                                    <img src="images/teacher_4.jpg" class="testonomial-user">
                                    <blockquote style="height: auto; text-align: center; margin: auto;">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut deserunt
                                        dolor
                                        enim expedita, fuga in molestias nihil nobis nulla numquam omnis quibusdam
                                        reiciendis saepe suscipit veritatis vero vitae! Quis.
                                    </blockquote>
                                    <div class="text-center">
                                        <h3> Testimonials Name</h3>
                                        <p> Post at ...</p>
                                    </div>
                                </div>
                            </swiper-slide>
                            <!--<swiper-slide>
                                <div class="testimonial-profile">
                                    <img src="images/teacher_4.jpg" class="testonomial-user">
                                    <blockquote>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut deserunt
                                        dolor
                                        enim expedita, fuga in molestias nihil nobis nulla numquam omnis quibusdam
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
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut deserunt
                                        dolor
                                        enim expedita, fuga in molestias nihil nobis nulla numquam omnis quibusdam
                                        reiciendis saepe suscipit veritatis vero vitae! Quis.
                                    </blockquote>
                                    <div class="text-center">
                                        <h3> Testimonials Name</h3>
                                        <p> Post at ...</p>
                                    </div>
                                </div>
                            </swiper-slide>-->
                            <div class="swiper-pagination swiper-pagination-bullets" slot="pagination"></div>
                            <!--<div class="swiper-button-next swiper-button-primary" slot="button-next"></div>
                            <div class="swiper-button-prev swiper-button-primary" slot="button-prev"></div>-->
                        </swiper>
                    </md-card-media>
                </md-card>

            </div>
        </section>
    </div>
</template>

<script>

    export default {
        data() {
            return {
                testemonial: [],
                swiperOption: {
                    effect: 'cube',
                    grabCursor: true,
                    cubeEffect: {
                        shadow: true,
                        slideShadows: true,
                        shadowOffset: 10,
                        shadowScale: 0.1
                    },
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: true
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                        /*renderBullet(index, className) {
                            return `<span class="${className} swiper-pagination-bullet-custom">${index + 1}</span>`
                        }*/
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev'
                    }
                }
            }
        },
        mounted() {
            var swiper = new Swiper('.swiper-wrapper', {});

            axios.get('/api/fetchTestemonial', {}).then(response => {
                this.testemonial = response.data.testemonial;

            });
        }
    }
</script>

<style scoped>
    .md-card {
        box-shadow: none;
    }

    .swiper-inner {
        width: 100%;
        height: 100%;
        border: none;
        padding-top: 50px;
        padding-bottom: 50px;
        position: relative;
    }

    .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 300px;
        height: 100%;
        padding-top: 30px;
        padding-bottom: 30px;
        box-shadow: 0 0 0 0 rgba(158, 152, 153, 0.5);
    }

    /*    .swiper-pagination-bullet-custom {
            width: 20px;
            height: 20px;
            text-align: center;
            line-height: 20px;
            font-size: 12px;
            color: #000000 !important;
            opacity: 1;
            background: rgba(0,0,0,0.2);
        }
        .swiper-pagination-bullet-custom.swiper-pagination-bullet-active {
            color: #ffffff !important;
            background: #007aff;
        }*/

    /*Testonomials Start*/
    .testimonial-desk {
        padding: 50px 0;
        background-color: #fafafa;
    }

    .testimonial-profile{
        box-shadow: 0 8px 20px -2px rgba(158, 152, 153, 0.3);
        padding-bottom: 10px;
    }


    .testonomial-user {
        width: 130px;
        height: 130px;
        border-radius: 50%;
        transform: translateX(80%);
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
        font-size: 16px;
        line-height: 30px;
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
        box-shadow: 0 0 15px 5px rgba(222, 222, 222, 0.3);
        cursor: pointer;
        transition: 0.7s;
    }

    @media screen and (min-width: 991px) {
        .testimonial-profile img {
            margin-left: 22%;
        }
    }

    /*Testonomials Ends*/

</style>

<template>
    <div class="">
        <section class="gallery-desk">
            <div class="">

                <div class="row justify-content-center">
                    <div class="mb-2">
                        <h2 class="title-top">Gallery</h2>
                        <hr class="bg-base-color separator-line mr-auto ml-auto" style="width: 40% !important;">
                    </div>
                </div>
                <md-card>
                    <md-card-media  style="height: 450px">
                        <!-- swiper1 -->
                        <swiper :options="swiperOptionTop" class="gallery-top" ref="swiperTop" style="height: 400px;">
                            <swiper-slide class="slide-1">
                                <img src="images/teacher_1.jpg" class="img-fluid testonomial-user">
                            </swiper-slide>
                            <swiper-slide class="slide-2">
                                <img src="images/milestones_background.jpg" class="img-fluid testonomial-user">
                            </swiper-slide>
                            <swiper-slide class="slide-3">
                                <img src="images/teacher_3.jpg" class="img-fluid testonomial-user">
                            </swiper-slide>
                            <swiper-slide class="slide-4">
                                <img src="images/teacher_4.jpg" class="img-fluid testonomial-user">
                            </swiper-slide>
                            <swiper-slide class="slide-5">
                                <img src="images/teacher_5.jpg" class="testonomial-user">
                            </swiper-slide>
                            <swiper-slide class="slide-6">
                                <img src="images/teacher_6.jpg" class="img-fluid testonomial-user">
                            </swiper-slide>
                            <div class="swiper-pagination" slot="pagination"></div>
                            <!--<div class="swiper-button-next swiper-button-white" slot="button-next"></div>
                            <div class="swiper-button-prev swiper-button-white" slot="button-prev"></div>-->
                        </swiper>
                        <!-- swiper2 Thumbs -->
                        <swiper :options="swiperOptionThumbs" class="gallery-thumbs" ref="swiperThumbs" style="height: 50px;">
                            <swiper-slide class="slide-1">
                                <img src="images/teacher_1.jpg" class="testonomial-user">
                            </swiper-slide>
                            <swiper-slide class="slide-2">
                                <img src="images/milestones_background.jpg" class="testonomial-user">
                            </swiper-slide>
                            <swiper-slide class="slide-3">
                                <img src="images/teacher_3.jpg" class="testonomial-user">
                            </swiper-slide>
                            <swiper-slide class="slide-4">
                                <img src="images/teacher_4.jpg" class="testonomial-user">
                            </swiper-slide>
                            <swiper-slide class="slide-5">
                                <img src="images/teacher_5.jpg" class="testonomial-user">
                            </swiper-slide>
                            <swiper-slide class="slide-6">
                                <img src="images/teacher_6.jpg" class="testonomial-user">
                            </swiper-slide>
                        </swiper>
                    </md-card-media>
                </md-card>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: "gallery",
        data() {
            return {
                swiperOptionTop: {
                    spaceBetween: 5,
                    loop: true,
                    loopedSlides: 5, //looped slides should be the same
                    effect: 'fade',
                    pagination: {
                        el: '.swiper-pagination',
                        type: 'progressbar'
                    },
                },
                swiperOptionThumbs: {
                    spaceBetween: 5,
                    slidesPerView: 4,
                    touchRatio: 0.2,
                    loop: true,
                    loopedSlides: 5, //looped slides should be the same
                    slideToClickedSlide: true,
                }
            }
        },
        mounted() {
            this.$nextTick(() => {
                const swiperTop = this.$refs.swiperTop.swiper
                const swiperThumbs = this.$refs.swiperThumbs.swiper
                swiperTop.controller.control = swiperThumbs
                swiperThumbs.controller.control = swiperTop
            })
        }
    }
</script>

<style scoped>
    .gallery-desk {
        padding: 0 0 0 0;
        background-color: #fff;
    }

    /*Gallery----*/
    .swiper-container {
        background-color: #000;
    }
    .swiper-slide {
        background-size: cover;
        background-position: center;
    /*&.slide-1 {
         background-image:url('https://p.bigstockphoto.com/GeFvQkBbSLaMdpKXF1Zv_bigstock-Aerial-View-Of-Blue-Lakes-And--227291596.jpg');
     }
    &.slide-2 {
         background-image:url('https://image.shutterstock.com/image-photo/colorful-flower-on-dark-tropical-260nw-721703848.jpg');
     }
    &.slide-3 {
         background-image:url('https://media.gettyimages.com/photos/cropped-image-of-person-eye-picture-id942369796?s=612x612');
     }
    &.slide-4 {
         background-image:url('https://images.unsplash.com/photo-1499084732479-de2c02d45fcc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80');
     }
    &.slide-5 {
         background-image:url('https://images.unsplash.com/photo-1499084732479-de2c02d45fcc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80');
     }*/
    }
    .gallery-top  img{
        height: 400px !important;
        width: 100%;
    }
    .gallery-thumbs {
        height: 20%!important;
        box-sizing: border-box;
        padding: 10px 0;
    }
    .gallery-thumbs .swiper-slide {
        width: 25%;
        height: 100%;
        opacity: 0.4;
    }
    .gallery-thumbs img{
        height: 100px;
    }
    .gallery-thumbs .swiper-slide-active {
        opacity: 1;
    }
</style>

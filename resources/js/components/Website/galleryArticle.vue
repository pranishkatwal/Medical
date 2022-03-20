<template>
    <section class="gallery-article-desk">
        <div class="container">
            <div class="row">
                <div class="col-md-6" id="chairman-div">
                    <Gallery/>
                </div>
                <div class="col-md-6" id="principal-div">

                    <div class="row bg-dark" id="established-on">
                        <div class="col-md-12 d-flex justify-content-start">
                            <div class="row">
                                <div class="col-3 align-self-center">
                                    <i class="fab fa-opencart fa-2x"></i>
                                </div>
                                <div class="col-9">
                                    <div class="">
                                        <b>Article Title</b>
                                        <span class="">
                                            SubHeading............
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="principal-div-inner">
                        <div class="row d-flex justify-content-end">
                            <div class="">
                                <div class="image-wrapper-1 col-xs-12">
                                    <span class="overlayLine"></span>
                                    <!--<span class="incline-line"></span>-->
                                    <div class="overlay"></div>
                                    <img
                                        src="https://media.istockphoto.com/photos/heart-shape-paper-book-on-the-beach-picture-id817147678?k=6&m=817147678&s=612x612&w=0&h=vNJJJoRPaieom61bMwQxaGtOImMhJsoxz1OIgLZNOEw="
                                        id="principal-image" class="img-fluid"
                                        alt="Photo of Principal of Buddha Jyoti School">
                                </div>
                                <p class="text-justify saying m-3">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit, sed do
                                    eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import Gallery from './gallery'

    export default {
        name: "galleryArticle",
        components: {
            Gallery
        }
    }
</script>

<style scoped>
    /********/
    #chairman-div {
        height: 600px;
    }

    #principal-div {
        height: auto;
    }

    /**********/

    .gallery-article-desk {
        overflow-x: hidden;
        background: #fff;
    }

    @media screen and (min-width: 768px) {
        #established-on {
            padding: 20px 0;
            margin-right: calc(-50vw + 88%);
            height: 80px;
        }
    }

    @media screen and (max-width: 767px) {
        #established-on {
            padding: 20px 0;
            height: 80px;
            margin-right: calc(-50vw - 50%);
            margin-left: calc(-50vw + 50%);
        }
    }

    .image-wrapper {
        width: 100%;
        height: 350px;
        overflow: hidden;
    }

    .image-wrapper-1 {
        width: 60%;
        height: 350px;
        overflow: hidden;
        padding: 0;
        float: right;
        margin: 1rem 0 0 1rem;
    }

    #chairman-image {
        width: 100%;
        height: 350px;
        background-size: cover;
    }

    #principal-image {
        height: 350px;
        background-size: cover;
    }

    p:first-of-type:first-letter {
        font-size: 3em;
        float: left;
        line-height: 40%;
        margin: 0.1em 0.1em 0.1em -0.1em;
    }

    @media screen and (min-width: 768px) and (max-width: 991px) {
        .image-wrapper-1 {
            width: 100%;
            height: 350px;
            overflow: hidden;
            padding: 0;
            float: right;
            margin: 1rem 0 0 1rem;
        }

        #principal-image {
            width: 100%;
            padding-left: 16px;
            height: 350px;
            background-size: cover;
        }
    }

    @media screen and (max-width: 767px) {
        /*#established-on{
            display: none;
        }*/
    }

    @media screen and (max-width: 575px) {
        .image-wrapper-1 {
            width: 100%;
            height: 350px;
            overflow: hidden;
            padding: 0;
            float: right;
            margin: 1rem 0 0 1rem;
        }

        #principal-image {
            width: 100%;
            height: 350px;
            background-size: cover;
        }

    }


    /*Image Overlay*/
    div {
        position: relative;
        /*border: 2px solid yellow;*/
    }

    span {
        position: absolute;
        display: block;
        width: 3%;
    }

    .overlayLine {
        left: 64%;
        height: 100%;
        background: #ffffff;
    }

    /*.incline-line {
        transform: rotate(90deg);
        bottom: 7%;
        right: 18%;
        height: 36%;
        background: #ffffff;
    }*/

    .overlay {
        position: absolute;
        top: 0;
        right: 0;
        height: 73%;
        width: 33%;
        opacity: 1;
        transition: .5s ease;
        border-bottom: 15px solid white;
        background-color: rgba(0, 0, 0, .5);
    }
</style>

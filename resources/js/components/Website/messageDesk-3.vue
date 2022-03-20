<template>
    <section class="message-desk">
        <div class="container">
            <div class="row featured_box d-flex justify-content-center">
                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12" id="established-on">
                    <div class="pb-2 text-center lax" data-lax-preset="fadeInOut-.01">
                                    <span class="featured-service-icon"><img
                                        src="http://theembazaar.com/demo/goldey/memozin/assets/images/icon1.png"
                                        alt="featured service"></span>
                        <h3 class="pt-1 pb-1">Established On</h3>
                        <p class="mb-0">
                            Artbees is humbled and proud to be showcased in
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12" id="extra-curriculum">
                    <div class="pb-2 text-center lax" data-lax-preset="fadeInOut-.01">
                                    <span class="featured-service-icon"><img
                                        src="http://theembazaar.com/demo/goldey/memozin/assets/images/icon1.png"
                                        alt="featured service"></span>
                        <h3 class="pt-1 pb-1">Extra Curriculum</h3>
                        <p class="mb-0">
                            Artbees is humbled and proud to be showcased in
                        </p>
                    </div>
                </div>
            </div>
            <div class="row text-center message-box lax" data-lax-preset="fadeInOut-.01" >
                <div class="col-md-6">
                    <h3 class="mb-1">Message From Chairman</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores blanditiis corporis
                        cum eveniet, excepturi facere laudantium libero minus nisi nobis nulla, perspiciatis quisquam
                        repellat totam ullam unde. Doloremque, numquam!</p>
                </div>
                <div class="col-md-6">
                    <h3 class="mb-1">Message From Principal</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores blanditiis corporis
                        cum eveniet, excepturi facere laudantium libero minus nisi nobis nulla, perspiciatis quisquam
                        repellat totam ullam unde. Doloremque, numquam!</p>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "messageDesk-3"
    }
</script>

<style scoped>
    .message-desk {
        padding: 50px 0 25px 0;
        /*background: #ffffff;*/
    }

    #established-on, #extra-curriculum{
        padding: 40px 0;
        background-color: cyan;
        box-shadow: 0 8px 20px -2px rgba(158, 152, 153, 0.5);
    }

    .message-desk h3 {
        font-size: 22px;
        line-height: 0.5;
        font-weight: 600;
        color: #222;
        font-family: 'Poppins', sans-serif;
        margin-top: 5px;
    }

    .message-box p {
        display: block;
        font-size: 17px;
        color: #5a5a5a;
        margin-block-start: 1em;
        margin-block-end: 1em;
    }

    @media screen and (min-width: 992px) {
        .featured_box.row {
            /*background-color: #ffffff;*/
            /*padding: 40px 0;*/
            /*box-shadow: 0 8px 20px -2px rgba(158, 152, 153, 0.5);*/
            transform: translateY(-80px);
        }
        .message-box{
            transform: translateY(-40px);
        }
    }
    @media screen and (max-width: 991px){
        .featured_box.row {
            transform: translateY(-50px);
        }
    }

    @media screen and (max-width: 576px){
        .featured_box.row{
            margin: 0 20px;
        }
    }

    @media screen and (min-width: 768px){
        #established-on {
            border-right: 1px solid #fff;
        }

        #extra-curriculum {
            border-left: 1px solid #fff;
        }
    }

</style>

<template>
    <div>
        <!-- About Section -->
        <div id="about-section" class="padding pt-xs-40">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-8 our-mission">
                        <div class="block-title v-line">
                            <h2><span>Our</span> MISSION</h2>
                            <p class="italic">
                                Aenean suscipit eget mi act
                            </p>
                        </div>
                        <div class="text-content">
                            <p>
                                Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit
                                eget mi act fermentum phasellus vulputate turpis tincidunt.
                                Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit
                                eget mi act fermentum phasellus vulputate turpis tincidunt.
                            </p>
                        </div>
                        <div class="post-content">
                            <div class="post-img">
                                <img class="img-responsive"
                                     src="images/teachers_background.jpg" alt="Photo">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 our-vision">
                        <div class="dark-bg our-vision light-color padding-40">
                            <div class="block-title1">
                                <h2><span>Our</span> VISION</h2>
                                <p class="italic">
                                    Aenean suscipit eget mi act
                                </p>
                            </div>
                            <p>
                                Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit
                                eget mi act fermentum phasellus vulputate turpis tincidunt.
                                Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit
                                eget mi act fermentum phasellus vulputate turpis tincidunt.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 our-approaches">
                        <div class="block-title v-line">
                            <h2><span>Our</span> Approaches</h2>
                            <p class="italic">
                                Aenean suscipit eget mi act
                            </p>
                        </div>
                        <div class="text-content mx-5">
                            <p>
                                Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit
                                eget mi act fermentum phasellus vulputate turpis tincidunt.
                                Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit
                                eget mi act fermentum phasellus vulputate turpis tincidunt.
                            </p>
                            <p>
                                Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit
                                eget mi act fermentum phasellus vulputate turpis tincidunt.
                                Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit
                                eget mi act fermentum phasellus vulputate turpis tincidunt.
                            </p>
                            <p>
                                Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit
                                eget mi act fermentum phasellus vulputate turpis tincidunt.
                                Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit
                                eget mi act fermentum phasellus vulputate turpis tincidunt.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End-->
        <fotter-component></fotter-component>
    </div>
</template>

<script>
    import fotterComponent from "../fotterComponent";
    export default {
        name: "aboutus",
        component: {
            fotterComponent
        }
    }
</script>

<style scoped>
    @media screen and (max-width: 767px){
        .our-vision{
            margin: 20px 0;
        }
    }
    #about-section {
        padding: 50px 0 50px 0;
    }
    .pt-xs-40 {
        padding-top: 40px;
    }
    .block-title {
        font-size: 20px;
        font-weight: 800;
    }
    .block-title1 h2{
        color: #ffffff;
    }
    .v-line {
        border-left: 3px solid #cd2541;
        padding-left: 20px;
    }
    .italic {
        font-style: italic;
    }
    .text-content {
        padding-bottom: 20px;
    }
    .our-vision p {
        font-size: 17px;
        line-height: 1.65;
    }
    .padding-40 {
        padding: 40px;
    }
    .dark-bg {
        background: #cd2541;
    }
    .light-color {
        color: #fff;
    }
    h2 {
        font-size:35px;
        margin-top: 0;
        color: #222;
        text-transform: capitalize;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
    }
    .post-img{
        width: 100%;
        height: 250px;
    }
    .post-img img {
        max-width: 100%;
        height: 250px;
        border-style: none;
        background-size: cover;
    }
</style>

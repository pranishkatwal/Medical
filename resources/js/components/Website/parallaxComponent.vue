<template>
    <div class="">
        <img class="parallax-img" src="images/testimonials_background_2.jpg"/>
        <!--<ul id="scene">
            <li class="layer" data-depth="1"><img src="images/svg/undraw_exams_g4ow.svg" style="width: 500px; height: 500px; margin-left: 55vw; margin-top: -10vh"></li>
            <li class="layer" data-depth="-1"><img src="images/parallax/rocket.png"></li>
            <li class="layer" data-depth="0.5"><img src="images/parallax/astronaut.png"></li>
            <li class="layer" data-depth="-1"><img src="images/svg/BookLover-Red.svg" style="width: 500px; height: 500px;"></li>
        </ul>-->
    </div>
</template>

<!--<script src="{{asset('js/parallax.js')}}"></script>
<script>
    var scene = document.getElementById('scene');
    var parallax = new Parallax(scene);
</script>
<script>
    export default {
        name: "parallaxComponent"
        }
</script>-->

<style scoped>
    .parallax-img {
        position: fixed;
        height: 100%;
        bottom: 0;
        left: 0;
        z-index: -1;
        opacity: 0.8;
    }
    /*body
    {
        margin: 0;
        padding: 0;
    }
    .container
    {
        width: 100vw;
        height: 100vh;
        overflow: hidden;
        !*background: url('/images/svg/BookLover-Red.svg');*!
        background-attachment: fixed;
    }
    .mixBlnd
    {
        background-blend-mode: screen;
    }*/
</style>

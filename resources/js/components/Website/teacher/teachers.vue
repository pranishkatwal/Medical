<template>
    <div>
        <section class="teachers-desk">
            <div class="container">
                <!--             Main Loop          -->
                <div v-for="teacher in teachers ">

                    <!--        End Of Main Loop        -->
                    <div class="row">
                        <div class="mb-2">
                            <h2 class="title-top">{{teacher.post_name}}</h2>
                            <hr class="bg-base-color separator-line">
                        </div>
                    </div>
                    <div class="row text-center justify-content-center">
                        <div v-for="teachers in teacher.teacher"
                             class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 text-center member-container">
                            <div class="member-front">
                                <div class="member-front-top">

                                </div>
                                <div class="member-front-mid text-center text-black">
                                    <img src="images/teacher_1.jpg" class="member-img" alt="board member">
                                    <h3>{{teachers.teacher_name}}</h3>
                                    <h5>{{teachers.phone_number}} </h5>
                                </div>
                                <div class="member-front-bottom">
                                    <h3 class="">Get Details</h3>
                                </div>
                            </div>
                            <div class="member-back">
                                <div class="member-back-top">
                                    <h3 class="pt-3">{{teachers.teacher_name}}</h3>
                                    <h5>{{teachers.education_degree}}</h5>
                                </div>
                                <div class="member-back-mid">
                                    <h3>{{teachers.phone_number}}</h3>
                                    <h5 class="text-center">
                                        {{teachers.address}}
                                    </h5>
                                </div>
                                <div class="member-back-bottom">
                                    <b class="">
                                        Joined at<br/>
                                        2015
                                    </b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Hide above after main loop to view below
                -->

                <!--   <div class="row">
                       <div class="mb-2">
                           <h2 class="title-top">{{teacher.post_name}}</h2>
                           <hr class="bg-base-color separator-line">
                       </div>
                   </div>
                   <div class="row text-center justify-content-center">
                       <div v-for="teachers in teacher.teacher"
                            class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 text-center">
                           <div class="card">
                               <input type="checkbox">
                               <div class="toggle"><i class="fas fa-plus" style="color: #1d77a3"></i></div>
                               <div class="imgbx">
                                   <img src="images/teacher_1.jpg" class="img-fluid" alt="Photo of Teachers">
                               </div>
                               <div class="detail">
                                   <div class="">
                                       <div class="">
                                           <h3 class="pt-3">{{teachers.teacher_name}}</h3>
                                           <h5>{{teachers.education_degree}}</h5>
                                       </div>
                                       <hr style="background-color: #ffffff"/>
                                       <div class="">
                                           <h5>{{teachers.phone_number}} </h5>
                                           <h5 class="text-center">
                                               {{teachers.address}}
                                           </h5>
                                       </div>
                                       <hr style="background-color: #ffffff"/>
                                       <div class="">
                                           <h5 class="">
                                               <b>Joined at<br/>
                                                   2015</b>
                                           </h5>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>-->
            </div>
        </section>

        <fotter-component></fotter-component>
    </div>
</template>

<script>
    import fotterComponent from "../fotterComponent";

    export default {
        name: "teachers",
        component: {
            fotterComponent
        },
        data: function () {
            return {
                teachers: []
            }
        },

        mounted() {
            axios.get('/api/fetchWebsiteTeachers', {}).then(resp => {
                this.teachers = resp.data.teacher;
            })

        },


    }
</script>

<style scoped>
    .teachers-desk {
        padding: 50px 0 50px 0;
        background: #f8f8f8;
    }

    .higher-level-teacher, .mid-level-teacher {
        margin-bottom: 30px;
    }

    .higher-level-teacher .row {
        margin-bottom: 25px;
    }

    .mid-level-teacher .card-body {
        cursor: pointer;
        background: #262626;
        transition: 1s;
    }

    .primary-level-teacher .card-body {
        cursor: pointer;
        background: #262626;
        transition: 1s;
    }

    .mid-level-teacher .card:hover > .card-body {
        background: #ffb606;
        color: #262626;
    }

    .primary-level-teacher .card:hover > .card-body {
        background: #ffb606;
        color: #262626;
    }

    .teacher_title {
        color: #ff9800;
        margin-bottom: 15px;
    }

    .teacher_title::after {
        content: '';
        display: block;
        width: 200px;
        height: 2px;
        background: #f8611a;
        margin-top: 7px;
    }

    .teacher_post {
        font-size: 15px;
    }

    .teacher_post::after {
        content: '';
        display: block;
        width: 20%;
        height: 1px;
        background: #dddddd;
        margin-top: 17px;
        margin-left: 40%;
    }


    .member-container {
        cursor: pointer;
        height: 360px;
        width: 90%;
        margin-bottom: 15px;
    }

    .member-front, .member-back {
        height: 360px;
        width: 90%;
        position: absolute;
        overflow: hidden;
        backface-visibility: hidden;
        transition: transform .6s;
        border-radius: 10px;
        box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12);
    }

    .member-front-top {
        background-image: linear-gradient(to right, #2b5876 0%, #4e4376 51%, #2b5876 100%);
        height: 120px;
        border-radius: 10px 10px 0 0;
    }

    .member-back-top {
        background-image: linear-gradient(to right, #2b5876 0%, #4e4376 51%, #2b5876 100%);
        color: #f8f8f8;
        height: 110px;
        border-radius: 10px 10px 0 0;
        border-bottom: 1px solid #f8f8f8;
    }

    .member-front-mid img {
        top: 25px;
        position: absolute;
        left: calc(50% - 60px);
        box-shadow: 0 15px 20px rgba(0, 0, 0, 0.5);
    }

    .member-img {
        width: 135px;
        height: 135px;
        border-radius: 50%;
    }

    .member-front-mid {
        padding: 55px 10px 20px 0;
        height: 180px;
        background-color: #efefef;
    }

    .member-back-mid {
        padding: 10px 10px 10px 0;
        height: 180px;
        background-color: #efefef;
    }

    .member-front-bottom {
        height: 70px;
        color: white;
        font-size: 25px;
        margin-top: 15px;
        line-height: 25px;
    }

    .member-back-bottom {
        height: 70px;
        color: white;
        font-size: 25px;
        margin-top: 10px;
        line-height: 25px;
    }

    .member-container:hover {
        cursor: pointer;
        transform: rotateY(0deg);
    }

    .member-front {
        background-color: #262626;
        transform: perspective(600px) rotateY(0deg);
    }

    .member-back {
        background-color: #262626;
        transform: perspective(600px) rotateY(180deg);
    }

    .member-container:hover > .member-front {
        transform: perspective(600px) rotateY(-180deg);
    }

    .member-container:hover > .member-back {
        transform: perspective(600px) rotateY(0deg);
    }

    .member-back-top p {
        padding: 20px 15px 15px 15px;
    }

    .member-front-mid, .member-back-mid h3 {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 25px;
        font-weight: 500;
        color: black;
    }

    .member-front-mid, .member-back-mid h5 {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 17px;
        color: #262626;
    }


    /**Toggle Card*/

    .card {
        width: 100%;
        height: 360px;
        position: relative;
        overflow: hidden;
    }

    .card img {
        width: 100%;
        height: 360px;
        background-size: cover;
    }

    input,
    .toggle {
        width: 50px;
        height: 50px;
        position: absolute;
        bottom: 18px;
        right: 18px;
        z-index: 2;
    }

    input {
        opacity: 0;
    }

    .toggle {
        pointer-events: none;
        background: #f8f8f8;
        border-radius: 50%;
        line-height: 40px;
        text-align: center;
        font-size: 36px;
        box-sizing: border-box;
        /*box-shadow: inset 10 0 10 10px #00b5c3;*/
        transition: .5s;
    }

    input:checked ~ .toggle {
        box-shadow: 0 0 0 360px #1d77a3;
        transform: rotate(225deg);
    }

    .imgbx,
    .detail {
        position: absolute;
        top: 0;
        left: 0;
    }

    .detail {
        padding: 20px;
        color: #f8f8f8;
        /*background: #262626;*/
        z-index: 3;
        opacity: 0;
    }

    input:checked ~ .detail {
        opacity: 1;
        transition-delay: .5s;
    }


</style>

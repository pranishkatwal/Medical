<template>
    <div>

        <div class="notice-section">
            <div class="container">
                <div class="row mt-5">
                    <div class="mb-2">
                        <h2 class="title-top">Recent News and Notices</h2>
                        <hr class="bg-base-color separator-line">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <!--<div class="col-md-5">
                        <div class="row mb-5">
                            <div class="form col-8">
                                <div class="input-group">
                                    <input type="text" class="form-control"/>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-info">Go</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <nav class="navigation col-8">
                                <ul class="mainmenu">
                                    <li style="border-bottom: 1px solid black;"><a href="">Type of News<span><i
                                        class="fas fa-plus-circle float-right"></i></span></a>
                                        <ul class="submenu">
                                            <li><a href="">New Release</a></li>
                                            <li><a href="">Reasearch</a></li>
                                            <li><a href="">Holidays</a></li>
                                            <li><a href="">Important Notices</a></li>
                                        </ul>
                                    </li>
                                    <li style="border-bottom: 1px solid black;"><a href="">Publication Date <span><i
                                        class="fas fa-plus-circle float-right"></i></span></a>
                                        <ul class="submenu">
                                            <li><a href="">Today</a></li>
                                            <li><a href="">This Week</a></li>
                                            <li><a href="">This Month</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="row">
                            Calander
                        </div>
                    </div>-->
                    <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                        <div class="upcoming-event" v-for="notices in notice">
                            <div class="row">
                                <div class="col-md-5 upcoming-event-date" style="background-size: cover">
                                    <img :src="notices.photo" alt="Notices Photos"/>
                                </div>
                                <div class="col-md-7 p-2">
                                    <h3 class="text-center">{{notices.title}}</h3>
                                    <div class="row">
                                        <p class="col-lg-6 col-md-6 col-sm-12 mx-2" style="font-size: 17px;">
                                            <i class="fas fa-calendar-alt"></i><span> {{notices.date}}</span>
                                        </p>
                                    </div>
                                    <p class="limited-text">{{notices.post}}</p>
                                    <button class="btn btn-dark btn-event" @click="fetchDetail(notices.id)">
                                        <a href="/noticedetails">Read More</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--<div class="upcoming-event">
                            <div class="row">
                                <div class="col-md-5 upcoming-event-date" style="background-size: cover">
                                    <img src="images/course_1.jpg"/>
                                </div>
                                <div class="col-md-7 p-2">
                                    <h3 class="text-center">Notice Title</h3>
                                    <div class="row">
                                        <p class="col-lg-6 col-md-6 col-sm-12 mx-2" style="font-size: 17px;">
                                            <i class="fas fa-calendar-alt"></i><span> Notice Date</span>
                                        </p>
                                    </div>
                                    <p class="limited-text">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Aliquid animi
                                        laudantium quaerat qui quisquam repudiandae. Ab accusamus adipisci
                                        animi, asperiores doloribus eaque et, explicabo facere libero
                                        numquam
                                        quaerat reiciendis totam.</p>
                                    <button class="btn btn-dark btn-event">
                                        <a href="/news/eventdetail">View Details</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="upcoming-event">
                            <div class="row">
                                <div class="col-md-5 upcoming-event-date" style="background-size: cover">
                                    <img src="images/course_1.jpg"/>
                                </div>
                                <div class="col-md-7 p-2">
                                    <h3 class="text-center">Notice Title</h3>
                                    <div class="row">
                                        <p class="col-lg-6 col-md-6 col-sm-12 mx-2" style="font-size: 17px;">
                                            <i class="fas fa-calendar-alt"></i><span> Notice Date</span>
                                        </p>
                                    </div>
                                    <p class="limited-text">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Aliquid animi
                                        laudantium quaerat qui quisquam repudiandae. Ab accusamus adipisci
                                        animi, asperiores doloribus eaque et, explicabo facere libero
                                        numquam
                                        quaerat reiciendis totam.</p>
                                    <button class="btn btn-dark btn-event">
                                        <a href="/news/eventdetail">View Details</a>
                                    </button>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
        <fotter-component></fotter-component>
    </div>

</template>

<script>
    import fotterComponent from "../fotterComponent";

    export default {
        name: "notices",
        data: function () {
            return {

                notice:[]
            }
        },
        mounted() {
            axios.get('/api/fetchWebsiteNotices', {}).then(res => {
                this.notice = res.data.notice;
            });
        },

        component: {
            fotterComponent
        },


    }
</script>

<style scoped>
    .notice-section {
        padding: 50px 0 50px 0;
        background-color: #f8f8f8;
    }

    html, body {
        font-family: Arial, Helvetica, sans-serif;
    }

    /*Notices*/
    .upcoming-event {
        padding-top: 15px;
        padding-bottom: 15px;
        margin-bottom: 40px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, .3);
        -webkit-transition: all 0.5s ease-out;
    }

    .upcoming-event-date img {
        height: 225px;
        width: 100%;
        margin-left: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, .3);
    }

    .upcoming-event-date {
        /*background-color: #262626;*/
        /*animation: fadeIn 3s ease-in;*/
        color: #dddddd;
        font-size: 45px;
        line-height: 50px;
        text-align: center;
        font-family: 'Berkshire Swash', cursive;
        /*            opacity: 1.0;
                    transition: opacity 2s ease-out;
                    -moz-transition: opacity 2s ease-out;
                    -webkit-transition: opacity 2s ease-out;*/
    }

    .upcoming-event:hover {
        cursor: pointer;
        background-color: rgba(186, 186, 186, 0.3);
    }

    /*Event Section Ends*/

    .btn-event a {
        color: white;
        text-decoration: none;
    }

    .limited-text {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }
</style>

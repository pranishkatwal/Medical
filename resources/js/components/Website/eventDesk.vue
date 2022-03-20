<template>
    <div>
        <section class="event-desk">

            <div class="container">
                <!---Recent News and Events--->
                <div class="row d-flex justify-content-center">
                    <div class="mb-2 lax" data-lax-preset_large="leftToRight-.02 fadeInOut">
                        <h2 class="title-top">Recent News and Events</h2>
                        <hr class="bg-base-color separator-line">
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mt-3 px-3"
                         v-for="newsEvents in newsEventsData">
                        <div class="recent-events">
                            <div class="image-section">
                                <img class="img-fluid" :src="newsEvents.photo"
                                     alt="Recent News and Event Image">
                            </div>
                            <div class="pr-3 pl-3 pt-3">
                                <h3 class="text-left">{{newsEvents.title}}</h3>
                                <p class="limited-text text-justify">{{newsEvents.post}}</p>
                                <div class="row">
                                    <p class="col-md-6 col-6 align-self-center">
                                        <i class="fas fa-calendar-alt"></i><span> {{newsEvents.date}}</span>
                                    </p>
                                    <p class="col-md-6 col-6">
                                        <!--<i class="fas fas fa-map-marker-alt"></i><span> Own School</span>-->
                                        <a class="read-more" href="/noticedetails">
                                            Read More
                                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"></path></svg>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="text-center pb-3">

                            </div>
                        </div>
                    </div>
                    <!--<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mt-3">
                        <div class="recent-events">
                            <div class="image-section"  style="height:250px">
                                <img style="height:250px" class="img-fluid" src="images/teacher_1.jpg" alt="Card image cap">
                            </div>
                            <div class="pr-3 pl-3 pt-3">
                                <h3 class="text-center">Recent News Title</h3>
                                <div class="row">
                                    <p class="col-md-6 col-sm-12">
                                        <i class="fas fa-calendar-alt"></i><span> Event Date</span>
                                    </p>
                                    <p class="col-md-6 col-sm-12">
                                        <i class="fas fas fa-map-marker-alt"></i><span> Event Location</span>
                                    </p>
                                </div>
                                <p class="limited-text text-justify">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing
                                    elit. Aliquid animi
                                    laudantium quaerat qui quisquam repudiandae. Ab accusamus adipisci
                                    animi, asperiores doloribus eaque et, explicabo facere libero
                                    numquam
                                    quaerat reiciendis totam.</p>
                            </div>
                            <div class="text-center pb-3">
                                <button class="btn btn-event border">
                                    Read More
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mt-3">
                        <div class="recent-events">
                            <div class="image-section">
                                <img class="img-fluid" src="images/teacher_1.jpg" alt="Card image cap">
                            </div>
                            <div class="pr-3 pl-3 pt-3">
                                <h3 class="text-center">Recent News Title</h3>
                                <div class="row">
                                    <p class="col-md-6 col-sm-12">
                                        <i class="fas fa-calendar-alt"></i><span> Event Date</span>
                                    </p>
                                    <p class="col-md-6 col-sm-12">
                                        <i class="fas fas fa-map-marker-alt"></i><span> Event Location</span>
                                    </p>
                                </div>
                                <p class="limited-text text-justify">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing
                                    elit. Aliquid animi
                                    laudantium quaerat qui quisquam repudiandae. Ab accusamus adipisci
                                    animi, asperiores doloribus eaque et, explicabo facere libero
                                    numquam
                                    quaerat reiciendis totam.</p>
                            </div>
                            <div class="text-center pb-3">
                                <button class="btn btn-event border">
                                    Read More
                                </button>
                            </div>
                        </div>
                    </div>-->
                </div>
                <div class="row d-flex justify-content-center mt-3">
                    <div class="text-center p-3 lax" data-lax-preset="fadeIn-100">
                        <a class="btn btn-dark" href="/notices">
                            Visit Notices
                        </a>
                    </div>
                    <div class="text-center p-3 lax" data-lax-preset="fadeIn-100">
                        <a class="btn btn-dark" href="/notices">
                            Visit Upcoming Events
                        </a>
                    </div>
                </div>
                <!--<div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3"
                             v-for="newsEvents in newsEventsData">
                            <div class="recent-events-2" style="">
                                <div class="pr-3 pl-3 pt-3">
                                    <h3 class="text-left">{{newsEvents.title}}</h3>
                                </div>
                                <div class="text-center pb-3">
                                    <a class="" href="">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-2">
                            <a class="btn btn-outline-dark border" href="">
                                Visit Recent News
                            </a>
                        </div>
                    </div>
                </div>-->
            </div>

        </section>
    </div>
</template>

<script>
    export default {
        name: "eventDesk",
        data: function () {
            return {
                newsEventsData: [],
            }
        },
        mounted() {
            axios.get('/api/getRecentNewsEvents', {}).then(response => {
                this.newsEventsData = response.data.newsEvents;
            });
        }
    }
</script>

<style scoped>
    .event-desk {
        padding: 50px 0 50px 0;
        background: #ffffff;
    }
    /*.btn-event{
        transition: 1s;
    }
    .recent-events:hover .btn-event{
        background: #cd2541;
        color: #ffffff !important;
    }*/

    /*.recent-events-2{
        border-bottom: 1px solid rgba(0, 0, 0, .8) !important
    }*/
    .limited-text {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }

    a.read-more{
        text-decoration: none;
        -webkit-transition: color .15s ease-in-out;
        -o-transition: color .15s ease-in-out;
        transition: color .15s ease-in-out;
    }
    a.read-more svg {
        margin-left: .25em;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
        width: auto;
        /*fill: #1c1c1c;
        stroke: #1c1c1c;*/
        -webkit-transition: -webkit-transform .15s ease-out;
        transition: -webkit-transform .15s ease-out;
        -o-transition: transform .15s ease-out;
        transition: transform .15s ease-out;
        transition: transform .15s ease-out,-webkit-transform .15s ease-out;
    }
    a.read-more:hover svg {
        -webkit-transform: translateX(.25em);
        -ms-transform: translateX(.25em);
        transform: translateX(.25em);
    }
    /*-----Recent Events-----*/


    .recent-events .image-section {
        position: relative;
        margin: auto;
        overflow: hidden;
        width: auto;
        /*height: auto;*/
    }

    .recent-events {
        position: relative;
        overflow: hidden;
        width: 100% !important;
        border: 1px solid #e5e7e9;
    }
    /*.recent-events-2 {
        position: relative;
        overflow: hidden;
        width: 100% !important;
    }*/

    .image-section {
        height: 200px
    }

    .image-section img {
        max-width: 100%;
        transition: all 0.5s;
        background-size: cover;
        display: block;
        width: 100%;
        height: 200px;
        transform: scale(1);
    }

    .image-section:hover img {
        cursor: pointer;
        transform: scale(1.1);
        opacity: 0.9;
    }

    /*---Upcoming Events--*/

    /*.upcoming-events {
        position: relative;
        overflow: hidden;
        width: 100% !important;
        border-top: 1px solid #e5e7e9;
        border-bottom: 1px solid #e5e7e9;
    }

    .upcoming-events.image-part {
        padding-right: 0px;
        padding-left: 0px;
    }

    .upcoming-events img {
        max-width: 100%;
        transition: all 0.5s;
        background-size: cover;
        display: block;
        width: 100%;
        height: 100%;
        transform: scale(1);
    }*/


</style>

<template>
    <div>
        <section class="upcoming-events-desk">
            <div class="container">
                <!---Upcoming Events--->
                <div class="row">
                    <div class="mb-2">
                        <h2 class="title-top">Upcoming Events</h2>
                        <hr class="bg-base-color separator-line">
                    </div>
                </div>
                <div v-for="events in event" class="row justify-content-center mb-3">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-10 col-11 upcoming-events image-part">
                        <img class="img-fluid" :src="events.photo" alt="Upcoming Event Image">
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-8 col-sm-10 col-11 upcoming-events">
                        <div class="pt-3">
                            <h3 class="text-left">{{events.title}}</h3>
                            <div class="row">
                                <p class="col-md-6 col-sm-12">
                                    <i class="fas fa-calendar-alt"></i><span> {{events.date}}</span>
                                </p>
                                <p class="col-md-6 col-sm-12">
                                    <i class="fas fas fa-map-marker-alt"></i><span> Own School</span>
                                </p>
                            </div>
                            <p class="limited-text text-justify">
                                {{events.post}}
                            </p>
                        </div>
                        <div class="text-left pb-3">
                            <a href="/noticedetails" class="btn btn-event border">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <!--<div class="row justify-content-center mb-3">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-10 col-11 upcoming-events image-part">
                        <img class="img-fluid" src="images/teacher_1.jpg" alt="Upcoming Event Image">
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-8 col-sm-10 col-11 upcoming-events">
                        <div class="pt-3">
                            <h3 class="text-left">Upcoming News Title</h3>
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
                        <div class="text-left pb-3">
                            <button class="btn btn-event border">
                                Read More
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-3">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-10 col-11 upcoming-events image-part">
                        <img class="img-fluid" src="images/teacher_1.jpg" alt="Upcoming Event Image">
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-8 col-sm-10 col-11 upcoming-events">
                        <div class="pt-3">
                            <h3 class="text-left">Upcoming News Title</h3>
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
                        <div class="text-left pb-3">
                            <button class="btn btn-event border">
                                Read More
                            </button>
                        </div>
                    </div>
                </div>-->
            </div>
            <fotter-component></fotter-component>
        </section>
    </div>
</template>

<script>
    import fotterComponent from "../fotterComponent";

    export default {
        name: "upcomingevents",
        component: {
            fotterComponent
        },
        data: function () {
            return {
                event: []
            }
        },
        mounted() {
            axios.get('/api/fetchWebsiteEvents', {}).then(response => {
                this.event = response.data.event;
                console.log(this.event);

            });
        },


    }
</script>

<style scoped>
    .upcoming-events-desk{
        padding: 50px 0 50px 0;
        background: #f8f8f8;
    }
    .limited-text {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }

    /*---Upcoming Events--*/

    .upcoming-events {
        position: relative;
        overflow: hidden;
        width: 100% !important;
        border-top: 1px solid #e5e7e9;
        border-bottom: 1px solid #e5e7e9;
    }

    .upcoming-events.image-part {
        padding-right: 0px;
        padding-left: 0px;
        height: 250px;
    }

    .upcoming-events img {
        max-width: 100%;
        transition: all 0.5s;
        background-size: cover;
        display: block;
        width: 100%;
        height: 250px;
        transform: scale(1);
    }

</style>

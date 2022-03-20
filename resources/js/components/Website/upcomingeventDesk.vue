<template>
    <div class="event-desk">
        <div class="container">
            <div class="row">
                <div class="mb-2">
                    <h2 class="title-top">Upcoming Events</h2>
                    <hr class="bg-base-color separator-line">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mt-3" v-for="(event, key) in events">
                    <div class="recent-events">
                        <div class="image-section">
                            <img class="img-fluid" alt="Recent News and Event Image">
                        </div>
                        <div class="pr-3 pl-3 pt-3">
                            <h3 class="text-center">{{event.title}}</h3>
                            <div class="row">
                                <p class="col-md-6 col-sm-12">
                                    <i class="fas fa-calendar-alt"></i><span> {{event.date}}</span>
                                </p>
                                <p class="col-md-6 col-sm-12">
                                    <i class="fas fas fa-map-marker-alt"></i><span> Own School</span>
                                </p>
                            </div>
                            <p class="limited-text text-justify"> {{event.content}}</p>
                        </div>
                        <div class="text-center pb-3">
                            <a :href="'/event/'+event.id" class="btn btn-event border">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mt-3">
                    <div class="recent-events">
                        <div class="image-section">
                            <img class="img-fluid" src="images/teacher_1.jpg" alt="Card image cap">
                        </div>
                        <div class="pr-3 pl-3 pt-3">
                            <h3 class="text-center">Upcoming News Title</h3>
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
                            <h3 class="text-center">Upcoming News Title</h3>
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
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "upcomingeventDesk",
        data: function () {
            return {
                events: {},

            }
        },
        computed: {

            getEditLink(id) {
                return window.location.href = '/edit' + id;
            }

        },

        mounted() {

            axios.get('/api/upcoming/events', {}).then(response => {
                this.events = response.data.event;
                console.log(this.events);

            });

        }
    }
</script>

<style scoped>
    .event-desk {
        padding-top: 20px;
        padding-bottom: 50px;
        background: #ffffff;
    }
    .limited-text {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }

    /*-----Recent Events-----*/


    .recent-events .image-section {
        position: relative;
        margin: auto;
        overflow: hidden;
        width: auto;
        height: auto;
    }

    .recent-events {
        position: relative;
        overflow: hidden;
        width: 100% !important;
        border: 1px solid #e5e7e9;
    }

    .image-section img {
        max-width: 100%;
        transition: all 0.5s;
        background-size: cover;
        display: block;
        width: 100%;
        height: auto;
        transform: scale(1);
    }

    .image-section:hover img {
        cursor: pointer;
        transform: scale(1.15);
        opacity: 0.9;
    }
</style>

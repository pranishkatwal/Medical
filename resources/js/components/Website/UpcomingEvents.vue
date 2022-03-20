<template>

        <div class="col-md-12">
            <div v-for="(event, key) in events" class="upcoming-event">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 upcoming-event-date">
                                <p>{{event.date.substr(6,9)}}</p>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <p class="col-md-6 col-sm-12">
                                        <i class="fas fa-calendar-alt"></i><span> EventE Date</span>
                                        <span> {{event.date}}</span>
                                    </p>
                                    <p class="col-md-6 col-sm-12">
                                        <i class="fas fas fa-map-marker-alt"></i><span> Own School</span>
                                    </p>
                                </div>
                                <h3>{{event.title}}</h3>
                                <p class="limited-text">{{event.post}}</p>
                                <a :href="'/event/'+event.id" class="btn btn-outline-dark btn-event">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</template>

<script>
    export default {
        name: "UpcomingEvents",

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

</style>

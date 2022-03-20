<template>
    <div id="app">
        <services-desk></services-desk>
        <!--<parallax-component></parallax-component>-->
        <message-desk></message-desk>
        <event-desk></event-desk>
        <!--<upcoming-event-desk></upcoming-event-desk>-->
        <div class="container-fluid" style="background-color: #fafafa; padding: 50px 0 100px 0;">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <testinomials-desk></testinomials-desk>
                </div>
                <div class="col-lg-6 col-md-12">
                    <gallery-desk></gallery-desk>
                </div>
            </div>
        </div>
        <!--<board-members></board-members>-->
        <founding-members></founding-members>
        <fotter-component></fotter-component>
    </div>
</template>

<script>
    import servicesDesk from "./servicesDesk";
    import messageDesk from "./messageDesk";
    import eventDesk from "./eventDesk";
    import upcomingEvents from './upcomingeventDesk'
    import testinomials from "./testinomials";
    import gallery from "./gallery";
    import foundingMembers from "./foundingMembers";
    import fotterComponent from "./fotterComponent";

    export default {
        name: "Home",
        components: {
            servicesDesk,
            messageDesk,
            eventDesk,
            upcomingEvents,
            testinomials,
            gallery,
            foundingMembers,
            fotterComponent
        }
    }
</script>

<style scoped>

</style>

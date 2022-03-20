<template>
    <div class="event-detail-desk">
        <!-- Page Content -->
        <div class="container">

            <!-- Portfolio Item Heading -->
            <h1 class="my-4">Event Title <small>Sub Title</small>
            </h1>

            <!-- Portfolio Item Row -->
            <div class="row">
                <div class="col-md-7">
                    <img class="img-fluid" src="images/milestones_background.jpg" alt="">
                </div>

                <div class="col-md-5">
                    <h3 class="my-3">Event Description</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida
                        pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus.
                        Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                    <h3 class="my-3">Event Extra Details</h3>
                    <ul>
                        <li>Lorem Ipsum</li>
                        <li>Dolor Sit Amet</li>
                        <li>Consectetur</li>
                        <li>Adipiscing Elit</li>
                    </ul>
                </div>
                <div class="row">
                    <p class="my-3 mx-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida
                        pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus.
                        Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                </div>
                <!--Multiple Images-->
                <div class="row">
                    <div class="col-lg-4 col-xl-4 col-md-6 col-sm-12">
                        <img class="img-fluid" src="images/milestones_background.jpg" alt="" style="width: 100%; height: 300px;">
                    </div>
                    <div class="col-lg-4 col-xl-4 col-md-6 col-sm-12">
                        <img class="img-fluid" src="images/course_1.jpg" alt=""  style="width: 100%; height: 300px;">
                    </div>
                    <div class="col-lg-4 col-xl-4 col-md-6 col-sm-12">
                        <img class="img-fluid" src="images/comment_1.jpg" alt=""  style="width: 100%; height: 300px;">
                    </div>
                </div>

            </div>
            <!-- /.row -->

            <!-- Related Projects Row -->
            <h3 class="my-4">Recent Events</h3>

            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="#">
                        <img class="img-fluid" src="images/milestones_background.jpg" alt="">
                    </a>
                    <div class="text-center pt-2 pb-2 bg-white">
                        <h4>Event Title</h4>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="#">
                        <img class="img-fluid" src="images/milestones_background.jpg" alt="">
                    </a>
                    <div class="text-center pt-2 pb-2 bg-white">
                        <h4>Event Title</h4>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="#">
                        <img class="img-fluid" src="images/milestones_background.jpg" alt="">
                    </a>
                    <div class="text-center pt-2 pb-2 bg-white">
                        <h4>Event Title</h4>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="#">
                        <img class="img-fluid" src="images/milestones_background.jpg" alt="">
                    </a>
                    <div class="text-center pt-2 pb-2 bg-white">
                        <h4>Event Title</h4>
                    </div>
                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
    </div>
</template>

<script>
    export default {
        name: "eventDetails"
    }
</script>

<style scoped>
    .event-detail-desk{
        padding: 50px 0 50px 0;
        background: #f8f8f8;
    }
</style>

<template>
    <div class="">
        <!---Upcoming Events--->
        <div class="container">
            <div class="row mt-5">
                <div class="mb-2">
                    <h2 class="title-top">Blogs</h2>
                    <hr class="bg-base-color separator-line">
                </div>
            </div>
            <!--<div class="row">
                <div class="col-md-6 ">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10 col-11  upcoming-events image-part">
                            <img class="img-fluid" src="images/teacher_1.jpg" alt="Blog Title Image">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10 col-11 mr-2  upcoming-events">
                            <div class="pt-3">
                                <h3 class="text-left">Blog Title</h3>
                                <div class="row">
                                    <p class="col-md-6 col-sm-12">
                                        <i class="fas fas fa-user-alt"></i><span> Blog By</span>
                                    </p>
                                    <p class="col-md-6 col-sm-12">
                                        <i class="fas fa-calendar-alt"></i><span> Blog Publish Date</span>
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
                            <div class="text-left">
                                <button class="btn btn-event border">
                                    View Details
                                </button>
                            </div>
                            <div class="text-left pt-3">
                                <p> Tags....</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10 col-11 ml-2 upcoming-events image-part">
                            <img class="img-fluid" src="images/teacher_1.jpg" alt="Blog Title Image">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10 col-11 upcoming-events">
                            <div class="pt-3">
                                <h3 class="text-left">Blog Title</h3>
                                <div class="row">
                                    <p class="col-md-6 col-sm-12">
                                        <i class="fas fas fa-user-alt"></i><span> Blog By</span>
                                    </p>
                                    <p class="col-md-6 col-sm-12">
                                        <i class="fas fa-calendar-alt"></i><span> Blog Publish Date</span>
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
                            <div class="text-left">
                                <button class="btn btn-event border">
                                    View Details
                                </button>
                            </div>
                            <div class="text-left pt-3">
                                <p> Tags....</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->

            <div v-for="blogs in blog" class=" row justify-content-center mb-3">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-10 col-11 upcoming-events image-part">
                    <img class="img-fluid" :src="blogs.single_blog_pic" alt="Blog Title Image">
                </div>
                <div class="col-xl-7 col-lg-7 col-md-8 col-sm-10 col-11 upcoming-events">
                    <div class="pt-3">
                        <h3 class="text-left">{{blogs.title}}</h3>
                        <div class="row">
                            <p class="col-md-6 col-sm-12">
                                <i class="fas fas fa-user-alt"></i><span> {{blogs.author}}</span>
                            </p>
                            <p class="col-md-6 col-sm-12">
                                <i class="fas fa-calendar-alt"></i><span> {{blogs.created_at}}</span>
                            </p>
                        </div>
                        <p class="limited-text text-justify">{{blogs.post}}</p>
                    </div>
                    <div class="text-left">
                        <button  @click="fetchDetail(blogs.id)"  class="btn btn-event border">
                            <a href="/blogdetails">View Details</a>
                        </button>
                    </div>
                    <div class="text-left pt-3">
                        <!--<p> Tags....</p>-->
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-10 col-11 upcoming-events image-part">
                    <img class="img-fluid" src="images/teacher_1.jpg" alt="Blog Title Image">
                </div>
                <div class="col-xl-7 col-lg-7 col-md-8 col-sm-10 col-11 upcoming-events">
                    <div class="pt-3">
                        <h3 class="text-left">Blog Title</h3>
                        <div class="row">
                            <p class="col-md-6 col-sm-12">
                                <i class="fas fas fa-user-alt"></i><span> Blog By</span>
                            </p>
                            <p class="col-md-6 col-sm-12">
                                <i class="fas fa-calendar-alt"></i><span> Blog Publish Date</span>
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
                    <div class="text-left">
                        <button class="btn btn-event border">
                            View Details
                        </button>
                    </div>
                    <div class="text-left pt-3">
                        <p> Tags....</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-10 col-11 upcoming-events image-part">
                    <img class="img-fluid" src="images/teacher_1.jpg" alt="Blog Title Image">
                </div>
                <div class="col-xl-7 col-lg-7 col-md-8 col-sm-10 col-11 upcoming-events">
                    <div class="pt-3">
                        <h3 class="text-left">Blog Title</h3>
                        <div class="row">
                            <p class="col-md-6 col-sm-12">
                                <i class="fas fas fa-user-alt"></i><span> Blog By</span>
                            </p>
                            <p class="col-md-6 col-sm-12">
                                <i class="fas fa-calendar-alt"></i><span> Blog Publish Date</span>
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
                    <div class="text-left">
                        <button class="btn btn-event border">
                            View Details
                        </button>
                    </div>
                    <div class="text-left pt-3">
                        <p> Tags....</p>
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
        name: "blog",
        component: {
            fotterComponent
        },
        data: function(){
            return{
                blog: []
            }
        },
        mounted(){
          axios.get('/api/fetchBlog', {}).then(resp=>{
              this.blog = resp.data.blog;
          });
        },

        methods:{
            fetchDetail: function(id){
                axios.post('/api/blogDetail', {
                    id:id}).then(resp=>{
                        alert();
                });

            }
        },

    }
</script>

<style scoped>

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
        height: 250px;
        padding-right: 0px;
        padding-left: 0px;
    }

    .upcoming-events img {
        height: 250px;
        max-width: 100%;
        transition: all 0.5s;
        background-size: cover;
        display: block;
        width: 100%;
        height: 100%;
        transform: scale(1);
    }
</style>

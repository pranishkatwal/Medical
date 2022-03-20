<template>
    <div class="blog-details">
        <div class="container">
            <!-- END HEADER -->
            <!-- Blog Post Section -->
            <section class="ptb ptb-xs-60">
                <div class="container">
                    <div class="row">
                        <!-- Post Bar -->
                        <div class="col-lg-9 col-md-12 col-sm-12 col-12 blog-post-hr post-section">
                            <div class="blog-post mb-30" v-for="blogs in blog">
                                <div class="post-meta"><span>{{blogs.author}}, </span>
                                    <!--<span> <i class="fas fa-comments"></i> 25,</span><span> <i
                                    class="fas fa-heart"></i> 57</span>-->
                                </div>
                                <div class="post-header">
                                    <h2>{{blogs.title}}</h2>
                                    <p><span class="event-calender blog-date">{{blogs.created_at}}</span></p>
                                </div>
                                <div class="post-media"><img :src="blogs.single_blog_pic"
                                    class="img-fluid" alt="Blog Title Image" style="width: 100%"></div>
                                <div class="post-entry">
                                    <p> {{blogs.post}} </p>
                                </div>
                            </div>
                            <hr/>
                        </div>
                        <!-- End Post Bar -->

                        <!--Multiple Blog Images-->
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
                        <!-- Tags -->
                        <div class="sidebar-widget mb-0">
                            <h4>Popular Tags</h4>
                            <ul class="widget-tag pt-15">
                                <i class="fas fa-tags"></i>
                                <li><a>Art</a></li>
                                <li><a>Business</a></li>
                                <li><a>Design</a></li>
                                <li><a>Graphic</a></li>
                                <li><a>fashion</a></li>
                                <li><a>Model</a></li>
                                <li><a>Photography</a></li>
                            </ul>
                        </div>
                    </div>


                </div>
            </section>
        </div>
        <!-- End Blog Post Section -->
    </div>
</template>

<script>
    export default {
        name: "blogDetails",
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
    }
</script>

<style scoped>
    .blog-details{
        padding: 50px 0 50px 0;
        background-color: #ffffff;
    }
    .post-meta {
        font-size: 15px;
    }

    .post-meta i {
        color: #ffb606;
    }

    .post-header h2 {
        font-size: 40px;
        font-weight: bolder;
        font-family: Popins;
        margin: 20px 0 15px;
    }

    .post-header p {
        font-size: 20px;
        font-family: "Noto Sans";
    }

    .post-media {
        height: 400px;
    }

    .post-media img {
        height: 400px;
        width: 100%;
    }

    .post-entry {
        font-size: 20px;
        font-family: Popins;
        padding: 20px 0 0 0;
        color: #717171;
    }

    .post-entry blockquote {
        font-size: 20px;
        color: #000000;
    }

    .post-entry h3 {
        font-size: 25px;
        font-weight: bold;
        color: #000000;
    }

    .widget-post img {
        width: 100px;
        height: 100px;

    }

    .sidebar-widget h4 {
        font-size: 25px;
        margin-top: 10px;
    }
    .sidebar-widget ul{
        display: inline-block;
        list-style: none;
    }
    .sidebar-widget ul li{

    }
    ul.widget-tag li{
        text-decoration: none;
        list-style: none;
        display: inline;
        margin-right: 15px;
    }
    ul.widget-tag i{
        color: #ffB606;
    }
</style>

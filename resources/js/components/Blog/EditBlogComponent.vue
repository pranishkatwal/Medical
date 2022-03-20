<template>
    <div class="row">

        <div v-for="(blog, key) in blogs" class="col-md-3  mt-3 border bg-gradient-gray-dark ">
            <div class="col-md-12 text-center">
                {{blog.title}}
            </div>
            <div class="col-md-12">
                <img :src="blog.single_blog_pic" alt="" class=" img-fluid img-thumbnail">
            </div>
            <div class="col-md-12">
                <span class="text-left" style="font-size: 10px"> {{blog.created_at}} </span>
            </div>
            <div class="col-md-12">
                <span style="font-size: 10px"> {{blog.post.substring(0, 60)}} </span>
                <button @click="editBlog(blog.id)"
                        data-target=".bd-example-modal-lg"
                        data-toggle="modal"
                        class="btn  btn-warning btn-sm">Edit
                </button>
                <button class="btn btn-danger btn-sm">Delete</button>
            </div>
        </div>
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
             aria-labelledby="myLargeModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        Edit Blog
                        <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body ">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-9">
                                    <img v-if="this.blogDetails.single_blog_pic"
                                         :src="this.blogDetails.single_blog_pic"
                                         class="img-fluid img-thumbnail"
                                         alt="">
                                </div>
                                <div class="col-md-3">
                                    <input type="file" ref="imageFile" @change="selectSingleBlogPic" accept="image/*"
                                           class="ml-3 form-control form-control-sm">
                                </div>

                                <div class="col-md-12 row mt-3">
                                    <div class="c0l-md-3">
                                        <label class="ml-3"> Title: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" v-model="blogDetails.title"
                                               class="form-control form-control-sm col-sm-12">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="ml-3"> Author: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" v-model="blogDetails.author"
                                               class="form-control form-control-sm col-sm-12">
                                    </div>
                                </div>

                                <div class="col-md-12 mt-3">
                                    <label>Post</label>
                                    <textarea name="" id="" v-model="blogDetails.post" class="col-md-12"
                                              rows="7"></textarea>
                                </div>

                                <div class="col-md-12 row mt-3">
                                    <div class="col-md-12">
                                        <h2 class="text-center text-bold">Images:</h2>
                                    </div>

                                    <div v-for="(blogImage, key) in blogImages" class="col-md-3 mt-2">
                                        <img :src="blogImage.blog_photo" alt="" class="img-fluid img-thumbnail">
                                        <button @click="deleteBlogImages(blogImage.id, key)" class="text-danger"><i
                                            class="fas fa-trash"></i></button>
                                    </div>
                                </div>

                                <div class="col-md-12  row mt-3">
                                    <div class="col-md-2">
                                        <input type="file" ref="multipleImage" multiple @change="selectMultipleImage"
                                               class="mt-3">

                                        <div v-for="(image , key) in multipleImage" class="col-md-3">
                                            <img :src="image.name" class="img-fluid" alt="">

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>
            </div>
        </div>

    </div>


</template>

<script>
    export default {
        name: "EditBlogComponent",
        data: function () {
            return {
                blogs: {},
                blogDetails: {},
                blogImages: {},
                id: '',
                multipleImage: [],

            }
        },

        mounted() {
            axios.get('/api/view/Blog', {}).then(response => {
                this.blogs = response.data.blog;
                console.log(this.blogs);
            });
        },


        methods: {
            editBlog: function (id) {
                axios.post('/api/view/singleBlog', {
                    id: id
                }).then(response => {
                    this.blogDetails = response.data.blog;
                    this.blogImages = response.data.blogImages;
                });


            },

            /*              DELETE BLOG MULTIPLE IMAGES*/
            deleteBlogImages: function (id, key) {
                axios.post('/api/blog/image/delete', {
                    id: id
                }).then(response => {
                    console.log(response.data);
                    alert(response.data.msg);
                    this.$delete(this.blogImages, key);
                });
            },


            /*            CHANGE BLOG SINGLE PIC*/

            selectSingleBlogPic: function (e) {
                var input = e.target;
                if (input.files && input.files[0]) {
                    // create a new FileReader to read this image and convert to base64 format
                    var reader = new FileReader();
                    // Define a callback function to run, when FileReader finishes its job
                    reader.onload = (e) => {
                        // Note: arrow function used here, so that "this.imageSelected" refers to the imageData of Vue component
                        // Read image as base64 and set to imageData
                        this.blogDetails.single_blog_pic = e.target.result;
                    };
                    // Start the reader job - read file as a data url (base64 format)
                    reader.readAsDataURL(input.files[0]);
                }
                this.saveSingleBlogPic();
            },

            /*            SAVE AJAX SINGLE BLOG PIC*/
            saveSingleBlogPic: function () {

                let formData = new FormData();
                formData.append('id', this.blogDetails.id);
                formData.append('photo', this.$refs.imageFile.files[0]);

                axios.post('/api/updateSingleBlogPic', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    },
                }).then(response => {
                    if (response.data.success) {
                        alert(response.data.success);
                    }

                    if (response.data.err) {
                        alert(response.data.err);
                    }
                });
            },


            /* SELECT MULTIPLE BLOGS IMAGES   */

            selectMultipleImage: function (e) {
                var selectedFiles = this.$refs.multipleImage.files;

                for (var i = 0; i < selectedFiles.length; i++) {
                    this.multipleImage.push(selectedFiles[i]);
                }
                for (let i = 0; i < this.multipleImage.length; i++) {
                    let reader = new FileReader();
                    reader.onload = (e) => {
                        this.$refs['preview' + parseInt(i)][0].src = reader.result;
                    }
                    reader.readAsDataURL(this.multipleImage[i]);
                }

            }
        }
    }
</script>

<style scoped>

</style>

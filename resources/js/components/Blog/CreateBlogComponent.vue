<template>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="text-center">Add Posts</h5>
            </div>

            <div class="card-body">
                <div class=" col-md-12">
                    <label> Title </label>
                    <input type="text" v-model="title" placeholder="Title" class="form-control  ">
                    <span v-if="titleError" class="text-danger">{{titleError}}</span>
                </div>
                <div class="col-md-12 mt-2">
                    <label>Post Content </label>
                    <textarea v-model="content" placeholder="Content" class="form-control form-control-sm" cols="10"
                              rows="8"></textarea>
                    <span v-if="contentError" class="text-danger">{{contentError}}</span>

                </div>
                <div class="col-md-12 mt-2">
                    <label>Author</label>
                    <input type="text" v-model="author" aria-placeholder="Title" class="form-control">
                    <span v-if="authorError" class="text-danger">{{authorError}}</span>
                </div>

                <div class="col-md-12">
                    <input type="file" ref="file" multiple @change="onChange"/>
                    <div id="preview">
                        <img v-if="item.imageUrl" :src="item.imageUrl"/>
                    </div>
                    <!--  <el-upload action="/" list-type="picture-card"
                                 :on-change="updateImage"
                                 :on-preview="pictureCardPreview"
                                 :auto-upload="false">
                          <i class="el-icon-plus"></i>
                      </el-upload>
                      <el-dialog :visible.sync="dialogVisible">
                          <img :src="diablogImageUrl" width="100%" alt="">
                      </el-dialog>
  -->
                </div>

                <div class="col-md-12">
                    <button class="btn btn-success btn-sm" @click="savePost">Save Post</button>
                </div>

            </div>
        </div>

    </div>

</template>

<script>
    export default {
        name: "CreateBlogComponent",
        mounted() {
            console.log('Success');
        },

        data: function () {
            return {
                title: null,
                author: null,
                content: null,
                item: {
                    image: null,
                    imageUrl: null,
                },
                file: '',
                status: false,
                contentError: '',
                titleError: '',
                authorError: '',
            }
        },
        methods: {
            onChange(e) {
                this.file = this.$refs.file.files;
                console.log(this.file);
            },

            savePost() {
                if (this.validate()) {
                    let formData = new FormData();

                    formData.append('title', this.title);
                    formData.append('post', this.content);
                    formData.append('author', this.author);
                    /*  for (var i = 0; i < this.file.length; i++) {
                          let file = this.file[i];
                          formData.append('file[' + i + ']', file);
                      }*/

                    $.each(this.file, function (k, v) {
                        formData.append('image[' + k + ']', v);
                    });


                    console.log(formData);

                    axios.post('/api/addBlog',
                        formData,
                        {
                            headers: {
                                'Content-Type': 'multipart/form-data'
                            }
                        }).then(response => {
                        console.log('success');
                        alert(response.data.msg);
                        this.title = " ";
                        this.content = " ";
                        this.author = " ";
                        this.file = "";
                    })
                }
            },
            validate() {
                if (!this.title) {
                    this.titleError = 'Title Field Cannot be Empty';
                    return false;
                } else if (!this.content) {
                    this.contentError = 'Content Field Cannot be Empty';
                    return false;
                } else if (!this.author) {
                    this.authorError = 'Author Field Cannot be Empty';
                    return false;
                }
                return true;

            }
        }

    }


</script>

<style scoped>

</style>

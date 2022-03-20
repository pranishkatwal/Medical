<template>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header  bg-gradient-gray">
                <h5 class="text-center">Add Notice/Events</h5>
            </div>
            <div class="card-body row">
                <div class=" col-md-12">
                    <label> Title </label>
                    <input type="text" v-model="title" placeholder="Title" class="form-control  ">
                    <span v-if="titleError" class="text-danger">{{titleError}}</span>
                </div>

                <div class="col-md-6 mt-2">
                    <label>Select Date:</label>
                    <input type="date" class="form-control form-control-sm" required placeholder="Date" v-model="date">
                    <span v-if="dateError" class="text-danger">{{dateError}}</span>

                </div>

                <div class="col-md-4 offset-1 mt-3 row">
                    <div class="col-md-4">
                        <label for="one">Notice</label>
                        <input type="radio" id="one" value="0" v-model="is_notice">
                    </div>
                    <div class="col-md-3">
                        <label for="two">Events</label>
                        <input type="radio" id="two" value="1" v-model="is_notice">
                    </div>
                    <div v-if="noticeEventError" class="col-md-12 text-danger">
                        {{noticeEventError}}
                    </div>
                </div>

                <div class="col-md-12 mt-2">
                    <label> Content </label>
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
                date: '',
                is_notice: '',
                noticeEventError: '',
                dateError: '',
                validator: false,
            }
        },
        methods: {
            onChange(e) {
                this.file = this.$refs.file.files;
                console.log(this.file);
            },

            savePost() {
                this.validator = false;
                this.validate();
                if (this.validator) {
                    let formData = new FormData();
                    formData.append('title', this.title);
                    formData.append('post', this.content);
                    formData.append('author', this.author);
                    formData.append('date', this.date);
                    formData.append('is_notice', this.is_notice);
                    /*  for (var i = 0; i < this.file.length; i++) {
                          let file = this.file[i];
                          formData.append('file[' + i + ']', file);
                      }*/
                    $.each(this.file, function (k, v) {
                        formData.append('image[' + k + ']', v);
                    });

                    console.log(formData);

                    axios.post('/api/Notice',
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
                        this.author = " ";
                        this.file = "";
                    })
                }
            },
            validate() {
                if (!this.title) {
                    this.titleError = 'Title Field Cannot be Empty';
                    return false;
                } else if (this.title) {
                    this.titleError = '';
                } if (!this.date) {
                    this.dateError = 'Date Field Cannot be Empty';
                    return false;
                } else if (this.date) {
                    this.dateError = '';
                } if (!this.content) {
                    this.contentError = 'Content Field Cannot be Empty';
                    return false;
                } else if (this.content) {
                    this.contentError = '';
                } if (!this.is_notice) {
                    this.noticeEventError = 'Notice-Event Field Cannot be Empty *';
                    return false;
                } else if(this.is_notice){
                    this.noticeEventError = ''
                }
                return this.validator = true;
            }
        }

    }


</script>

<style scoped>

</style>

<template>
    <div class="col-md-7">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>SN:</th>
                <th>Name:</th>
                <th>Degree:</th>
                <th>Saying:</th>
                <th>photo:</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>
            <tr v-for="(teacher, key) in teachers">
                <td>{{++key}}</td>
                <td>{{teacher.teacher_name}}</td>
                <td>{{teacher.education_degree}}</td>
                <td>{{teacher.address}}.....</td>
                <td>
                    <img :src="teacher.teacher_photo" class="img-thumbnail w-50 h-15" alt="">
                </td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-light btn-sm dropdown-toggle" type="button"
                                id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <button @click="openEdit(key, teacher.id)" class="dropdown-item"
                                    data-target=".bd-example-modal-lg"
                                    data-toggle="modal">
                                <i class="fas fa-edit text-warning"></i>
                                &nbsp;Edit
                            </button>
                            <button type="button" class="dropdown-item" href="#"><i
                                class="fas fa-download"></i>&nbsp;Delete
                            </button>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>


            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                 aria-labelledby="myLargeModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            Edit Teacher
                            <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div v-if="successMessage" class="alert alert-success alert-dismissible fade show"
                                         role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="col-md-12 row">
                                    <div class="col-md-6">

                                        <label class="ml-3">Full Name:</label>
                                        <input type="text" v-model="obj.teacher_name"
                                               class="form-control form-control-sm ml-3">
                                        <span v-if="nameError" class="text-danger">{{nameError}}</span>
                                    </div>

                                    <div class="col-md-6">
                                        <div><label class="col-md-3 offset-2">Image</label></div>

                                        <div class="row justify-content-center">
                                            <img v-if="imageSelected" :src="imageSelected" alt=""
                                                 class="img-thumbnail w-50 text-center">
                                            <img v-if="!imageSelected" :src="obj.photo" alt=""
                                                 class="img-thumbnail w-50 text-center">

                                        </div>

                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label> Select Post:</label>
                                        <select v-model="post_name" class="form-control form-control-sm">
                                            <option :selected="obj.teacher_posts">{{obj.teacher_posts}}</option>
                                            <option v-for="(posts, key) in posts">{{posts.post_name}}</option>
                                        </select>
                                        <span v-if="post_nameError" class="text-danger">{{post_nameError}}</span>
                                    </div>

                                    <div class="col-md-4 mt-2">
                                        <label> Year's Active: </label>
                                        <input type="number" v-model="obj.years_active"
                                               class="form-control form-control-sm ml-3">
                                        <span v-if="yearsActiveError" class="text-danger">{{yearsActiveError}}</span>
                                    </div>


                                </div>

                                <div class="col-md-12 mt-3">
                                    <label>Saying</label>
                                    <textarea name="" id="" v-model="obj.saying" class="col-md-12" rows="7"></textarea>
                                    <span v-if="sayingError" class="text-danger">{{sayingError}}</span>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <label class="ml-3">Education Degres</label>
                                        <input type="text" v-model="obj.education_degree"
                                               class=" ml-3 form-control form-control-sm">
                                        <span v-if="degreeError" class="text-danger">{{degreeError}}</span>
                                        <button :disabled="!disableBtn"
                                                class="btn btn-success btn-sm ml-3 mt-3"
                                                @click="updateTeacherForm">Success
                                        </button>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Upload</label>
                                        <input type="file" ref="file" @change="selectPhoto" accept="image/*"
                                               class="ml-3 form-control form-control-sm">
                                        <span v-if="degree" class="text-danger">{{imageError}}</span>

                                    </div>


                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </table>

    </div>


</template>

<script>

    export default {
        name: "ViewTeacherComponent",
        data: function () {
            return {
                obj: {},
                teachers: [],
                editName: '',
                nameError: '',
                saying: '',
                sayingError: '',
                degree: '',
                degreeError: '',
                imageError: '',
                successMessage: false,
                imageSelected: '',
                disableBtn: true,
                post_name: '',
                post_nameError: '',
            }
        },
        props: ['posts'],
        mounted() {
            axios.get('api/viewTeacher', {}).then(response => {
                if (response.data.msg) {
                    this.teachers = response.data.teacher;
                }
            });

        },
        methods: {
            openEdit(key, id) {
                /*$.each(this.teachers, function (k, v) {
                    if (id == v.id) {
                        this.obj.name = v.teacher_name;
                        this.obj.saying = v.saying;
                        this.obj.degree = v.education_degree;
                    }
                });*/
                axios.get('/api/fetchSingleTeacher/' + id
                ).then(response => {
                    if (response.data.msg) {
                        this.obj = response.data.teacher;
                        //  console.log(this.obj.id);
                        this.post_name = this.obj.teacher_posts

                    }
                });


            },
            selectPhoto: function (e) {
                // Reference to the DOM input element
                this.obj.photo = '';
                var input = event.target;
                // Ensure that you have a file before attempting to read it
                if (input.files && input.files[0]) {
                    // create a new FileReader to read this image and convert to base64 format
                    var reader = new FileReader();
                    // Define a callback function to run, when FileReader finishes its job
                    reader.onload = (e) => {
                        // Note: arrow function used here, so that "this.imageSelected" refers to the imageData of Vue component
                        // Read image as base64 and set to imageData
                        this.imageSelected = e.target.result;
                    };
                    // Start the reader job - read file as a data url (base64 format)
                    reader.readAsDataURL(input.files[0]);

                }
                this.saveAjaxPhoto();

            },
            saveAjaxPhoto: function () {

                this.disableBtn = false;
                console.log(this.obj.id);
                console.log(this.$refs.file.files[0]);
                let formData = new FormData();
                formData.append('id', this.obj.id);
                formData.append('photo', this.$refs.file.files[0]);

                axios.post('/api/updateteacherPhoto', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    },
                }).then(response => {
                    this.disableBtn = true;

                    if (response.data.success) {
                        alert(response.data.success);
                    }

                    if (response.data.err) {
                        alert(response.data.err);
                    }
                });
            },

            updateTeacherForm: function () {
                alert(this.post_name);
                axios.post('/api/updateteacherForm', {
                    id: this.obj.id,
                    teacher_name: this.obj.teacher_name,
                    education_degree: this.obj.education_degree,
                    saying: this.obj.saying,
                    teacher_posts: this.post_name,
                    years_active: this.obj.years_active,
                }).then(response => {
                    alert(response.data.msg);
                });
            },

        },
    }


</script>

<style scoped>

</style>

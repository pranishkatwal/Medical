<template>
    <div class="row container-fluid mt-3">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Add Teacher
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div v-if="successMessage" class="alert alert-success alert-dismissible fade show"
                                 role="alert">
                                <strong></strong>{{success}}
                                <button type="button" @click="toggleSuccessMessage"
                                     class="close"    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>

                        <div class="col-md-8 row">
                            <label class="ml-3">Full Name:</label>
                            <input type="text" v-model="name" class="form-control form-control-sm ml-3">
                            <span v-if="nameError" class="text-danger">{{nameError}}</span>
                        </div>
                        <div class="col-md-4">
                            <label> Year's Active: </label>
                            <input type="number" v-model="yearsActive" class="form-control form-control-sm ml-3">
                            <span v-if="yearsActiveError" class="text-danger">{{yearsActiveError}}</span>
                        </div>

                        <div class="col-md-12 mt-2">
                            <label> Select Post:</label>
                            <select v-model="post_name" class="form-control form-control-sm">
                                <option :selected="post_name">Select</option>
                                <option v-for="(posts, key) in posts" :value="posts.id">{{posts.post_name}}</option>
                            </select>
                            <span v-if="post_nameError" class="text-danger">{{post_nameError}}</span>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <label>Contact Number</label>
                                <input type="text" v-model="phone_number" class="col-md-12">
                                <!--    <span v-if="sayingError" class="text-danger">{{sayingError}}</span>
                                -->
                            </div>
                            <div class="col-md-6 mt-3">
                                <label>Address</label>
                                <input type="text" v-model="address" class="col-md-12">
                                <!--    <span v-if="sayingError" class="text-danger">{{sayingError}}</span>
                                -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <label class="ml-3">Education Degres</label>
                                <input type="text" v-model="degree" class=" ml-3 form-control form-control-sm">
                                <span v-if="degreeError" class="text-danger">{{degreeError}}</span>

                                <button class="btn btn-success btn-sm ml-3 mt-3" @click="saveTeacher">Success</button>
                            </div>
                            <div class="col-md-6">
                                <label>Upload</label>
                                <input type="file" ref="file" @change="selectPhoto" accept="image/*"
                                       class="ml-3 form-control form-control-sm">
                                <span v-if="degree" class="text-danger">{{imageError}}</span>
                                <span v-if="imageSelected">
                                        <img :src="imageSelected"
                                             alt=""
                                             class="img-thumbnail "
                                        ></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <view_teacher_component :posts="posts"></view_teacher_component>
    </div>

</template>

<script>

    import view_teacher_component from './ViewTeacherComponent.vue';

    export default {
        name: "SettingSetupComponent",
        components: {
            view_teacher_component
        },
        data: function () {
            return {
                imageSelected: "",
                name: '',
                nameError: '',
                phone_number: '',
                sayingError: '',
                degree: '',
                address: '',
                degreeError: '',
                imageError: '',
                successMessage: false,
                success: '',
                yearsActive: '',
                yearsActiveError: '',
                posts: [],
                post_name: 'Select',
                post_nameError: '',


            }
        },
        mounted() {
            axios.get('/api/fetchPosts', {}).then(response => {
                this.posts = response.data.post;
            });

        },

        methods: {
            selectPhoto: function (event) {
                // Reference to the DOM input element
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
            },
            saveTeacher: function () {
                if (this.validate()) {
                    console.log(this.$refs.file.files[0]);
                    let formData = new FormData();

                    formData.append('teacher_name', this.name);
                    formData.append('phone_number', this.phone_number);
                    formData.append('address', this.address);
                    formData.append('education_degree', this.degree);
                    formData.append('photo', this.$refs.file.files[0]);
                    formData.append('years_active', this.yearsActive);
                    formData.append('post_id', this.post_name);
                    axios.post('/api/saveTeacher', formData, {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        },
                    }).then(response => {
                        if (response.data.err) {
                            alert(response.data.err + ' Please upload image less than 2 mb ');
                        }
                        if (response.data.success) {
                            this.name = ' ';
                            this.degree = ' ';
                            this.saying = ' ';
                            this.imageSelected = ' ';
                            this.successMessage = true;
                            this.success = response.data.success;


                        }
                    }).catch(err => {
                        alert(err.data.err);
                    })

                }


            },

            validate: function () {
                if (!this.name) {
                    this.nameError = 'Name Field Cannot be Empty *';
                    return false;
                } else {
                    this.nameError = ' ';
                }
                if (!this.yearsActive) {
                    this.yearsActiveError = 'Years Active Field Cannot be Empty *';
                    return false;
                } else {
                    this.yearsActiveError = ' ';
                }
                if (!this.post_name) {
                    this.post_nameError = 'Posts Field Cannot be Empty *';
                    return false;
                } else {
                    this.post_nameError = ' ';
                }
                if (!this.degree) {
                    this.degreeError = 'Degree Field Cannot be Empty *';
                    return false;
                } else {
                    this.degreeError = '';
                }
                if (!this.imageSelected) {
                    this.imageError = 'Image Field Cannot be Empty';
                    return false;
                } else {
                    this.imageError = ' ';
                }
                return true;
            },
            toggleSuccessMessage: function () {
                this.successMessage = false;

            },
        }
    }
</script>

<style scoped>

</style>

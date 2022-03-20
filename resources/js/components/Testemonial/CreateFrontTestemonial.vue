<template>
    <div class="row container-fluid">

        <div class="col-md-6 mt-2">
            <div class="card">
                <div class="card-header">
                    Add Testemonial
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div v-if="successMessage" class="alert alert-success alert-dismissible fade show"
                                 role="alert">
                                <strong></strong>{{success}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7">
                            <label class="">Full Name:</label>
                            <input type="text" v-model="name" class="form-control form-control-sm">
                            <span v-if="nameError" class="text-danger">{{nameError}}</span>
                        </div>

                        <div class="col-md-5">
                            <div class="col-md-12">
                                <label>Select</label>
                                <select class="form-control form-control-sm" v-model="selectGST">
                                    <option :selected="Select">Select</option>
                                    <option value="Gurdain">Gurdain</option>
                                    <option value="Student">Student</option>
                                    <option value="Teacher">Teacher</option>
                                </select>
                            </div>

                        </div>

                        <div class=" col-md-12">
                            <div class="">
                                <label>Saying</label>
                                <textarea type="text" class="form-control form-control-sm" v-model="saying" cols="10"
                                          rows="8"></textarea>
                                <span v-if="sayingError" class="text-danger">{{sayingError}}</span>
                            </div>

                        </div>


                        <div class="col-md-12 mt-2">
                            <label class="">Education Degres</label>
                            <input type="text" v-model="degree" class="form-control form-control-sm">
                            <span v-if="degreeError" class="text-danger">{{degreeError}}</span>
                        </div>

                        <div class="col-md-12">
                            <label>Upload</label>
                            <input type="file" ref="file" @change="selectPhoto" accept="image/*"
                                   class="form-control form-control-sm">
                            <span v-if="degree" class="text-danger">{{imageError}}</span>
                            <span v-if="imageSelected">
                                        <img :src="imageSelected"
                                             alt=""
                                             class="img-thumbnail">
                                </span>
                        </div>

                    </div>
                    <button class="btn btn-success btn-sm ml-3 mt-3" @click="saveTeacher">Success</button>


                </div>
            </div>
        </div>

        <view-testemonial></view-testemonial>

    </div>

</template>

<script>
    import viewTestemonial from './ViewTestemonialComponent'

    export default {
        name: "SettingSetupComponent",
        components: {
            viewTestemonial,
        },

        data: function () {
            return {
                imageSelected: "",
                name: '',
                nameError: '',
                saying: '',
                sayingError: '',
                degree: '',
                degreeError: '',
                imageError: '',
                successMessage: false,
                success: '',
                yearsActive: '',
                posts: {},
                post_name: 'Select',
                post_nameError: '',
                selectGST: '',
                Select: '',
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

                    formData.append('f_name', this.name);
                    formData.append('saying', this.saying);
                    formData.append('education_degree', this.degree);
                    formData.append('photo', this.$refs.file.files[0]);
                    formData.append('type', this.selectGST);

                    axios.post('/api/Testemonial', formData, {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        },
                    }).then(response => {
                        if (response.data.err) {
                            alert(response.data.err + ' Please upload image less than 2048 mb ');
                        }
                        if (response.data.msg) {
                            this.name = ' ';
                            this.degree = ' ';
                            this.saying = ' ';
                            this.imageSelected = ' ';
                            this.successMessage = true;
                            this.success = response.data.msg;
                            alert(this.success);

                        }

                    }).catch(err => {
                        alert(err.data.message);
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

                if (!this.saying) {
                    this.sayingError = 'Saying Field Cannot be Empty *';
                    return false;
                } else {
                    this.sayingError = ' ';
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

            }


        }
    }
</script>

<style scoped>

</style>

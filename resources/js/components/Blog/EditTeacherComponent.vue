<template>
    <div class="row">
        <div class="col-md-12">
            <div v-if="successMessage" class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

        <div class="col-md-8 row">
            <label class="ml-3">Full Name:</label>
            <input type="text" v-model="name" class="form-control form-control-sm ml-3">
            <span v-if="nameError" class="text-danger">{{nameError}}</span>
        </div>

        <div class="col-md-12 mt-3">
            <label>Saying</label>
            <textarea name="" id="" v-model="saying" class="col-md-12" rows="7"></textarea>
            <span v-if="sayingError" class="text-danger">{{sayingError}}</span>

        </div>

        <div class="row">
            <div class="col-md-6 mt-2">
                <label class="ml-3">Education Degres</label>
                <input type="text" v-model="degree" class=" ml-3 form-control form-control-sm">
                <span v-if="degreeError" class="text-danger">{{degreeError}}</span>

                <button class="btn btn-success btn-sm ml-3 mt-3">Success</button>
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

</template>

<script>
    export default {
        name: "EditTeacherComponent",
        data: function () {
            return {

                nameError: '',
                sayingError: '',
                degreeError: '',
                imageError: '',
                successMessage: false,
                imageSelected: '',
            }
        },

        methods: {}
    }
</script>

<style scoped>

</style>

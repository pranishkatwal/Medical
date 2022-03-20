<template>
    <div class="col-md-6 ">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>SN:</th>
                <th>Name:</th>
                <th>Saying:</th>
                <th>Degree:</th>
                <th>Type:</th>
                <th>photo:</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(testemonial, key) in testemonials">
                <td>{{++key}}</td>
                <td>{{testemonial.f_name}}</td>
                <td>{{testemonial.saying.substring(0,15)}}</td>
                <td>{{testemonial.degree}}.....</td>
                <td>{{testemonial.type}}.....</td>
                <td>
                    <img :src="testemonial.photo" class="img-thumbnail w-50 h-15" alt="">
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


            <!--<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                 aria-labelledby="myLargeModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            Edit Testemonial
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

                                <div class="col-md-7 row">
                                    <label class="ml-3">Full Name:</label>
                                    <input type="text" v-model="name" class="form-control form-control-sm ml-3">
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

                                <div class=" col-md-12 row">
                                    <div class="col-md-6">
                                        <label>Saying</label>
                                        <input type="text" class="form-control form-control-sm" v-model="saying">
                                        <span v-if="sayingError" class="text-danger">{{sayingError}}</span>
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <label class="ml-3">Education Degres</label>
                                        <input type="text" v-model="degree" class=" ml-3 form-control form-control-sm">
                                        <span v-if="degreeError" class="text-danger">{{degreeError}}</span>
                                        <button class="btn btn-success btn-sm ml-3 mt-3" @click="saveTeacher">Success
                                        </button>
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
            </div>-->


        </table>

    </div>


</template>

<script>
    export default {
        name: "ViewTestemonialComponent",

        data:function(){
            return {
                testemonials: [],

            }
        },
        mounted() {
            axios.get('/api/viewTestemonial', {}).then(response => {
                this.testemonials = response.data.testemonial;

            })
        }


    }
</script>

<style scoped>

</style>

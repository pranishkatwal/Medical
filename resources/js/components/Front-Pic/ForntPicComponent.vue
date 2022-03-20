<template>

    <div class="container-fluid mt-2">
        <div style="border:1px solid black">
            <el-upload
                action="/api/saveCauraselImage"
                list-type="picture-card"
                :on-preview="handlePictureCardPreview"
                :on-remove="handleRemove">
                <i class="el-icon-plus"></i>
            </el-upload>
            <el-dialog :visible.sync="dialogVisible">
                <img width="100%" :src="dialogImageUrl" alt="">
            </el-dialog>
        </div>
        <hr/>
        <div class="container-fluid">
            <div class="col-md-12">

                <button type="button" @click="fetchAllImage()" class="btn btn-sm"><i class="fas fa-sync-alt"></i>
                </button>
            </div>

            <div class="col-md-12 row">
                <div v-for="images in image" class="col-md-3 mt-2">
                    <div class="demo-image__placeholder">
                        <el-image
                            :src="images.corausel_images"
                            :preview-src-list="url">
                        </el-image>
                    </div>
                    <button v-if="images.status==0" @click="toggle(images.id)" class="btn btn-sm">
                        <span class="text-success">
                            <i class="fas fa-check"></i>
                        </span>
                    </button>
                    <button v-if="images.status==1" @click="toggle(images.id)" class="btn  btn-sm">
                        <span class="text-warning">
                            <i class="fas fa-times"></i>
                        </span>
                    </button>
                    <button @click="deleteImage(images.id)" class="btn btn-sm">
                        <span class="text-danger">
                            <i class="fas fa-trash"></i>
                        </span>
                    </button>
                </div>

            </div>


        </div>

    </div>
</template>

<script>
    export default {
        name: "ForntPicComponent",
        data() {
            return {
                dialogImageUrl: '',
                dialogVisible: false,
                image: [],
                url: [],
            };
        },
        mounted() {
            this.fetchAllImage();
        },

        methods: {
            handleRemove(file, fileList) {
                console.log(file, fileList);
            },
            handlePictureCardPreview(file) {
                this.dialogImageUrl = file.url;
                this.dialogVisible = true;
            },
            fetchAllImage() {
                axios.get('/api/fetchCauraselImage', {}).then(resp => {
                    this.image = resp.data.images;
                    let list = [];
                    $.each(resp.data.images, function (key, value) {
                        list.push(value.corausel_images);
                    });
                    this.url = list;
                });

            },
            toggle: function (id) {
                axios.post('/api/toogleBtn', {id: id}).then(resp => {
                    if (resp.data.msg) {
                        this.fetchAllImage();
                        alert(resp.data.msg);
                    }
                });
            },
            deleteImage(id) {
                axios.post('/api/deleteImage', {id: id}).then(resp => {
                    if (resp.data.msg) {
                        this.fetchAllImage();
                        alert(resp.data.msg);

                    }
                });

            },
        }
    }
</script>

<style scoped>

</style>

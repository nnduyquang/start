<template>
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Thêm Mới Chuyên Mục {{slug}}</h3>
                </div>
                <div class="card-body" style="display: block;">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="card card-primary">
                                    <!--<div class="card-header">-->
                                    <!--<h3 class="card-title">Tạo mới Danh Mục Bài Viết</h3>-->
                                    <!--</div>-->
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form role="form">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tên Chuyên Mục</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                       placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label>Menu Cấp</label>
                                                <select class="form-control">
                                                    <option>option 1</option>
                                                    <option>option 2</option>
                                                    <option>option 3</option>
                                                    <option>option 4</option>
                                                    <option>option 5</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Mô Tả Ngắn</label>
                                                <!--<textarea id="editor1" name="editor1" style="width: 100%; display: block;">This is my textarea to be replaced with CKEditor.</textarea>-->
                                                <!--<ckeditor :editor="editor" v-model="category.description"-->
                                                          <!--:config="editorConfig"></ckeditor>-->
                                                <!--<vue-editor v-model="category.description"></vue-editor>-->
                                            </div>

                                            <div class="">
                                                <input name="is_active" data-on="Có" data-off="Không" type="checkbox"
                                                       data-toggle="toggle">
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" style="display: block;">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>


        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                editMode: false,
                global: {},
                slug:null,
            }
        },
        methods:{
            insertNewItem(){

            }
        },
        created(){
            this.slug = this.$route.params.slug;
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
    // $('input[type=checkbox]').bootstrapToggle();
</script>


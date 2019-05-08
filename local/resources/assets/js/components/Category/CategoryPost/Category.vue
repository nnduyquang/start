<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header"><h3 class="card-title">Danh Mục Bài Viết</h3>
                        <div class="card-tools">
                            <router-link :to="{name:'create-edit-category',params:{slug:'create'}}" class="btn btn-success">Thêm Mới <i class="fas fa-plus fa-fw"></i></router-link>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <th>Tên Chuyên Mục</th>
                                <th>Ngày Đăng</th>
                                <th>Tình Trạng</th>
                                <th>Hành Động</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Thu Nguyen</td>
                                <td>May 5th 2019</td>
                                <td><i class="fas fa-circle is_active_color"></i></td>

                                <td><a href="#"><i class="fa fa-edit"></i></a>
                                    /
                                    <a href="#"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Thu Nguyen</td>
                                <td>May 5th 2019</td>
                                <td><i class="fas fa-circle is_disable_color"></i></td>

                                <td><a href="#"><i class="fa fa-edit"></i></a>
                                    /
                                    <a href="#"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer"><!----></div>
                </div>
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
            }
        },
        methods:{
            insertNewItem(){

            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

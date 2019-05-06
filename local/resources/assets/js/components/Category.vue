<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header"><h3 class="card-title">Danh Mục Bài Viết</h3>
                        <div class="card-tools">
                            <button class="btn btn-success">Add New <i class="fas fa-user-plus fa-fw"></i></button>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th>Registered At</th>
                                <th>Modify</th>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Thu Nguyen</td>
                                <td>athunguye.dn@gmail.com</td>
                                <td>User</td>
                                <td>May 5th 2019</td>
                                <td><a href="#"><i class="fa fa-edit"></i></a>
                                    /
                                    <a href="#"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Quang Nguyen</td>
                                <td>nnduyquang@gmail.com</td>
                                <td>Admin</td>
                                <td>May 5th 2019</td>
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
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

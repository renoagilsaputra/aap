<form action="" method="post" enctype="multipart/form-data" role="form">
    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fa fa-pencil"></i> Admin
            </h3>
            <!-- tools box -->
            <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-tool btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
            </div>
            <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body pad">
            <div class="mb-3">
               <label>Username</label>
                <input type="text" name="username" class="form-control">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option></option>
                    <option class="admin">Admin</option>
                    <option class="user">User</option>
                </select>
                <br>
                <button type="submit" class="btn btn-success" name="post"><i class="fa fa-pencil"></i> Tambah</button>
            </div>
            
        </div>
    </div>
</form>
<?php
    if(isset($_POST ['post'])) {
        $username = val($_POST ['username']);
        $password = val($_POST ['password']);
        $status = val($_POST ['status']);
        $pass = md5($password);
        
        if(empty($username) || empty($password) || empty($status)) {
            alert('Tdk boleh kosong!');
        } else {
            $ad = "INSERT into admin(username,password,status) VALUES('$username','$pass','$status')";
            $add = $conn->query($ad);
            if($add) {
                alert('Berhasil!');
                redir('?page=admin');
            } else {
                alert('Gagal!');
            }
        }
    }
?>
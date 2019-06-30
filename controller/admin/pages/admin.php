<div class="card">
    <div class="card-header">
        <h3 class="card-title"><i class="fa fa-user-secret"></i> Admin</h3>

        
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
     
        <a href="?page=admin_add" class="btn btn-success" style="margin: 10px;"><i class="fa fa-pencil"></i> Tambah</a>
        
        <table class="table">
            <tr>
                <th style="width: 10px">#</th>
                <th>Username</th>
                <th>Status</th>
                <th><i class="fa fa-cog"></i></th>
            </tr>
            <?php
                $sql = "SELECT * FROM admin ORDER by username ASC"; 
                $view = $conn->query($sql);
                $n = 1;
                while($v = $view->fetch_array()) {
            ?>
                <tr>
                    <td><?= $n++; ?></td>
                    <td><?= $v ['username']; ?></td>
                    <td><?= $v ['status']; ?></td>
                    <td>
                        <a href="?page=admin_del&id_admin=<?= $v ['id_admin']; ?>" class="btn btn-danger" onclick="return confirm('Yakin?')"><i class="fa fa-trash"></i> Hapus</a>
                        
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><i class="fa fa-database"></i> Wisata</h3>

        
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table">
            <tr>
                <th style="width: 10px">#</th>
                <th>ID</th>
                <th>Judul</th>
                <th>isi</th>
                <th>Kategori</th>
                <th>Gambar</th>
                <th>Waktu</th>
                <th><i class="fa fa-cog"></i></th>
            </tr>
            <?php
                $sql = "SELECT * FROM posting WHERE kategori = 'wisata' ORDER by waktu DESC"; 
                $view = $conn->query($sql);
                $n = 1;
                while($v = $view->fetch_array()) {
            ?>
                <tr>
                    <td><?= $n++; ?></td>
                    <td><?= $v ['id_posting']; ?></td>
                    <td><?= $v ['judul']; ?></td>
                    <td><?= substr($v ['isi'],0,40); ?></td>
                    <td><?= $v ['kategori']; ?></td>
                    <td>
                        <img width="100px" height="50px" src="../../asset/img/uploads/<?= $v ['gambar']; ?>">
                    </td>
                    <td><?= $v ['waktu']; ?></td>
                    <td>
                        <a href="?page=posting_del&id_posting=<?= $v ['id_posting']; ?>" class="btn btn-danger" onclick="return confirm('Yakin?')"><i class="fa fa-trash"></i> Hapus</a>
                        <a href="?page=posting_edit&id_posting=<?= $v ['id_posting']; ?>" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <!-- /.card-body -->
</div>
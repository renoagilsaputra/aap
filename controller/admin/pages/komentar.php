<div class="card">
    <div class="card-header">
        <h3 class="card-title"><i class="fa fa-comments"></i> Komentar</h3>

        
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table">
            <tr>
                <th style="width: 10px">#</th>
                <th>ID</th>
                <th>ID Posting</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Nama</th>
                <th>Isi</th>
                <th>Waktu</th>
                <th><i class="fa fa-cog"></i></th>
            </tr>
            <?php
                $sql = "SELECT * FROM komentar ORDER by waktu DESC"; 
                $view = $conn->query($sql);
                $n = 1;
                while($v = $view->fetch_array()) {
                    $id_posting = $v ['id_posting'];
                    $k = "SELECT * FROM posting where id_posting = '$id_posting'";
                    $kk = $conn->query($k);
                    $kkk = $kk->fetch_array();
            ?>
                <tr>
                    <td><?= $n++; ?></td>
                    <td><?= $v ['id_komentar']; ?></td>
                    <td><?= $v ['id_posting']; ?></td>
                    <td><?= $kkk ['judul']; ?></td>
                    <td><?= $kkk ['kategori']; ?></td>
                    <td><?= $v ['nama']; ?></td>
                    <td><?= $v ['isi']; ?></td>
                    <td><?= $v ['waktu']; ?></td>
                    <td>
                        <a href="?page=komentar_del&id_komentar=<?= $v ['id_komentar']; ?>" class="btn btn-danger" onclick="return confirm('Yakin?')"><i class="fa fa-trash"></i> Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <!-- /.card-body -->
</div>
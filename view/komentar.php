    <?php
        $id_posting = $v ['id_posting'];
        $jk = "SELECT * FROM komentar WHERE id_posting = '$id_posting'";
        $jkm = $conn->query($jk);
        $jml = $jkm->num_rows;
    ?>
    <h5><i class="fa fa-comments"></i> Komentar <?= $jml; ?></h5>
    <?php
        $kom = "SELECT * FROM komentar WHERE id_posting = '$id_posting' ORDER by waktu DESC";
        $km = $conn->query($kom);
        while($kk = $km->fetch_array()) {
    ?>
    <div class="komentar-pengguna">
        <span class="namakom"><?= $kk ['nama']; ?></span>
        <span class="waktukom"><?= $kk ['waktu']; ?></span>
        <div class="clearfix"></div>
        <p><?= $kk ['isi']; ?></p>
    </div>
   <?php } ?>
    <form action="?page=komentar_act&id_posting=<?= $id_posting; ?>" method="post" class="form-kom">
        <table>
            <tr>
                <td><input type="text" name="nama" placeholder="Nama komentator..." class="form-control" /></td>
            </tr>
            <tr>
                <td><textarea placeholder="Isi komentar..." name="isi" class="form-control"></textarea></td>
            </tr>
            <tr>
                <td align="right">
                    <button type="submit" class="btn btn-secondary"><i class="fa fa-pencil"></i> Publish</button><!-- btn-block -->
                </td>
            </tr>
        </table>
    </form>
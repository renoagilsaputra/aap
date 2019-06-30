<!-- .sidebar2 -->
<?php include "view/sidebar.php"; ?>
<div class="finduson">
    <!-- Make it with Font Awesome -->
    <a href="http://www.facebook.com/" title="Facebook"><i class="fa fa-facebook-square fa-fw"></i></a>
    <a href="http://www.twitter.com/" title="Twitter"><i class="fa fa-twitter-square fa-fw"></i></a>
    <a href="http://www.instagram.com/" title="Instagram"><i class="fa fa-instagram fa-fw"></i></a>
</div>
</div>
<!-- #sidebar-wrapper -->
<?php
    $id_posting = val($_GET ['id_posting']);
    $sql = "SELECT * FROM posting WHERE id_posting = '$id_posting'";
    $view = $conn->query($sql);
    $v = $view->fetch_array();
?>
    <div id="content-wrapper">
        <h2 class='judul'><i class="fa fa-clipboard"></i>
            <?= ucfirst($v ['judul']); ?>
        </h2>
        <label class="lb-left"><i class="fa fa-bookmark"></i> <b>Kategori:</b> <?= ucfirst($v ['kategori']); ?></label>
        <label class="lb-right"><i class="fa fa-clock-o"></i> <b>Date &amp; Time:</b> <?= $v ['waktu']; ?></label>

        <div class="more-img">
            <img id="myImg" src="asset/img/uploads/<?= $v ['gambar']; ?>" alt="<?= $v ['gambar']; ?>">
            <!-- The Modal -->
            <div id="myModal" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="img01">
            </div>
        </div>
        <div class="cont">
            <?= $v ['isi']; ?>
        </div>

        <hr class="hr-kom">
        <div class="komentar">
            <?php include "view/komentar.php"; ?>
        </div>
    </div>
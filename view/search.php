
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

<div id="content-wrapper">

    <h2 class='judul-kategori'><i class="fa fa-search"></i> Search...</h2>
            <?php
                    
                    if(isset($_POST ['cari'])) {
                        $search = $_POST ['search'];
                        $hhh = "SELECT * FROM posting WHERE judul LIKE '%$search%' ORDER by waktu DESC";
                        $hh = $conn->query($hhh);
                        $sj = $hh->num_rows;
                        if($sj < 1) {
                            ?>
                                <h1>Tidak ditemukan</h1>
                            <?php
                        } else {

                        
                        while($h = $hh->fetch_array()) {
                            $id_posting = $h ['id_posting'];
                            $jkm = "SELECT * FROM komentar WHERE id_posting = '$id_posting'";
                            $jk = $conn->query($jkm);
                            $jml = $jk->num_rows;
                        
            ?>
        <div class="content">
            <div class='content left'>
                <img src="asset/img/uploads/<?= $h ['gambar']; ?>" width="190" />
            </div>
            <div class='content right'>
                <h2>
                    <?= ucfirst($h ['judul']); ?>
                </h2>
                <p>
                    <i class="fa fa-clock-o"></i> <?= $h ['waktu']; ?>
                    |
                    <i class="fa fa-bookmark"></i> <?= ucfirst($h ['kategori']); ?>
                    |
                    <i class="fa fa-comments"></i> <?= $jml; ?>
                </p>
                <p>
                    <?= substr($h ['isi'],0,100);?>...
                </p>
                <div id='button'><a href="?page=more&id_posting=<?= $h ['id_posting']; ?>">Read More</a></div>
            </div>
        </div>
        <?php }}} ?>
</div>
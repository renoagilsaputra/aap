<!-- Slider with Bootstrap -->
<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <?php
                    $qqq = "SELECT * FROM posting WHERE kategori = 'wisata' ORDER by waktu DESC LIMIT 5";
                    $sss = $conn->query($qqq);
                    $noo = 0;    
                    while($qs = $sss->fetch_array()) {
                ?>
            <li data-target="#demo" data-slide-to="<?= $noo; ?>" class="<?php if($noo++ == 0){echo " active ";} else {echo "noactive ";} ?>"></li>
            <?php } ?>

    </ul>

    <!-- The slideshow -->

    <div class="carousel-inner sl">
        <?php
                $qq = "SELECT * FROM posting WHERE kategori = 'wisata' ORDER by waktu DESC LIMIT 5";
                $ss = $conn->query($qq);
                $no = 0;    
                while($qs = $ss->fetch_array()) {
            ?>
            <div class="carousel-item <?php if($no++ == 0){echo " active ";} else {echo "noactive ";} ?>">
                <a href="?page=more&id_posting=<?= $qs ['id_posting']; ?>"><img src="asset/img/uploads/<?= $qs ['gambar']; ?>" width="100%" height="450px"></a>
            </div>
            <?php } ?>
    </div>

    <!-- Left and right controls 
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a> -->
</div>

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

    <h2 class='judul-kategori'><i class="fa fa-home"></i> Home</h2>
    <?php
                    $hhh = "SELECT * FROM posting ORDER by waktu DESC";
                    $hh = $conn->query($hhh);
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
                    <?= substr($h ['isi'],0,100);
                    echo "..." ?>
                </p>
                <div id='button'><a href="?page=more&id_posting=<?= $h ['id_posting']; ?>">Read More</a></div>
            </div>
        </div>
        <?php } ?>
</div>
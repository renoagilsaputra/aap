<?php
    $id_posting = val($_GET ['id_posting']);
    
    $sql = "SELECT * FROM posting WHERE id_posting = '$id_posting'";
    $q = $conn->query($sql);
    $v = $q->fetch_array();
    
?>
<form action="" method="post" enctype="multipart/form-data" role="form">
    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fa fa-edit"></i> Edit
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
               <label>Judul</label>
                <input type="text" name="judul" class="form-control" value="<?= $v ['judul']; ?>">
                <label>Isi</label>
                <textarea id="editor1" name="isi"><?= $v ['isi']; ?></textarea>
                <label>Kategori</label>
                <select name="kategori" class="form-control">
                    <option value="<?= $v ['kategori']; ?>"></option>
                    <option value="wisata">Wisata</option>
                    <option value="kuliner">Kuliner</option>
                </select>
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control">
                <br>
                <button type="submit" class="btn btn-info" name="post"><i class="fa fa-edit"></i> Edit</button>
            </div>
            
        </div>
    </div>
</form>
<?php
    if(isset($_POST ['post'])) {
        $judul = val($_POST ['judul']);
        $isi = val($_POST ['isi']);
        $kategori = val($_POST ['kategori']);
        
        $sumber = @$_FILES ['gambar']['tmp_name'];
        $target = "../../asset/img/uploads/";
        $nama_gambar = @$_FILES ['gambar']['name'];
        
        if(empty($judul) || empty($isi) || empty($kategori)) {
            alert('Tdk boleh kosong!');
        } else if(empty($nama_gambar)) {
            $e = "UPDATE posting SET judul = '$judul', isi = '$isi', kategori = '$kategori' WHERE id_posting = '$id_posting'";
            $ed = $conn->query($e);
                if($e) {
                    alert('Berhasil!');
                    redir('?page='.$kategori);
                } else {
                    alert('Gagal!');
                }
        } else {
            $move = move_uploaded_file($sumber, $target.$nama_gambar);
            if($move) {
                $ee = "UPDATE posting SET judul = '$judul', isi = '$isi', kategori = '$kategori', gambar = '$nama_gambar' WHERE id_posting = '$id_posting'";
                $edd = $conn->query($ee);
                if($edd) {
                    alert('Berhasil!');
                    redir('?page='.$kategori);
                } else {
                    alert('Gagal!');
                }
            }
        }
    }
?>
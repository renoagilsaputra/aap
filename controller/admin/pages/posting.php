<form action="" method="post" enctype="multipart/form-data" role="form">
    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fa fa-pencil"></i> Posting
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
                <input type="text" name="judul" class="form-control">
                <label>Isi</label>
                <textarea id="editor1" name="isi"></textarea>
                <label>Kategori</label>
                <select name="kategori" class="form-control">
                    <option></option>
                    <option value="wisata">Wisata</option>
                    <option value="kuliner">Kuliner</option>
                </select>
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control">
                <br>
                <button type="submit" class="btn btn-success" name="post"><i class="fa fa-pencil"></i> Posting</button>
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
        
        if(empty($judul) || empty($isi) || empty($kategori) || empty($nama_gambar)) {
            alert('Tdk boleh kosong!');
        } else {
            $move = move_uploaded_file($sumber, $target.$nama_gambar);
            if($move) {
                $sql = "INSERT into posting(judul,isi,kategori,gambar,waktu) VALUES('$judul','$isi','$kategori','$nama_gambar',now())";
                $add = $conn->query($sql);
                if($add) {
                    alert('Berhasil!');
                    redir('?page='.$kategori);
                } else {
                    alert('Gagal!');
                }
            } else {
                alert('Gagal!');
            }
        }
    }
?>
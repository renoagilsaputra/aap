<?php
    $id_posting = val($_GET ['id_posting']);
    $nama = val($_POST ['nama']);
    $isi = val($_POST ['isi']);

    if(empty($nama) || empty($isi)) {
        alert('Kosong!');
        redir('?page=more&id_posting='.$id_posting);
    } else {
        $adk = "INSERT into komentar(id_posting,nama,isi,waktu) VALUES ('$id_posting','$nama','$isi',now())";
        $ad = $conn->query($adk);
        if($ad) {
            alert('Berhasil!');
            redir('?page=more&id_posting='.$id_posting);
        } else {
            alert('Gagal!');
            redir('?page=more&id_posting='.$id_posting);
        }
    }
?>
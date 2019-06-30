<?php
    $id_komentar = val($_GET ['id_komentar']);
    
    $sql = "DELETE FROM komentar WHERE id_komentar = '$id_komentar'";
    $del = $conn->query($sql);
    
    if($del) {
        alert('Berhasil!');
        redir('?page=komentar');
    } else {
        alert('Gagal!');
        redir('?page=komentar');
    }
?>
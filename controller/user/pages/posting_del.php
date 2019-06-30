<?php
    $id_posting = val($_GET ['id_posting']);
    
    $k = "SELECT * FROM posting WHERE id_posting = '$id_posting'";
    $kt = $conn->query($k);
    $ktt = $kt->fetch_array();
    $kategori = $ktt ['kategori'];
    
    $sql = "DELETE FROM posting WHERE id_posting = '$id_posting'";
    
    $del = $conn->query($sql);
    
    if($del) {
        alert('Berhasil!');
        redir('?page='.$kategori);
    } else {
        alert('Gagal!');
        redir('?page='.$kategori);
    }
?>
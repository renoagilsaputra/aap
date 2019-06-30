<?php
    $id_admin = val($_GET ['id_admin']);

    $sql = "DELETE FROM admin WHERE id_admin = '$id_admin'";
    $del = $conn->query($sql);

    if($del) {
        alert('Berhasil!');
        redir('?page=admin');
    } else {
        alert('Gagal!');
        redir('?page=admin');
    }
?>
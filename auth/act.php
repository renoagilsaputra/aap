<?php
    session_start();
    include "../config/config.php";

    if(isset($_POST ['login'])) {
    $username = val($_POST ['username']);
    $password = val($_POST ['password']);

    $pass = md5($password);

    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$pass'";

    $log = $conn->query($sql);
    
    $vl = $log->fetch_array();
        
    $jml = $log->num_rows;

    

    if(empty($username) || empty($password)) {
        error('Username / Password Kosong!');
        
    } else {
        if($jml < 1) {
            error('Username / Password Salah!');
            
        } else if($vl ['status'] == "admin"){
            @$_SESSION ['id_admin'] = $vl ['id_admin'];
            alert('Berhasil login sebagai ADMIN!');
            redir('../controller/admin/');
        } else if($vl ['status'] == "user") {
            @$_SESSION ['id_admin'] = $vl ['id_admin'];
            alert('Berhasil login sebagai USER!');
            redir('../controller/user/');
        }
    }
    }
?>
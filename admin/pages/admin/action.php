<?php 
session_start();
include "../../../config/config.php";
include "../../../utils/date.php";
$waktu_epoch = time();
$for = 'admin-' . $waktu_epoch;


if($_GET['act'] == 'add'){
    $user = $_POST['username'];
    mysqli_query($conn, "INSERT INTO tb_admin (id, username, tanggal_dibuat) VALUES ('$for', '$user', '$tanggal')");
    
    if(mysqli_affected_rows($conn)){
        echo "<script>
                alert('Data berhasil tersimpan!');
                window.location.href = '../../?page=admin';
            </script>"; 
    }
}else if($_GET['act'] == 'edit'){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $tb = $_POST['tb'];
    $id = $_POST['id'];
    mysqli_query($conn, "UPDATE tb_admin SET id = '$id', username = '$user', password = '$pass', tanggal_dibuat = '$tb' WHERE id = '$id'");
    
    if(mysqli_affected_rows($conn)){
        $_SESSION['username'] = $user;
        echo "<script>
                alert('Data berhasil diubah!');
                window.location.href = '../../?page=admin';
            </script>"; 
    }
}

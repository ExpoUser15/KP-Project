<?php
include "../../../config/config.php";
$dat = $_GET['user'];
$stat = $_GET['status'];
$r = ($stat == "selesai") ? "Proses" : "Selesai";
mysqli_query($conn, "UPDATE tb_tugas SET status = '$r' WHERE id = '$dat'");

if(mysqli_affected_rows($conn) == 1){
    echo "<script>
        window.location.href = '../../?page=tugas';
    </script>";
}else{
    echo "<script>
            alert('Terjadi Kesalahan!');
            window.location.href = '../../?page=tugas';
        </script>"; 
}
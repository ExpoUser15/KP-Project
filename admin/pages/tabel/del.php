<?php 
    $id = @$_GET['user'];
    mysqli_query($conn, "DELETE FROM tb_kotak_saran WHERE id = '$id'");
    if(isset($id)){
        if(mysqli_affected_rows($conn) == 1){
            echo "<script>
                alert('Data berhasil dihapus!');
                window.location.href = '?page=tabel';
            </script>";
        }
    }
?>
<?php 
include "../../../config/config.php";
include "../../../utils/date.php";

    $das = $_GET['a'];
    if($das == 'tambah'){
        $id = $_POST['id'];
        $s = $_POST['s'];
        $na = $_POST['na'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $waktu = $_POST['waktu'];
        if(!empty($id) && !empty($s) && !empty($na) && !empty($tempat) && !empty($tanggal) && !empty($waktu)){
            $validasi = validasiFormatWaktu($_POST['waktu']);
            $validasiTanggal = validasiFormatTanggal($_POST['tanggal']);
            if($validasi != 1){
                echo "<script>
                            alert('Berikan format waktu yang valid. Contoh \"00:00\".');
                            window.location.href = '../../index.php';
                        </script>";
            }else if($validasiTanggal != 1){
                echo "<script>
                            alert('Berikan format tanggal yang valid. Contoh: \"1 January 1970\".');
                            window.location.href = '../../index.php';
                        </script>";
            }else{
                mysqli_query($conn, "INSERT INTO acara (id, nama_acara, tempat, tanggal, waktu, status) VALUES ('$id', '$na', '$tempat', '$tanggal', '$waktu', '$s')");
                if(mysqli_affected_rows($conn)){
                    echo "<script>
                            alert('Data berhasil tersimpan!');
                            window.location.href = '../../index.php';
                        </script>"; 
                }
            }
        }else{
            echo "<script>
                        alert('Form tidak boleh ada yang kosong!');
                        window.location.href = '../../index.php';
                    </script>"; 
        }
    }else if($das == 'edit'){
        $id = $_POST['id'];
        $s = $_POST['s'];
        $na = $_POST['na'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $waktu = $_POST['waktu'];
        if(isset($id) && isset($s) && isset($na) && isset($tempat) && isset($tanggal) && isset($waktu)){
            mysqli_query($conn, "UPDATE acara SET id='$id', nama_acara='$na', tempat='$tempat', tanggal='$tanggal', waktu='$waktu', status='$s' WHERE id='$_GET[id]'");
            if(mysqli_affected_rows($conn)){
                echo "<script>
                alert('Data berhasil diubah!');
                        window.location.href = '../../index.php';
                    </script>"; 
            }
        }
    }else{
        mysqli_query($conn, "DELETE FROM acara WHERE id = '$_GET[id]'");
        if(mysqli_affected_rows($conn)){
            echo "<script>
                    alert('Data berhasil dihapus!');
                    window.location.href = '../../index.php';
                </script>"; 
        }else{
            echo "<script>
                    alert('Data berhasil dihapus!');
                </script>";
        }
    }
?>
<?php
include "../../../config/config.php";
include "../../../utils/date.php";
$q = $_GET['q'];

if($q == 'surat'){
    if(isset($_POST['submitSurat'])){
        $namaFile = $_FILES['sp']['name'];
        $error = $_FILES['sp']['error'];
        $tmpName = $_FILES['sp']['tmp_name'];

        $namaFile2 = $_FILES['ktp']['name'];
        $error2 = $_FILES['ktp']['error'];
        $tmpName2 = $_FILES['ktp']['tmp_name'];

        $namaFile3 = $_FILES['kk']['name'];
        $error3 = $_FILES['kk']['error'];
        $tmpName3 = $_FILES['kk']['tmp_name'];

        $mimeType = ['jpg', 'jpeg', 'png'];
        $extensi = explode('.', $namaFile);
        $extensi1 = strtolower(end($extensi));

        $extensi2 = explode('.', $namaFile2);
        $extensi21 = strtolower(end($extensi2));

        $extensi3 = explode('.', $namaFile3);
        $extensi31 = strtolower(end($extensi3));

        if($error == 4 || $error2 == 4 || $error3 == 4){
            echo '<script>alert("Pilih gambar terlebih dahulu")
                location.href = "../../index.php";
            </script>';
        }elseif(!in_array($extensi1, $mimeType) || !in_array($extensi21, $mimeType) || !in_array($extensi31, $mimeType)){
            echo '<script>alert("Pilih gambar dengan extensi jpg, jpeg, atau png!")
                location.href = "../../index.php";
            </script>';
        }else{
            $teksDenganMinus = str_replace(' ', '-', $extensi[0]);
            $teksDenganMinus2 = str_replace(' ', '-', $extensi2[0]);
            $teksDenganMinus3 = str_replace(' ', '-', $extensi3[0]);
            $namaBaru = time() . uniqid() . "-" . $teksDenganMinus . '.' . $extensi1; 
            $namaBaru2 = time() . uniqid() . "-" . $teksDenganMinus2 . '.' . $extensi21; 
            $namaBaru3 = time() . uniqid() . "-" . $teksDenganMinus3. '.' . $extensi31; 
    
            move_uploaded_file($tmpName, '../../../admin/img/' . $namaBaru);
            move_uploaded_file($tmpName2, '../../../admin/img/' . $namaBaru2);
            move_uploaded_file($tmpName3, '../../../admin/img/' . $namaBaru3);
    
            $id = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['id']));
            $nama = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['nama']));
            $js = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['js']));
            $no_telp = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['no_telp']));
            $sp = $namaBaru;
            $ktp = $namaBaru2;
            $kk = $namaBaru3;
            $status = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['status']));
    
            mysqli_query($conn, "INSERT INTO tb_tugas VALUES ('$id', '$nama', '$js', '$no_telp', '$waktu_sekarang', '$sp', '$ktp', '$kk', '$status')");
    
            if(mysqli_affected_rows($conn)){
                echo '<script>alert("Form berhasil disimpan. Anda akan segera dihubungi setelah surat anda selesai dibuat.")
                    location.href = "../../index.php";
                </script>';
            }else{
                echo '<script>alert("Data gagal dismpan.")</script>';
            }
        }



    }
}elseif($q == 'kotaksaran'){
    if(isset($_POST['submitSaran'])){
        $id = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['id']));
        $nama = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['nama']));
        $rtrw = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['rtrw']));
        $no_telp = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['no_telp']));
        $desc = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['pesan']));
        $kategori = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['kategori']));
        mysqli_query($conn, "INSERT INTO tb_kotak_saran VALUES ('$id', '$nama', '$rtrw', '$no_telp', '$desc', '$kategori', '$waktu_sekarang')");
        if(mysqli_affected_rows($conn)){
            echo '<script>alert("Form berhasil disimpan. Terima kasih atas pendapat anda.")
                location.href = "../../index.php";
            </script>';
        }else{
            echo '<script>alert("Form gagal disimpan.")</script>';
        }
    }
}
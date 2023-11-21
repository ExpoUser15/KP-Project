<?php 
include "../config/config.php";
include "date.php";

    $sq = $weekdaysLastWeek[0];
    $sa = $weekdaysLastWeek[4];
    $o = mysqli_query($conn, "SELECT * FROM tb_tugas WHERE tanggal BETWEEN '$sq' AND '$sa' ORDER BY tanggal");

    $data = array();

    while($p = mysqli_fetch_assoc($o)){
        if($p['status'] == "Selesai"){
            $data[] = array(
                'status' => $p['status'], 
                'tanggal' => $p["tanggal"]
            );
        }
    }

    $jsonData = json_encode($data);
    echo $jsonData; 

//     $dataToEncrypt = "AnalisisMingguanPembuatanSurat";
//     $key = openssl_random_pseudo_bytes(32);
//     $iv = openssl_random_pseudo_bytes(16); // Initialization Vector
// $encryptedData = openssl_encrypt($dataToEncrypt, 'aes-256-cbc', $key, 0, $iv);
// echo $encryptedData;


<?php 
include "../config/config.php";
include "date.php";

    $sq = $weekdaysLastWeek[0];
    $sa = $weekdaysLastWeek[4];
    $o = mysqli_query($conn, "SELECT * FROM tb_kotak_saran WHERE tanggal BETWEEN '$sq' AND '$sa' ORDER BY tanggal");

    $data = array();

    while($p = mysqli_fetch_assoc($o)){
        if($p['kategori'] == "saran"){
            $data[] = array(
                'kategori' => $p['kategori'], 
                'tanggal' => $p["tanggal"]
            );
        }elseif($p['kategori'] == "kritik"){
            $data[] = array(
                'kategori' => $p['kategori'], 
                'tanggal' => $p["tanggal"]
            );
        }else{
            $data[] = array(
                'kategori' => $p['kategori'], 
                'tanggal' => $p["tanggal"]
            );
        }
    }

    $json = array(
        'weekdays' => $weekdaysLastWeek,
        'data' => $data
    );

    $jsonData = json_encode($json);
    echo $jsonData; 

//     $dataToEncrypt = "AnalisisMingguanPembuatanSurat";
//     $key = openssl_random_pseudo_bytes(32);
//     $iv = openssl_random_pseudo_bytes(16); // Initialization Vector
// $encryptedData = openssl_encrypt($dataToEncrypt, 'aes-256-cbc', $key, 0, $iv);
// echo $encryptedData;


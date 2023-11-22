<?php 
include "../config/config.php";
include "date.php";

    $sq = $mingguLalu[0];
    $sa = $mingguLalu[4];
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


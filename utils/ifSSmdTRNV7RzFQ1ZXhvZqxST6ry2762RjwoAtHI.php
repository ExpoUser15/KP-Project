<?php 
include "../config/config.php";
include "date.php";

    $sq = $monthDay[0];
    $sa = $monthDay[count($monthDay) - 1];
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

    $json = array(
        'month' => $nama_bln[$bln_sekarang],
        'fulldateinmonth' => $monthDay,
        'data' => $data
    );

    $jsonData = json_encode($json);
    echo $jsonData;

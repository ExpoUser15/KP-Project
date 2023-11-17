<?php

date_default_timezone_set('Asia/Jayapura'); // PHP 6 mengharuskan penyebutan timezone.
$seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$hari = date("w");
$hari_ini = $seminggu[$hari];

$waktu_sekarang = date("Y-m-d");
$tgl_sekarang   = date("d");
$bln_sekarang = date("m");
$thn_sekarang = date("Y");
$jam_sekarang = date("H:i");
$array = explode(":", $jam_sekarang);

$datetime = date("Y-m-d H:i:s");

$nama_bln=array(1=> "Januari", "Februari", "Maret", "April", "Mei", 
                    "Juni", "Juli", "Agustus", "September", 
                    "Oktober", "November", "Desember");

$tanggal = $tgl_sekarang . ' ' . $nama_bln[$bln_sekarang] . ' ' . $thn_sekarang;

function validasiFormatWaktu($string_waktu){
    $regex_pattern = '/^(?:[01]\d|2[0-3]):[0-5]\d$/';
    if (preg_match($regex_pattern, $string_waktu)) {
        return 1;
    } else {
        return 0;
    }
}
function validasiFormatTanggal($string_waktu){
    $regex_pattern = '/^(0?[1-9]|[12]\d|3[01])\s+(Januari|Februari|Maret|April|Mei|Juni|Juli|Agustus|September|Oktober|November|Desember)\s+\d{4}$/';
    if (preg_match($regex_pattern, $string_waktu)) {
        return 1;
    } else {
        return 0;
    }
}

?>
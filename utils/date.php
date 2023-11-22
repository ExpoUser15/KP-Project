<?php

date_default_timezone_set('Asia/Jayapura'); // PHP 6 mengharuskan penyebutan timezone.
$seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$hari = date("w");
$hari_ini = $seminggu[$hari];

$waktu_sekarang = date("d-m-Y");
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

function rentangWaktu($waktuAwal, $waktuAkhir){
    $tanggal_awal = new DateTime($waktuAwal);

    $tanggal_akhir = new DateTime($waktuAkhir);

    $rentang_waktu = $tanggal_awal->diff($tanggal_akhir);

    return $rentang_waktu->format('%a');
}


$today = new DateTime();

$currentDay = $today->format('N') - 1;

$daysToSubtract = ($currentDay == 0) ? 7 : $currentDay;

$lastMonday = $today->sub(new DateInterval("P{$daysToSubtract}D"));

$weekdaysLastWeek = [];
for ($i = 0; $i < 5; $i++) {
    $weekdaysLastWeek[] = $lastMonday->format('d-m-Y');
    $lastMonday->add(new DateInterval("P1D"));
}

$tanggalAwal = new DateTime("$thn_sekarang-$bln_sekarang-01");

$jumlahHari = $tanggalAwal->format('t');

$monthDay = [];
for ($i = 0; $i < $jumlahHari; $i++) {
    $tanggal = $tanggalAwal->format('d-m-Y');
    $monthDay[] = $tanggal;
    $tanggalAwal->add(new DateInterval('P1D'));
}

function asda($tanggal_database, $num){

    $tanggal_database_obj = new DateTime($tanggal_database);

    $tanggal_sekarang = new DateTime();

    // $tanggal_database_obj->add(new DateInterval('P1W'));
    $selisih_waktu = $tanggal_sekarang->diff($tanggal_database_obj);

    if ($selisih_waktu->days <= $num) {
        return "true";
    } else {
        return "false";
    }
}

// Mendapatkan tanggal hari ini
$today = date("Y-m-d");

$dayOfWeek = date("N", strtotime($today));
$daysToSubtract = $dayOfWeek + 6; 

// Mendapatkan tanggal Senin minggu lalu
$lastMonday = date("Y-m-d", strtotime("-$daysToSubtract days", strtotime($today)));

// Mendapatkan tanggal Jumat minggu lalu
$lastFriday = date("Y-m-d", strtotime("-$daysToSubtract days +4 days", strtotime($today)));
$mingguLalu = [];
for ($i = 0; $i < 5; $i++) {
    $currentDate = date("d-m-Y", strtotime("$lastMonday +$i days"));
    $mingguLalu[] = $currentDate;
}

?>
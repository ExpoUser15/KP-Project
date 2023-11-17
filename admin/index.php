<?php
session_start();
include "../config/config.php";
$kj = @$_SESSION['username'];
$wqw = mysqli_query($conn,  "SELECT * FROM tb_admin WHERE username = '$kj'");
if(!isset($kj)){
    echo "<script>location.href = 'login.php';</script>";
}else if(mysqli_num_rows($wqw) != 1){
    echo "<script>location.href = 'login.php';</script>";
}
  include "../admin/html/head.php";
?>

    <?php include "layout/header.php" ?>
    <?php include "layout/sidebar.php" ?>

    <div class="conatainer-fluid">
        <div class="row">
            
            <?php
                if(@$_GET["page"] == ""){
                    include "pages/home.php"; 
                }else if(@$_GET["page"] == "tabel"){
                    if(@$_GET["show"] == "true"){
                        include "pages/tabel/saran.php";
                    }else if(@$_GET['delete'] == "true"){
                        include "pages/tabel/del.php";
                    }else{
                        include "pages/tabel.php";
                    }
                }else if(@$_GET["page"] == "tugas"){
                    include "pages/tugas.php"; 
                }else if(@$_GET['page'] == "admin"){
                    include "pages/admin.php"; 
                } 
            ?>

        </div>
    </div>

    <?php
        if(@$_GET["page"] == ""){
            echo '<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                <script src="js/kalender.js"></script>
                <script src="js/chart/chart.js"></script>
                <script src="js/chart/chart2.js"></script>'; 
        }

        include "html/foot.php";
    ?>
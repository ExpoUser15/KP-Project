<?php
  include "../config/config.php";
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
                }else if(@$_GET["page"] == "analisis"){
                    include "pages/analisis.php"; 
                }else if(@$_GET["page"] == "tugas"){
                    include "pages/tugas.php"; 
                } 
            ?>

        </div>
    </div>

    <?php
        if(@$_GET["page"] == ""){
            echo '<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                <script src="js/kalender.js"></script>
                <script src="js/chart/chart.js"></script>'; 
        }else if(@$_GET["page"] == "analisis"){
            echo '<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                <script src="js/chart/chart2.js"></script>'; 
        }else if(@$_GET["page"] == "tabel"){
            echo '<script src="js/speech.js"></script>'; 
        }else if(@$_GET["page"] == "tugas"){
            echo '<script src="js/script.js"></script>'; 
        }

        include "html/foot.php";
    ?>


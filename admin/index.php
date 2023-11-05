<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Template · Bootstrap v5.0</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      tr{
        border-style: none;
        border-bottom-style: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="style/dashboard.css" rel="stylesheet">
</head>
<body style="overflow-x: hidden;">

    <?php include "layout/header.php" ?>
    <?php include "layout/sidebar.php" ?>

    <div class="conatainer-fluid">
        <div class="row">
            
            <?php
                if(@$_GET["page"] == ""){
                    include "pages/home.php"; 
                }else if(@$_GET["page"] == "tabel"){
                    include "pages/tabel.php"; 
                }else if(@$_GET["page"] == "analisis"){
                    include "pages/analisis.php"; 
                }
            ?>

        </div>
    </div>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src='assets/fullcalendar/dist/index.global.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script>
        feather.replace();
    </script>


    <?php
        if(@$_GET["page"] == ""){
            echo '<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                <script src="js/kalender.js"></script>
                <script src="js/chart/chart.js"></script>'; 
        }else if(@$_GET["page"] == "analisis"){
            echo '<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                <script src="js/chart/chart2.js"></script>'; 
        }else if(@$_GET["page"] == "tabel"){
            echo '<script src="js/speech.js"></>'; 
        }
    ?>

</body>
</html>
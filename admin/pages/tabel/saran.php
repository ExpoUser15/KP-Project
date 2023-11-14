<?php 
  $id = $_GET['user'];
  $q = mysqli_query($conn, "SELECT * FROM tb_kotak_saran WHERE id = '$id'"); 
  $data = mysqli_fetch_assoc($q);
?>

<main class="col-md-9 ms-sm-auto col-lg-10">
  <h1 class="h2 pt-3">
    <?php 
      if($data["kategori"] == "saran"){
        echo "Saran";
      }else if($data["kategori"] == "kritik"){
        echo "Kritik";
      }else{
        echo "Lainnya";
      }
    ?>
  </h1>
  <div class="container my-4">
    <div class="row">
        <div class="col">
            <h6><?php 
                  if($data["kategori"] == "saran"){
                    echo "Saran";
                  }else if($data["kategori"] == "kritik"){
                    echo "Kritik";
                  }else{
                    echo "Lainnya";
                  }
            ?> dari <?php echo $data['nama']; ?>,</h6>
            <p><?php echo $data['deskripsi']; ?></p>
            <hr>
            <a href="?page=tabel" class="btn btn-danger">Kembali</a>
        </div>
    </div><!--row-->

  </div><!--container-->
</main>

<?php 
include "../utils/date.php"; 
?>
<main class="col-md-9 ms-sm-auto col-lg-10">
  <h1 class="h2 pt-3">Tugas</h1>
  <div class="container my-4">
    <div class="row shadow-sm p-3 mb-3 bg-white">
        <div class="col-12 ">
            <h6>Tugas Terbaru</h6>
            <hr>
            <form action="" method="POST" class="col-12 d-flex justify-content-end align-items-center">
                <div class="position-relative w-100">
                    <div class="position-absolute" style="top: 3.5px; left: 12px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    </div>
                    <input id="tugasSearchInput" name="tugas" type="text" placeholder="Ketik untuk mencari..." class="form-control form-control-sm w-100" style="padding: 0 2.5rem;">
                </div>
                <button type="submit" name="submit" class="btn btn-dark ms-2" style="width: 80px;">Cari</button>
            </form>
        </div>
        <div class="col-md-12 mt-3" style="overflow: auto; max-height: 20rem;">
            <table class="t">
                <thead>
                    <tr class="text-secondary fw-bolder">
                        <td class="p-2 ps-0">Nama</td>
                        <td>Jenis Surat</td>
                        <td class="text-center">Status</td>
                    </tr>
                </thead>
                <tbody>
                  <?php 
                    $search = @$_POST['tugas'];
                    if(isset($search)):

                    $q = mysqli_query($conn, "SELECT * FROM tb_tugas WHERE nama LIKE '%$search%' OR jenis_surat LIKE '%$search%' OR status LIKE '%$search%'");
                    while($d = mysqli_fetch_assoc($q)):
                      if(asda($d['tanggal'], 3) == "true"):
                  ?>
                    <tr>
                        <td class="p-2 ps-0"><?php echo $d['nama'] ?></td>
                        <td><?php echo $d['jenis_surat'] ?></td>
                        <td class="text-center z" data-id="<?php echo $d['id'] ?>">
                          <form method="POST" action="pages/tugas/action.php?user=<?php echo $d['id'] ?>&status=<?php if($d['status'] == 'Selesai'){echo "selesai";}else{echo "proses";} ?>">
                            <button type="submit" class="btn <?php if($d['status'] != "Proses"){echo "btn-success";}else{echo "btn-danger";} ?>"><?php if($d['status'] != "Proses"){echo "Selesai";}else{echo "Proses";} ?></button>
                          </form>
                        </td>
                    </tr>
                    <?php endif; 
                    endwhile; 
                      elseif(!isset($search)):
                        $q = mysqli_query($conn, "SELECT * FROM tb_tugas ORDER BY tanggal DESC");
                        while($d = mysqli_fetch_assoc($q)):
                          if(asda($d['tanggal'], 3) == "true"):
                    ?>
                            <tr>
                                <td class="p-2 ps-0"><?php echo $d['nama'] ?></td>
                                <td><?php echo $d['jenis_surat'] ?></td>
                                <td class="text-center">
                                  <form method="POST" action="pages/tugas/action.php?user=<?php echo $d['id'] ?>&status=<?php if($d['status'] == 'Selesai'){echo "selesai";}else{echo "proses";} ?>">
                                    <button type="submit" class="btn <?php if($d['status'] != "Proses"){echo "btn-success";}else{echo "btn-danger";} ?>"><?php if($d['status'] != "Proses"){echo "Selesai";}else{echo "Proses";} ?></button>
                                  </form>
                                </td>
                            </tr>    
                      <?php 
                        endif;
                      endwhile;
                    endif;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row my-5 bg-white p-4">
        <div class="col">
            <form action="" method="POST" class="d-flex justify-content-end align-items-center">
                <div class="position-relative w-100">
                    <div class="position-absolute" style="top: 3.5px; left: 12px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    </div>
                    <input id="searchInput" name="tugas2" type="text" placeholder="Ketik untuk mencari..." class="form-control form-control-sm w-100" style="padding: 0 2.5rem;">
                </div>
                <button type="submit" name="submit" class="btn btn-dark ms-2" style="width: 80px;">Cari</button>
            </form>
            <hr>
            <div style="overflow-x: auto;">
                <table class="table table-sm table-borderless">
                    <thead>
                      <tr class="text-center" style="background-color: rgb(243 244 246); color: rgb(148 163 184);">
                        <th scope="col" class="py-3 px-4 align-middle">No</th>
                        <th scope="col" class="py-3 px-4 align-middle">Nama</th>
                        <th scope="col" class="py-3 px-4 align-middle">Tugas</th>
                        <th scope="col" class="py-3 px-4 align-middle">No. Telp</th>
                        <th scope="col" class="py-3 px-4 align-middle">Tanggal</th>
                        <th scope="col" class="py-3 px-4 align-middle">Status</th>
                        <th scope="col" class="py-3 px-4 align-middle">Surat Pengantar RT/RW</th>
                        <th scope="col" class="py-3 px-4 align-middle">KTP</th>
                        <th scope="col" class="py-3 px-4 align-middle">KK</th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                      <?php
                      $search2 = @$_POST['tugas2'];
                      if(isset($search2)):
                        $query = mysqli_query($conn, "SELECT * FROM tb_tugas WHERE nama LIKE '%$search2%' OR no_telp LIKE '%$search2%' OR tanggal LIKE '%$search2%' OR jenis_surat LIKE '%$search2%' OR status LIKE '%$search2%'");
                        $no = 1;
                        while($data = mysqli_fetch_assoc($query)):
                      ?>
                        <tr style="border-bottom: 2px solid rgb(243 244 246);">
                          <td class="py-3 px-4"><?php echo $no ?></td>
                          <td class="py-3 px-4"><?php echo $data['nama'] ?></td>
                          <td class="py-3 px-4"><?php echo $data['jenis_surat'] ?></td>
                          <td class="py-3 px-4"><?php echo $data['no_telp'] ?></td>
                          <td class="py-3 px-4"><?php echo $data['tanggal'] ?></td>
                          <td class="py-3 px-4">
                              <p class="<?php if($data['status'] != "Proses"){echo "btn-success";}else{echo "btn-danger";} ?> p-2 text-white px-3 rounded-3"><?php echo $data['status'] ?></p>
                          </td>
                          <td class="py-3 ">
                            <a class="text-dark text-decoration-none icon y" data-image="<?php echo $data['surat_pengantar'] ?>" title="Lihat Surat Pengantar RT/RW" style="cursor: pointer;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                            </a>
                          </td>
                          <td class="py-3 ">
                            <a class="text-dark text-decoration-none icon y" data-image="<?php echo $data['ktp'] ?>" title="Lihat KTP" style="cursor: pointer;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                            </a>
                          </td>
                          <td class="py-3 ">
                            <a class="text-dark text-decoration-none icon y" title="Lihat KK" data-image="<?php echo $data['kk'] ?>" style="cursor: pointer;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                            </a>
                          </td>
                        </tr>
                      <?php $no++; endwhile;
                      elseif(!isset($search2)):
                        $query = mysqli_query($conn, "SELECT * FROM tb_tugas ORDER BY tanggal DESC");
                        $no = 1;
                        while($data = mysqli_fetch_assoc($query)):
                      ?>
                        <tr style="border-bottom: 2px solid rgb(243 244 246);">
                          <td class="py-3 px-4"><?php echo $no ?></td>
                          <td class="py-3 px-4"><?php echo $data['nama'] ?></td>
                          <td class="py-3 px-4"><?php echo $data['jenis_surat'] ?></td>
                          <td class="py-3 px-4"><?php echo $data['no_telp'] ?></td>
                          <td class="py-3 px-4"><?php echo $data['tanggal'] ?></td>
                          <td class="py-3 px-4">
                              <p class="<?php if($data['status'] != "Proses"){echo "btn-success";}else{echo "btn-danger";} ?> p-2 text-white px-3 rounded-3"><?php echo $data['status'] ?></p>
                          </td>
                          <td class="py-3 ">
                            <a class="text-dark text-decoration-none icon y" data-image="<?php echo $data['surat_pengantar'] ?>" title="Lihat Surat Pengantar RT/RW" style="cursor: pointer;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                            </a>
                          </td>
                          <td class="py-3 ">
                            <a class="text-dark text-decoration-none icon y" data-image="<?php echo $data['ktp'] ?>" title="Lihat KTP" style="cursor: pointer;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                            </a>
                          </td>
                          <td class="py-3 ">
                            <a class="text-dark text-decoration-none icon y" title="Lihat KK" data-image="<?php echo $data['kk'] ?>" style="cursor: pointer;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                            </a>
                          </td>
                        </tr>
                      <?php $no++; endwhile;
                        endif;
                      ?>        
                    </tbody>
                </table>
            </div>
        </div>
    </div><!--row-->

  </div><!--container-->
</main>

<div id="gsa" class="d-none" style="position: fixed; left: 0px; top: 0px; z-index: 9999; width: 100%; height: 100%; opacity: 1;">
    <div class="position-absolute bg-dark" style="z-index: 9990; top: 0; left: 0; right: 0; bottom: 0; opacity: 0.85;"></div>
    <div class="h-100 d-flex justify-content-center align-items-center" style="z-index: 9999;">
      <div class="position-relative as" style="z-index: 9999; user-select: none;">
        <div id="close">
          <span class="text-danger position-absolute" style="height: 35px; width: 35px; top: 10; right: 10px; cursor: pointer;" data-feather="x-circle"></span>
        </div>
        <img class="pic img-thumbnail" src="" alt="">
      </div>
    </div>
</div>


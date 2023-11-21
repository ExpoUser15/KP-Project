<main class="col-md-9 ms-sm-auto col-lg-10" style="background-color:  rgb(243 244 246);">
  <h1 class="h2 pt-3">Beranda</h1>
  <div class="container my-4">
  <?php switch(@$_GET['t']){ 
    default:
    ?>

      
      <div class="row my-4 p-3 shadow-sm bg-white">
        <div class="col-md-12 p">
          <div class="d-flex">
                <h6>Acara</h6>
                <div class="d-flex justify-content-end w-100">
                    <div data-bs-toggle="modal" data-bs-target="#tambahAcara" title="tambahkan" class="me-3" style="cursor: pointer"><span data-feather="plus"></span></div>
                </div>
            </div> 
          <hr>
          <div class="py-2" style="overflow: auto; max-height: 20rem">
            <table style="width: 1100px;" class="mt-3">
                  <thead>
                      <tr class="text-secondary fw-bolder">
                          <td class="p-2 ps-0">Kegiatan</td>
                          <td class="p-2 ps-0">Tempat</td>
                          <td>Tanggal</td>
                          <td>Waktu</td>
                          <td>Status</td>
                          <td>Action</td>
                      </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $q = mysqli_query($conn, "SELECT * FROM acara ORDER BY status");
                      while($d = mysqli_fetch_assoc($q)):
                    ?>
                      <tr>
                          <td class="p-2 ps-0"><?php echo $d['nama_acara'] ?></td>
                          <td class="p-2 ps-0"><?php echo $d['tempat'] ?></td>
                          <td class="p-2 ps-0"><?php echo $d['tanggal'] ?></td>
                          <td class="p-2 ps-0"><?php echo $d['waktu'] ?></td>
                          <td class="p-2 ps-0"><?php echo $d['status'] ?></td>
                          <td class="p-2 ps-0">
                            <a class="text-dark text-decoration-none" href="?t=edit&id=<?php echo $d['id']; ?>">
                              <span data-feather="edit"></span>
                            </a>
                            <a class="text-dark text-decoration-none" style="padding-left: 12px;" href="pages/home/action.php?a=del&id=<?php echo $d['id']; ?>">
                              <span data-feather="trash"></span>
                            </a>
                          </td>
                      </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
          </div>
        </div>
      </div>

      <div class="row shadow-sm my-4 bg-white">
        <div class="col-12 p-4">
          <h6>Analisis Pembuatan Surat</h6>
          <hr>
          <div class="row gap-1 mb-2">
            <div class="col-lg-3 col-sm-12">
              <select id="f" class="form-select form-select-sm">
                <option>Bulan</option>
                <option selected>Minggu</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-12" id="col2">
              <input type="text" value="12/11/2023 - 18/11/2023" class="form-control form-control-sm text-secondary" readonly>
            </div>
          </div>
          <div id="analisisChart"></div>
        </div>
      </div>

      <div class="row gap-sm-4 gap-lg-0 my-4">
          <div class="col-sm-12 col-lg-6 p-3 rounded-1 shadow-sm bg-white">
            <h6>Kotak Saran</h6>
            <hr>
            <div class="my-4 w-100" id="analisisChart2"></div>
          </div><!--col-->
          <div class="col-sm-12 col-lg-5 offset-lg-1 p-3 rounded-1 shadow-sm bg-white">
            <h6>Kalender</h6>
            <hr>
            <div id="calendar" style="overflow-x: auto;"></div>
          </div>
      </div><!--row-->
      <?php 
      break;
      
      case 'edit':

        $q = mysqli_query($conn, "SELECT * FROM acara WHERE id = '$_GET[id]'");
        $fe = mysqli_fetch_assoc($q);
      ?>
        <div class="card">
          <div class="card-header d-flex align-items-center">
            <h3 class="h4">Form Edit Acara</h3>
          </div>
          <div class="card-body">
          <form action="pages/home/action.php?a=edit&id=<?php echo $_GET['id'] ?>" method="POST" class="modal-footer">
            <input type="hidden" value="<?php echo 'na-'.time(); ?>" name="id">
            <div class="w-100">
              <label for="na" class="form-label">Nama Acara</label>
              <div>
                <input type="text" value="<?php echo $fe['nama_acara'] ?>" class="form-control form-control-sm mb-3" placeholder="Acara" name="na">
              </div>
            </div>
            <div class="w-100">
              <label for="tempat" class="form-label">Tempat</label>
              <div>
                <input type="text" value="<?php echo $fe['tempat'] ?>" class="form-control form-control-sm mb-3" name="tempat">
              </div>
            </div>
            <div class="w-100">
              <label for="tanggal" class="form-label">Tanggal</label>
              <div>
                <input type="text" value="<?php echo $fe['tanggal'] ?>" class="form-control form-control-sm mb-3" placeholder="Tanggal" name="tanggal">
              </div>
            </div>
            <div class="w-100">
              <label for="tanggal" class="form-label">Waktu</label>
              <div>
                <input type="text" value="<?php echo $fe['waktu'] ?>" class="form-control form-control-sm mb-3" placeholder="Tanggal" name="waktu">
              </div>
            </div>
            <div class="w-100">
              <label for="s" class="form-label">Status</label>
              <div>
                <select name="s" class="form-select">
                  <option <?php if($fe['status'] == 'Menunggu'){echo 'selected';} ?>>Menunggu</option>
                  <option <?php if($fe['status'] == 'Selesai'){echo 'selected';} ?>>Selesai</option>
                  <option <?php if($fe['status'] == 'Dibatalkan'){echo 'selected';} ?>>Dibatalkan</option>
                </select>
              </div>
            </div>
            <div class="d-flex w-100 justify-content-end">
              <button type="submit" class="btn btn-success me-2">Simpan</button>
              <button type="button" class="btn btn-danger dismiss"><a href="index.php" class="text-white text-decoration-none">Batal</a></button>
            </div>
          </form>
					</div>
				</div>
        <?php break; }?>
    </div> <!-- /row -->
  </div> <!--/container-->
</main>

<div class="modal" tabindex="-1" id="tambahAcara">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h5>Tambah Acara</h5>
      </div>
      <form action="pages/home/action.php?a=tambah" method="POST" class="modal-footer">
        <input type="hidden" value="<?php echo 'na-'. time(); ?>" name="id">
        <input type="hidden" value="Menunggu" name="s">
        <div class="w-100">
          <label for="username" class="form-label">Nama Acara</label>
          <div>
            <input type="text" class="form-control form-control-sm mb-3" placeholder="Acara" name="na">
          </div>
        </div>
        <div class="w-100">
          <label for="username" class="form-label">Tempat</label>
          <div>
            <input type="text" class="form-control form-control-sm mb-3" placeholder="Tempat" name="tempat">
          </div>
        </div>
        <div class="w-100">
          <label for="username" class="form-label">Tanggal</label>
          <div>
            <input type="text" class="form-control form-control-sm mb-3" placeholder="01 January 1970" name="tanggal">
          </div>
        </div>
        <div class="w-100">
          <label for="username" class="form-label">Waktu</label>
          <div>
            <input type="text" class="form-control form-control-sm mb-3" placeholder="00:00" name="waktu">
          </div>
        </div>
        <div class="d-flex w-100 justify-content-end">
          <button type="submit" class="btn btn-success me-2">Simpan</button>
          <button type="button" class="btn btn-danger dismiss" data-bs-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>
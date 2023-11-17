<main class="col-md-9 ms-sm-auto col-lg-10" style="background-color:  rgb(243 244 246);">
  <h1 class="h2 pt-3">Beranda</h1>
  <div class="container my-4">
    <div class="row">
  <?php switch(@$_GET['t']){ 
    default:
    ?>

      <div class="col-sm-12 col-md-6 col-xl-6 shadow-sm pt-4 px-4 pb-2 bg-white">
        <div class="d-flex align-items-center justify-content-center rounded-circle" style="background-color: rgb(207 250 254); color: #3b82f6; width: 45px; height: 45px;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
              <circle cx="12" cy="7" r="4" />
            </svg>
        </div>
        <div class="mt-4 w-100">
          <h2 style="line-height: 1.1rem;">3132</h2>
          <div class="text-secondary d-flex justify-content-between">
            <p>Total Users</p> 
            <span class="text-success">
              <p class="d-inline">0.34%</p>
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg>
            </span>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-6 col-xl-6 shadow-sm pt-4 px-4 pb-2 bg-white">
        <div class="rounded-circle d-flex align-items-center justify-content-center" style="background-color:  rgb(207 250 254); color: #3b82f6; width: 45px; height: 45px;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
              <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z" />
              <polyline points="13 2 13 9 20 9" />
            </svg>
        </div>
        <div class="mt-4 w-100">
          <h2 style="line-height: 1.1rem;">3132</h2>
          <div class="text-secondary d-flex justify-content-between">
            <p>Total Pengunjung</p> 
            <span class="text-success">
              <p class="d-inline">0.34%</p>
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg>
            </span>
          </div>
        </div>
      </div>

      </div> <!--/row-->
      
      <div class="row my-4 p-3 shadow-sm bg-white">
        <div class="col-md-12 p">
          <div class="d-flex align-items-center">
                <h6>Acara</h6>
                <div class="d-flex justify-content-end w-100">
                    <div data-bs-toggle="modal" data-bs-target="#tambahAcara" title="tambahkan" class="me-3" style="cursor: pointer"><span data-feather="plus"></span></div>
                </div>
            </div> 
          <hr>
          <div style="overflow: auto;">
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
                      $q = mysqli_query($conn, "SELECT * FROM acara");
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
          <div style="max-width: 220px;">
            <select id="f" class="form-select form-select-sm">
              <option>Bulan</option>
              <option>Minggu</option>
            </select>
          </div>
          <hr>
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
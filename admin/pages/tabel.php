<main class="col-md-9 ms-sm-auto col-lg-10" style="background-color:  rgb(243 244 246);">
  <h1 class="pt-3">Tabel</h1>
  <div class="container my-4">
    <div class="row">
      
      <div class="col-12 shadow-sm p-4 bg-white">
        <h6>Saran</h6>
        <hr class="mt-1 mb-4">
        <form action="" class="mb-2">
          <div class="d-flex justify-content-end align-items-center">

            <div class="w-100 position-relative">
              <div class="position-absolute" style="top: 3.5px; left: 12px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
              </div>
              <input id="searchInput" name="cari" type="text" placeholder="Ketik untuk mencari..." class="form-control form-control-sm w-100" style="padding: 0 2.5rem;">
            </div>

            <button type="submit" class="btn btn-dark ms-2" style="width: 80px;">Cari</button>
          </div>
        </form>
        <div style="overflow-x: auto; height: 20rem;">
          <table class="table table-sm table-borderless">
            <thead>
              <tr class="text-center" style="background-color: rgb(243 244 246); color: rgb(148 163 184);">
                <th scope="col" class="py-3 px-4">No</th>
                <th scope="col" class="py-3 px-4">Nama</th>
                <th scope="col" class="py-3 px-4">RT/RW</th>
                <th scope="col" class="py-3 px-4">No. Telp</th>
                <th scope="col" class="py-3 px-4">Tanggal</th>
                <th scope="col" class="py-3 px-4">Action</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <?php 
                $query = mysqli_query($conn, "SELECT * FROM tb_kotak_saran WHERE kategori = 'saran'");
                $no = 1;
                while($data = mysqli_fetch_assoc($query)):
              ?>
                <tr style="border-bottom: 2px solid rgb(243 244 246);">
                  <td class="py-3 px-4"><?php echo $no ?></td>
                  <td class="py-3 px-4"><?php echo $data['nama'] ?></td>
                  <td class="py-3 px-4"><?php echo $data['rt/rw'];?></td>
                  <td class="py-3 px-4"><?php echo $data['no_telp'] ?></td>
                  <td class="py-3 px-4"><?php echo $data['tanggal'] ?></td>
                  <td class="py-3 d-flex justify-content-center">
                    <a href="?page=tabel&show=true&user=<?php echo $data['id']; ?>" class="text-dark text-decoration-none" title="Lihat Saran">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                    </a>
                    <a href="?page=tabel&delete=true&user=<?php echo $data['id']; ?>" onclick="return confirm('Yakin ingin menghapus data?')" class="text-dark text-decoration-none ms-3" title="Hapus">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                    </a>
                  </td>
                </tr>
              <?php $no++; endwhile; ?>
            </tbody>
          </table>
        </div>
      </div><!--/col-->

    </div><!---/row-->
    <div class="row my-5">
      
      <div class="col-12 shadow-sm p-4 bg-white">
        <h6>Kritik</h6>
        <hr class="mt-1 mb-4">
        <form action="" class="mb-2">
          <div class="d-flex justify-content-end align-items-center">

            <div class="w-100 position-relative">
              <div class="position-absolute" style="top: 3.5px; left: 12px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
              </div>
              <input name="cari" type="text" placeholder="Ketik untuk mencari..." class="form-control form-control-sm w-100" style="padding: 0 2.5rem;">
            </div>

            <button type="submit" class="btn btn-dark ms-2" style="width: 80px;">Cari</button>
          </div>
        </form>
        <div style="overflow-x: auto; height: 20rem;">
          <table class="table table-sm table-borderless">
            <thead>
              <tr class="text-center" style="background-color: rgb(243 244 246); color: rgb(148 163 184);">
                <th scope="col" class="py-3 px-4">No</th>
                <th scope="col" class="py-3 px-4">Nama</th>
                <th scope="col" class="py-3 px-4">RT/RW</th>
                <th scope="col" class="py-3 px-4">No. Telp</th>
                <th scope="col" class="py-3 px-4">Tanggal</th>
                <th scope="col" class="py-3 px-4">Action</th>
              </tr>
            </thead>
            <tbody class="text-center">
                <?php 
                  $query = mysqli_query($conn, "SELECT * FROM tb_kotak_saran WHERE kategori = 'kritik'");
                  $no2 = 1;
                  while($data2 = mysqli_fetch_assoc($query)):
                ?>
                  <tr style="border-bottom: 2px solid rgb(243 244 246);">
                    <td class="py-3 px-4"><?php echo $no2 ?></td>
                    <td class="py-3 px-4"><?php echo $data2['nama']  ?></td>
                    <td class="py-3 px-4"><?php echo $data2['rt/rw']  ?></td>
                    <td class="py-3 px-4"><?php echo $data2['no_telp']  ?></td>
                    <td class="py-3 px-4"><?php echo $data2['tanggal']  ?></td>
                    <td class="py-3 d-flex justify-content-center">
                      <a href="?page=tabel&show=true&user=<?php echo $data2['id']; ?>" class="text-dark text-decoration-none" title="Lihat Saran">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                      </a>
                      <a href="?page=tabel&delete=true&user=<?php echo $data2['id']; ?>" class="text-dark text-decoration-none ms-3" title="Hapus" onclick="return confirm('Yakin ingin menghapus data?')" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                      </a>
                    </td>
                  </tr>
                <?php $no2++; endwhile; ?>
            </tbody>
          </table>
        </div>
      </div><!--/col-->

    </div><!---/row-->
    <div class="row m">
      
      <div class="col-12 shadow-sm p-4 bg-white">
        <h6>Lainnya</h6>
        <hr class="mt-1 mb-4">
        <form action="" class="mb-2">
          <div class="d-flex justify-content-end align-items-center">

            <div class="w-100 position-relative">
              <div class="position-absolute" style="top: 3.5px; left: 12px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
              </div>
              <input name="cari" type="text" placeholder="Ketik untuk mencari..." class="form-control form-control-sm w-100" style="padding: 0 2.5rem;">
            </div>

            <button type="submit" class="btn btn-dark ms-2" style="width: 80px;">Cari</button>
          </div>
        </form>
        <div style="overflow-x: auto;">
          <table class="table table-sm table-borderless">
            <thead>
              <tr class="text-center" style="background-color: rgb(243 244 246); color: rgb(148 163 184);">
                <th scope="col" class="py-3 px-4">No</th>
                <th scope="col" class="py-3 px-4">Nama</th>
                <th scope="col" class="py-3 px-4">RT/RW</th>
                <th scope="col" class="py-3 px-4">No. Telp</th>
                <th scope="col" class="py-3 px-4">Tanggal</th>
                <th scope="col" class="py-3 px-4">Action</th>
              </tr>
            </thead>
            <tbody class="text-center">
                <?php 
                  $query = mysqli_query($conn, "SELECT * FROM tb_kotak_saran WHERE kategori = 'lainnya'");
                  $no3 = 1;
                  while($data3 = mysqli_fetch_assoc($query)):
                ?>
                  <tr style="border-bottom: 2px solid rgb(243 244 246);">
                    <td class="py-3 px-4"><?php echo $no3 ?></td>
                    <td class="py-3 px-4"><?php echo $data3['nama']  ?></td>
                    <td class="py-3 px-4"><?php echo $data3['rt/rw']  ?></td>
                    <td class="py-3 px-4"><?php echo $data3['no_telp']  ?></td>
                    <td class="py-3 px-4"><?php echo $data3['tanggal']  ?></td>
                    <td class="py-3 d-flex justify-content-center">
                      <a href="?page=tabel&show=true&user=<?php echo $data3['id']; ?>" class="text-dark text-decoration-none" title="Lihat Saran">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                      </a>
                      <a href="?page=tabel&delete=true&user=<?php echo $data3['id']; ?>" class="text-dark text-decoration-none ms-3" title="Hapus" onclick="return confirm('Yakin ingin menghapus data?')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                      </a>
                    </td>
                  </tr>
                <?php $no3++; endwhile; ?>
            </tbody>
          </table>
        </div>
      </div><!--/col-->

    </div><!---/row-->

  </div><!--/container-->
</main>

<div class="modal" tabindex="-1" id="">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h5>Simpan Perubahan</h5>
      </div>
      <form action="" class="modal-footer">
        <input type="hidden" name="status" value="selesai">
        <button type="submit" class="btn btn-success">Simpan</button>
        <button type="button" class="btn btn-danger dismiss" data-bs-dismiss="modal">Batal</button>
      </form>
    </div>
  </div>
</div>
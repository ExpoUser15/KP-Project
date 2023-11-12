<main class="col-md-9 ms-sm-auto col-lg-10">
  <h1 class="h2 pt-3">Tugas</h1>
  <div class="container my-4">
    <div class="row shadow-sm p-3 mb-3">
        <div class="col-12 ">
            <h6>Tugas Terbaru</h6>
            <hr>
            <form action="" class="col-12 d-flex justify-content-end align-items-center">
                <div class="position-relative w-100">
                    <div class="position-absolute" style="top: 3.5px; left: 12px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    </div>
                    <input id="searchInput" name="cari" type="text" placeholder="Ketik untuk mencari..." class="form-control form-control-sm w-100" style="padding: 0 2.5rem;">
                </div>
                <button type="submit" name="submit" class="btn btn-dark ms-2" style="width: 80px;">Cari</button>
            </form>
        </div>
        <div class="col-md-12" style="overflow: auto;">
            <table style="width: 900px;" class="mt-3">
                <thead>
                    <tr class="text-secondary fw-bolder">
                        <td class="p-2 ps-0">Nama</td>
                        <td>Jenis Surat</td>
                        <td>Selesai</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-2 ps-0">Gideon Manobi</td>
                        <td>Surat Keterangan Domisili</td>
                        <td class="ps-3">
                          <form action="">
                            <input type="checkbox" data-bs-toggle="modal" data-bs-target="#saveNotif" class="ba" data-id="1">
                          </form>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 ps-0">Gideon Manobi</td>
                        <td>Surat Keterangan Domisili</td>
                        <td class="ps-3">
                            <input id="input" type="checkbox">
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 ps-0">Gideon Manobi</td>
                        <td>Surat Keterangan Domisili</td>
                        <td class="ps-3">
                            <input type="checkbox">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="" class="d-flex justify-content-end align-items-center">
                <div class="position-relative w-100">
                    <div class="position-absolute" style="top: 3.5px; left: 12px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    </div>
                    <input id="searchInput" name="cari" type="text" placeholder="Ketik untuk mencari..." class="form-control form-control-sm w-100" style="padding: 0 2.5rem;">
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
                      <tr style="border-bottom: 2px solid rgb(243 244 246);">
                        <td class="py-3 px-4">1</td>
                        <td class="py-3 px-4">random</td>
                        <td class="py-3 px-4">Surat Keterangan Domisili</td>
                        <td class="py-3 px-4">placeholder</td>
                        <td class="py-3 px-4">text</td>
                        <td class="py-3 px-4">
                            <p class="bg-danger p-2 text-white px-3 rounded-3">Proses</p>
                        </td>
                        <td class="py-3 ">
                          <a class="text-dark text-decoration-none icon y" data-target="sk" title="Lihat Surat Pengantar RT/RW" style="cursor: pointer;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                          </a>
                        </td>
                        <td class="py-3 ">
                          <a class="text-dark text-decoration-none icon y" data-target="ktp" title="Lihat KTP" style="cursor: pointer;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                          </a>
                        </td>
                        <td class="py-3 ">
                          <a class="text-dark text-decoration-none icon y" title="Lihat KK" data-target="kk" style="cursor: pointer;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                          </a>
                        </td>
                      </tr>         
                    </tbody>
                </table>
            </div>
        </div>
    </div><!--row-->

  </div><!--container-->
</main>
<div class="modal" tabindex="-1" id="saveNotif">
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



<div id="gsa" class="d-none" style="position: fixed; left: 0px; top: 0px; z-index: 9999; width: 100%; height: 100%; opacity: 1;">
    <div class="position-absolute bg-dark" style="z-index: 9990; top: 0; left: 0; right: 0; bottom: 0; opacity: 0.85;"></div>
    <div class="h-100 d-flex justify-content-center align-items-center" style="z-index: 9999;">
      <div class="position-relative as" style="z-index: 9999; user-select: none;">
        <div id="close">
          <span class="text-danger position-absolute" style="height: 35px; width: 35px; top: 10; right: 10px; cursor: pointer;" data-feather="x-circle"></span>
        </div>
          <img class="pic img-thumbnail" src="img/ddd.png" alt="">
        </div>
    </div>
</div>


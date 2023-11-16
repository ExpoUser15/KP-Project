<?php 
$s = $_SESSION['username'];
  $q = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '$s'");
  $re = mysqli_fetch_assoc($q);
?>
<main class="col-md-9 ms-sm-auto col-lg-10">
  <h1 class="h2 pt-3">Admin</h1>
  <div class="container my-4">
    <div class="row align-items-center">
      <div class="col-sm-2  d-flex align-items-center">
          <h6 class="form-label">Username: </h6>
      </div>
      <div class="col-sm-6 ">
          <input type="text" class="form-control form-control-sm text-secondary w-50" value="<?php echo $re['username']; ?>" readonly/>
      </div>
    </div>
    <div class="row align-items-center mt-3">
      <div class="col-sm-2 d-flex align-items-center">
          <h6 class="form-label">Password: </h6>
      </div>
      <div class="col-sm-6  d-flex position-relative">
          <input type="password" class="form-control form-control-sm text-secondary w-50 pass" value="<?php echo $re['password']; ?>" readonly/>
          <button class="see">Lihat</button>
      </div>
      <div class="row mt-4">
        <div class="col-2">
          <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#edit">Edit</button>
        </div>
      </div>
    </div>
    <div class="row my-5">
      <div class="col">
        <div style="overflow-x: auto;">
          <h5>Daftar Admin</h5>
          <hr>
            <table class="table table-sm table-borderless">
              <thead>
                <tr class="text-center" style="background-color: rgb(243 244 246); color: rgb(148 163 184);">
                  <th scope="col" class="py-3 px-4">No</th>
                  <th scope="col" class="py-3 px-4">Username</th>
                  <th scope="col" class="py-3 px-4">Tanggal Dibuat</th>
                </tr>
              </thead>
              <tbody class="text-center">
                <?php 
                  $query = mysqli_query($conn, "SELECT * FROM tb_admin");
                  $no = 1;
                  while($data = mysqli_fetch_assoc($query)):
                ?>
                  <tr style="border-bottom: 2px solid rgb(243 244 246);">
                    <td class="py-3 px-4"><?php echo $no ?></td>
                    <td class="py-3 px-4"><?php echo $data['username'] ?></td>
                    <td class="py-3 px-4"><?php echo $data['tanggal_dibuat'] ?></td>
                  </tr>
                <?php $no++; endwhile; ?>
              </tbody>
            </table>
          </div>
          <button class="btn btn-success d-flex" data-bs-toggle="modal" data-bs-target="#tambahkan">Tambahkan Admin
            <span data-feather="plus" class=" ms-2 align-self-center"></span>
          </button>
        </div>
    </div><!--row-->

  </div><!--container-->
</main>

<div class="modal" tabindex="-1" id="tambahkan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h5>Tambahkan Admin</h5>
      </div>
      <form action="pages/admin/action.php?act=add" method="POST" class="modal-footer">
        <div class="w-100">
          <label for="username" class="form-label">Username</label>
          <div>
            <input type="text" class="form-control mb-3" placeholder="Username" name="username">
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

<?php 
  $addad = $_SESSION['username'];
  $da = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '$addad'");
  $fe = mysqli_fetch_assoc($da);
?>
<div class="modal" tabindex="-1" id="edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h5>Edit</h5>
      </div>
      <form action="pages/admin/action.php?act=edit" method="POST" class="modal-footer">
        <input type="hidden" value="<?php echo $fe['id'] ?>" name="id">
        <input type="hidden" value="<?php echo $fe['tanggal_dibuat'] ?>" name="tb">
        <div class="w-100">
          <label for="username" class="form-label">Username</label>
          <div>
            <input type="text" value="<?php echo $fe['username'] ?>" class="form-control mb-3" placeholder="Username" name="username">
          </div>
        </div>
        <div class="w-100">
          <label for="username" class="form-label">Password</label>
          <div>
            <input type="password" value="<?php echo $fe['password'] ?>" class="form-control mb-3" placeholder="Password" name="password">
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


<script>
  const pass = document.querySelector('.pass');
  const see = document.querySelector('.see');
  see.addEventListener('click', () => {
    if(pass.type == 'text'){
      pass.type = 'password';
    }else{
      pass.type = 'text';
    }
  })
</script>
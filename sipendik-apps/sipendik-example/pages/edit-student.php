<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php?page=students">Students</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit Student</li>
  </ol>
</nav>
<div class="row">
  <div class="col-9">
    <div class="card rounded-0 p-2">
      <div class="card-body">
        <?php
        $query = "SELECT * FROM tb_student WHERE id = '$_GET[id]'";
        $result = mysqli_query($conn, $query);
        while ($data = mysqli_fetch_object($result)) {

        ?>
          <h5 class="mb-4">Form Edit Student</h5>
          <form action="config/crud.php?aksi=update-student&id=<?= $data->id; ?>" method="post" enctype="multipart/form-data">
            <div class="row mb-2 align-items-center">
              <label for="nisn" class="col-3 form-label">N I S N</label>
              <div class="col-9">
                <input class="form-control form-control-sm" type="text" maxlength="10" minlength="10" name="nisn" value="<?= $data->nisn; ?>" required>
              </div>
            </div>
            <div class="row mb-2 align-items-center">
              <label for="nama" class="col-3 form-label">Full Name</label>
              <div class="col-9">
                <input class="form-control form-control-sm" type="text" name="nama_siswa" value="<?= $data->nama_siswa; ?>" required>
              </div>
            </div>
            <div class="row mb-2">
              <label for="jk" class="col-3 form-label">Gender</label>
              <div class="col-3">
                <div class="d-flex">
                  <div class="mb-1 me-2">
                    <input class="form-check-input" type="radio" value="L" name="jk" <?= $data->jk == 'L' ? 'checked' : ''; ?> required>
                    <label class="form-check-label" for="jkL">Male</label>
                  </div>
                  <div class="mb-1">
                    <input class="form-check-input" type="radio" value="P" name="jk" <?= $data->jk == 'P' ? 'checked' : ''; ?> required>
                    <label class="form-check-label" for="jkP">Female</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-2 align-items-center">
              <label for="tgl_lahir" class="col-3 form-label">Date of Birth</label>
              <div class="col-3">
                <input class="form-control form-control-sm" type="date" name="tgl_lahir" value="<?= $data->tgl_lahir; ?>" required>
              </div>
              <label for="no_telp" class="col-2 form-label">Phone</label>
              <div class="col-4">
                <input class="form-control form-control-sm" type="text" name="no_telp" minlength="12" maxlength="13" value="<?= $data->no_telp; ?>" required>
              </div>
            </div>
            <div class="row mb-2 align-items-center">
              <label for="id_kelas" class="col-3 form-label">Class</label>
              <div class="col-9">
                <select class="form-select form-select-sm" name="id_kelas" required>
                  <option value="1" <?= $data->id_kelas == '1' ? 'selected' : ''; ?>>XI RPL</option>
                  <option value="2" <?= $data->id_kelas == '2' ? 'selected' : ''; ?>>XI DPIB</option>
                </select>
              </div>
            </div>
            <div class="row mb-2">
              <label for="id_kelas" class="col-3 form-label">Address</label>
              <div class="col-9">
                <textarea class="form-control form-control-sm" name="alamat" rows="3"><?= $data->alamat; ?></textarea>
              </div>
            </div>
            <div class="row mb-2">
              <label for="foto" class="col-3 form-label">Photo</label>
              <div class="col-9">
                <input class="form-control form-control-sm mb-2" type="file" name="foto_siswa">
                <div class="">
                  <img class="object-fit-cover rounded-2" width="80" height="100" src="assets/img/<?= $data->foto_siswa; ?>" alt="<?= $data->foto_siswa; ?>">
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-end gap-2">
              <a href="index.php?page=students" class="btn btn-danger btn-sm float-end"><i class="bi bi-x-lg"></i> Cancel</a>
              <button class="btn btn-warning btn-sm float-end" type="reset"><i class="bi bi-arrow-counterclockwise"></i> Reset</button>
              <button class="btn btn-primary btn-sm float-end" type="submit"><i class="bi bi-save"></i> Save</button>
            </div>
          </form>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="col-3">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, maiores!</p>
  </div>
</div>
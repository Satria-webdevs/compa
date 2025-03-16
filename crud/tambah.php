<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h4>CRUD</h4>
                
                <form method="post" action="tambah_aksi.php" enctype="multipart/form-data">
                <div class="card shadow rounded-4 mb-3 p-4">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, corrupti.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, esse. Lorem ipsum 
                        dolor sit amet consectetur, adipisicing elit. Placeat, voluptas. Lorem ipsum dolor 
                        sit amet.
                    </p>
                    <table>
                    <hr>
                    <div class="mb-3 row">
                        <label for="NISN" class="col-sm-2 col-form-label">N I S N</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="NISN" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="NAMA_SISWA" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="NAMA_SISWA" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="JK" class="col-sm-2">Jenis Kelamin</label>
                        <div class="col-sm-5 col-form-check form-check-inline" name="JK">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="JK" id="JK1" value="L" required>
                                <label class="form-check-label" for="JK1">
                                    Laki-Laki
                                </label>
                            </div>
                            <div class="form-check form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="JK" id="JK2" value="p" required>
                                <label class="form-check-label" for="JK2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="TANGGAL_LAHIR" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10 col-form-check">
                            <input type="date" class="form-control" name="TANGGAL_LAHIR" required               >
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="KELAS" class="col-sm-2">Kelas</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="KELAS">
                                <option selected>Open this select menu</option>
                                <option value="XI RPL 1">XI RPL 1</option>
                                <option value="XI RPL 2">XI RPL 2</option>
                                <option value="XI RPL 3">XI RPL 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Alamat" class="col-2">Alamat</label>
                        <div class="col-sm-10">
                            <textarea name="Alamat" id="Alamat" class="form-control" rows="4" placeholder="Tambahkan alamat"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-2" for="foto_siswa">Foto</label>
                        <div class="col-sm-10">
                            <input type="file" name="foto_siswa">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-5 justify-content-end">
                            <button class="btn btn-primary me-md-2" type="submit" href="index.php">Tambahkan Data</button>
                            <button class="btn btn-danger me-md-2" type="submit" href="index.php">Batal</button>
                        </div>
                    </div>
                </table>
            </div>
            </form>
        </div>
    </div>
</div>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
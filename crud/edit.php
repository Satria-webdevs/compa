<?php
include 'koneksi.php'; 

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="poppins-regular">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>Edit Data Siswa</h4>    
                    
                    <?php  
                $NO = $_GET['NO'];
                $query = mysqli_query($koneksi, "SELECT * FROM tabel_siswa WHERE NO='$NO'");
                while ($data = mysqli_fetch_array($query)){
                    ?>
                    <form method="post" action="edit_aksi.php?NO=<?= $data['NO']; ?>" enctype="multipart/form-data">
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
                                <input type="text" class="form-control" name="NISN" value="<?= $data['NISN']; ?>" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NAMA_SISWA" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="NAMA_SISWA" value="<?= $data['NAMA_SISWA']; ?>" required>
                            </div>
                            <div class="mb-3 row">
                                <label for="JK" class="col-sm-2">Jenis Kelamin</label>
                                <div class="col-sm-5 col-form-check form-check-inline" value="<?= $data['JK']; ?>" name="JK">
                                    <div class="d-flex">
                                    <div class="form-check form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="JK" id="JK1" value="L" <?= $cek_status =  $data['JK'] == "L" ? "CHECKED" : ""; ?> required>
                                        <label class="form-check-label" for="JK1">
                                            Laki-Laki
                                        </label>
                                    </div>
                                    <br>
                                    <div class="form-check form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="JK" id="JK2" value= "p"  <?= $cek_status =  $data['JK'] == "P" ? "CHECKED" : ""; ?> required>
                                        <label class="form-check-label" for="JK2">
                                            Perempuan
                                        </label>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="TANGGAL_LAHIR" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10 col-form-check">
                                <input type="date" class="form-control" name="TANGGAL_LAHIR" value="<?= $data['TANGGAL_LAHIR']; ?>" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="KELAS" class="col-sm-2">Kelas</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="KELAS">
                                    <option selected disabled>Open this select menu</option>
                                    <option value="XI RPL 1" <?= $cek_status =  $data['KELAS'] == "XI RPL 1" ? "selected" : ""; ?>>XI RPL 1</option>
                                    <option value="XI RPL 2" <?= $cek_status =  $data['KELAS'] == "XI RPL 2" ? "selected" : ""; ?>>XI RPL 2</option>
                                    <option value="XI RPL 3" <?= $cek_status =  $data['KELAS'] == "XI RPL 3" ? "selected" : ""; ?>>XI RPL 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Alamat" class="col-2">Alamat</label>
                            <div class="col-sm-10">
                                <textarea name="Alamat" id="Alamat" class="form-control" rows="4"><?php echo $data['Alamat']; ?></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-2" for="foto_siswa">Foto</label>
                            <div class="col-sm-10">
                                <input type="file" name="foto_siswa" value="<?= $data['foto_siswa']; ?>" class="margin-top form-control"><br>
                                <img width="80px" height="100px" src="image/<?= $data['foto_siswa']?>" alt="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-5 justify-content-end">
                                <button class="btn btn-outline-primary me-md-2" type="submit" href="index.php"><img src="file.png" alt="" width="20px" height="20px"></button>
                                <button class="btn btn-outline-danger me-md-2" type="submit" href="index.php"><img src="delete (1).png" alt="" width="20px" height="20px"></button>
                            </div>
                        </div>
                    </table>
                    </div>
                </form>
            <?php
            }
            ?>
            </div>
        </div>
    </div>
</div>
</div>


<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
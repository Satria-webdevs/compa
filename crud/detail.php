<?php
include 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="poppins-regular">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>CRUD(Create, Read, Update, Delete)</h3>
                    <?php  
                
                $NO = $_GET['NO'];
                $query = mysqli_query($koneksi, "SELECT * FROM tabel_siswa WHERE NO='$NO'");
                while ($data = mysqli_fetch_array($query)){
                    ?>
                <form action="index.php" method="get">
                    <div class="card shadow rounded-4 mb-3 p-4">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="justify-content-center">Detail data siswa</h3>
                        </div>
                        <div class="col-6">
                            <a href="edit.php?NO=<?php echo $data['NO']; ?>" class="float-end btn btn-outline-primary"><img src="file.png" alt="" width="20px" height="20px"></a>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-4">
                            <img width="320px" height="420px" src="image/<?= $data['foto_siswa']?>" alt="">
                        </div>
                        <div class="col-8">

                        <div class="row mb-3">
                            <label for="NamaLengkap" class="col-4 form-label">Nama Lengkap</label>
                            <div class="col-8 form-label">
                                <span id="NamaLengkap" class="fw-bold">: <?= $data['NAMA_SISWA']; ?></span>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NISN" class="col-4 form-label">N I S N</label>
                            <div class="col-8">
                                <span id="NISN" class="fw-bold" name="NISN">: <?= $data['NISN']; ?></span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="JK" class="col-4 form-label">Jenis Kelamin</label>
                            <div class="col-8 form-label">
                                <span id="JK" class="fw-bold">: <?= $data['JK']; ?></span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Kelas" class="col-4 form-label">Kelas</label>
                            <div class="col-8 form-label">
                                <span id="Kelas" class="fw-bold">: <?= $data['KELAS']; ?></span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tgl_lahir" class="col-4 form-label">Tanggal Lahir</label>
                            <div class="col-8 form-label">
                                <span id="tgl_lahir" class="fw-bold">: <?= $data['TANGGAL_LAHIR']; ?></span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="alamat" class="col-4 form-label">Alamat</label>
                            <div class="col-8 form-label">
                                <span id="alamat" class="fw-bold">: <?= $data['Alamat']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="index.php" class="btn btn-outline-danger float-end"><img src="image/delete.png" alt="" width="20px" height="20px"></a>
                    </div>
                </div>
                </div>
                
                </form>
            <?php 
                }
                ?>
            </div>
        </div>
    </div>
</div>


<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
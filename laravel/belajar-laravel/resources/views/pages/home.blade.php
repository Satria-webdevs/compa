@extends('layout.app')

@section('content')
    <h4>halaman home</h4>
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
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <h4>CRUD (CREATE, READ, UPDATE, DELETE)</h4>
                    <div class="card shadow rounded-5 p-5">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam natus sequi repellendus
                            odit commodi enim?</p>
                        <hr>
                        <a class="btn btn-outline-primary mb-5 float-end" role="button" href="tambah.php">Tambahkan data
                            siswa</a>
                        <table class="table table-bordered">
                            <tr>
                                <th>NO</th>
                                <th>NAMA SISWA</th>
                                <th>JENIS KELAMIN</th>
                                <th>KELAS</th>
                                <th>TANGGAL LAHIR</th>
                                <th>FOTO</th>
                                <th>OPSI</th>
                            </tr>
                            <?php
                    $no = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM TABEL_SISWA");
                    while ($data = mysqli_fetch_array($query)) {

                    ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td> </td>
                                <td><?= $data['JK'] ?></td>
                                <td><?= $data['KELAS'] ?></td>
                                <td><?= $data['TANGGAL_LAHIR'] ?></td>
                                <td><img width="40px" height="60px" src="image/<?= $data['foto_siswa'] ?>"
                                        alt=""></td>
                                <td>
                                    <a href="detail.php?NO=<?php echo $data['NO']; ?>" class="btn btn-sm btn-outline-primary"
                                        role="button"><img src="file.png" alt="" width="20px" height="20px"></a>
                                    <a class="btn btn-outline-danger btn-sm" href="hapus.php?NO=<?php echo $data['NO']; ?>"
                                        role="button"><img src="delete (1).png " alt="" width="20px"
                                            height="20px"></a>
                                </td>
                            </tr>
                            <?php
                    }
                    ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
@endsection

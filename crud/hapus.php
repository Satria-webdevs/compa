<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari url
$NO = $_GET['NO'];

$query_foto = "SELECT foto_siswa from tabel_siswa where NO = ?";
$stmt = $koneksi->prepare($query_foto);
$stmt->bind_param("i", $NO);
$stmt->execute();
$stmt->bind_result($oldFileName);
$stmt->fetch();
$stmt->close();
// menghapus dari database
mysqli_query($koneksi, "DELETE FROM tabel_siswa WHERE NO='$NO'");
if($oldFileName && file_exists("image/" . $oldFileName)) {
    unlink("image/" . $oldFileName);
}
// mengalihkan kembali ke index.php
header('location:index.php');


?>
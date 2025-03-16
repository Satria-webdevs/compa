<?php  
// koneksi
include 'koneksi.php';

$NO = $_POST['NO'] ?? '';
$NAMA_SISWA = $_POST['NAMA_SISWA'];
$NISN = $_POST['NISN'];
$JK = $_POST['JK'];
$TANGGAL_LAHIR = $_POST['TANGGAL_LAHIR'];
$KELAS = $_POST['KELAS'];
$Alamat = $_POST['Alamat'];

$rand = rand();
$ekstensi = array('png','jpg','jpeg','gif');
$filename = $_FILES['foto_siswa']['name'];
$size = $_FILES['foto_siswa']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi)){
    header('tambah.php?alert=format_salah');
} else {
    if ($size < 1044070) {
        $foto_siswa = $rand . '_' .$filename;
        move_uploaded_file($_FILES['foto_siswa']['tmp_name'], 'image/'.$rand.'_'.$filename);
        mysqli_query($koneksi, "INSERT INTO tabel_siswa VALUES
        (NULL,'$NISN','$NAMA_SISWA','$JK','$KELAS','$TANGGAL_LAHIR','$Alamat','$foto_siswa')");
        header("location:index.php?alert=berhasil");
    } else {
        header("location:tambah.php?alert=gagal");
    }
}


?>
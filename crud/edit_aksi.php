<?php
include 'koneksi.php';

$NO = $_GET['NO'];
$NAMA_SISWA = $_POST['NAMA_SISWA'];
$NISN = $_POST['NISN'];
$JK = $_POST['JK'];
$TANGGAL_LAHIR = $_POST['TANGGAL_LAHIR'];
$KELAS = $_POST['KELAS'];
$Alamat = $_POST['Alamat'];
$foto_siswa = $_POST['Foto'];   


$rand = rand();
$ekstensi = array('png','jpg','jpeg','gif');
$filename = $_FILES['foto_siswa']['name'];
$size = $_FILES['foto_siswa']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

$query_foto = "SELECT foto_siswa from tabel_siswa where NO = ?";
$stmt = $koneksi->prepare($query_foto);
$stmt->bind_param("i", $NO);
$stmt->execute();
$stmt->bind_result($oldFileName);
$stmt->fetch();
$stmt->close();

if ($filename != null) {
    if(!in_array($ext,$ekstensi)){
        header('edit.p hp?alert=format_salah');
    } else {
        if ($size < 1044070) {
            if($oldFileName && file_exists("image/" . $oldFileName)) {
                unlink("image/" . $oldFileName);
            }

            $foto_siswa = $rand . '_' .$filename;
            move_uploaded_file($_FILES['foto_siswa']['tmp_name'], 'image/'.$rand.'_'.$filename);
            mysqli_query($koneksi, "UPDATE tabel_siswa SET NAMA_SISWA='$NAMA_SISWA', 
            NISN='$NISN', JK='$JK', TANGGAL_LAHIR='$TANGGAL_LAHIR', KELAS='$KELAS', Alamat='$Alamat', foto_siswa='$foto_siswa' where NO='$NO'");
            
            header("location:index.php?alert=berhasil");
        } else {
            header("location:edit.php?alert=gagal");
        }
    }
} else {
    mysqli_query($koneksi, "UPDATE tabel_siswa SET NAMA_SISWA='$NAMA_SISWA', 
    NISN='$NISN', JK='$JK', TANGGAL_LAHIR='$TANGGAL_LAHIR', KELAS='$KELAS', Alamat='$Alamat' where NO='$NO'");
    header("location:detail.php?NO=$NO");        
}

?>
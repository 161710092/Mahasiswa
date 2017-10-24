<?php
include ('koneksi.php');

$nama     = $_POST['nama'];
$nim      = $_POST['nim'];
$id_wali  = $_POST['id_wali'];
$id_dosen = $_POST['id_dosen'];

$tambah   = "INSERT INTO mahasiswa SET nama='$nama', nim='$nim', id_wali='$id_wali', id_dosen='$id_dosen'";
mysqli_query($koneksi,$tambah);
header("location:lihatdatamahasiswa.php");
?>
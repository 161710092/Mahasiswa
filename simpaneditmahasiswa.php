<?php
include ('koneksi.php');

$id       = $_POST['id'];
$nama     = $_POST['nama'];
$nim      = $_POST['nim'];
$id_wali  = $_POST['id_wali'];
$id_dosen = $_POST['id_dosen'];

$edit     = "UPDATE mahasiswa SET nama= '$nama', nim='$nim', id_wali='$id_wali', id_dosen='$id_dosen' WHERE id='$id'";

mysqli_query($koneksi,$edit);
header("location:lihatdatamahasiswa.php");
?>
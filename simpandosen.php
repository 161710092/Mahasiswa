<?php
include ('koneksi.php');

$nama   = $_POST['nama'];
$nipd   = $_POST['nipd'];

$tambah = "INSERT INTO dosen SET nama= '$nama', nipd='$nipd'";
mysqli_query($koneksi,$tambah);
header("location:lihatdatadosen.php");
?>
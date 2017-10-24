<?php
include ('koneksi.php');

$id   = $_POST['id'];
$nama = $_POST['nama'];
$nipd = $_POST['nipd'];

$edit = "UPDATE dosen SET nama= '$nama', nipd='$nipd' WHERE id='$id'";

mysqli_query($koneksi,$edit);
header("location:lihatdatadosen.php");
?>
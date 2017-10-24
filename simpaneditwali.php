<?php
include ('koneksi.php');

$id   = $_POST['id'];
$nama = $_POST['nama'];

$edit = "UPDATE wali SET nama= '$nama' WHERE id='$id'";

mysqli_query($koneksi,$edit);
header("location:lihatdatawali.php");
?>
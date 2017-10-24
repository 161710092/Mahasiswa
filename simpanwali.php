<?php
include ('koneksi.php');

$nama   = $_POST['nama'];

$tambah = "INSERT INTO wali SET nama= '$nama'";
mysqli_query($koneksi,$tambah);
header("location:lihatdatawali.php");
?>
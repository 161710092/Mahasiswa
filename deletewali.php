<?php
include ('koneksi.php');

$id     = $_GET['id'];

$delete = "DELETE FROM wali WHERE id='$id'";

mysqli_query($koneksi,$delete);
header("location:lihatdatawali.php");
?>
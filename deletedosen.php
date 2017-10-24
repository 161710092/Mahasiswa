<?php
include ('koneksi.php');

$id     = $_GET['id'];

$delete = "DELETE FROM dosen WHERE id='$id'";

mysqli_query($koneksi,$delete);
header("location:lihatdatadosen.php");
?>
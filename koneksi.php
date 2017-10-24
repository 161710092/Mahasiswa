<?php
$host = "localhost";
$user = "root";
$pass = "";

$database = "sakola";

$koneksi = mysqli_connect($host,$user,$pass,$database)
or die("database tidak konek");
?>
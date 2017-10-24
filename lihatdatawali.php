<!DOCTYPE html>
<html>
<head>
	<title>Lihat Data Wali</title>
</head>
<body>
	<center><h3>DATA WALI</h3></center><br>
	<center><a href="tambahwali.php">&plus; Tambah Data Wali</a></center>
	<br>
	<center>
	<table border="4">
		<th>Nomor</th>
		<th>Nama Wali</th>
		<th colspan="3">Opsi</th>
		<?php
		include('koneksi.php');
		$ma = mysqli_query($koneksi,"SELECT * FROM wali");
		$no = 1;
		foreach ($ma as $data) {
			echo "<tr>
			<td>$no</td>
			<td>".$data['nama']."</td>
			<td><a href='showwali.php?id=$data[id]'>Show</a></td>
			<td><a href='editwali.php?id=$data[id]'>Edit</a></td>
			<td><a href='deletewali.php?id=$data[id]'>Delete</a></td>
			</tr>";
			$no++;
		}
		?>
	</table>
	</center>
</body>
</html>
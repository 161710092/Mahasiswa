<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<table border="2">
		<th>Nomor</th>
		<th>Nama Dosen</th>
		<th>Nomor Induk Pengajar Dosen</th>
		<th colspan="3">Opsi</th>
		<?php
		include('koneksi.php');
		$ma = mysqli_query($koneksi,"SELECT * FROM dosen");
		$no = 1;
		foreach ($ma as $data) {
			echo "<tr>
			<td>$no</td>
			<td>".$data['nama']."</td>
			<td>".$data['nipd']."</td>
			<td><a href = 'show.php?id=$data[id]'>Show</a></td>
			<td><a href = 'edit.php?id=$data[id]'>Edit</a></td>
			<td><a href = 'delete.php?id=$data[id]'>Delete</a></td></tr>";
			$no++;
		}
		?>
	</table>
	<br>
	<br>
	<a href="tambah.php">&Lt; Masukan Data Dosen</a>
	</center>
</body>
</html>
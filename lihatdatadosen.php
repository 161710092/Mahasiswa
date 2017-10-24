<!DOCTYPE html>
<html>
<head>
	<title>Lihat Data Dosen</title>
</head>
<body>
	<center><h2>DATA DOSEN</h2></center><br>
	<center><a href="tambahdosen.php">&plus; Tambah Data Dosen</a></center>
	<br>
	<center>
	<table border="4">
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
			<td><a href='showdosen.php?id=$data[id]'>Show</a></td>
			<td><a href='editdosen.php?id=$data[id]'>Edit</a></td>
			<td><a href='deletedosen.php?id=$data[id]'>Delete</a></td>
			</tr>";
			$no++;
		}
		?>
	</table>
	</center>
</body>
</html>
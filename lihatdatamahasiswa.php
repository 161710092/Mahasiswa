<!DOCTYPE html>
<html>
<head>
	<title>Lihat Data Mahasiswa</title>
</head>
<body>
	<center><h2>DATA MAHASISWA</h2></center><br>
	<center><a href="tambahmahasiswa.php">&plus; Tambah Data Mahasiswa</a></center>
	<br>
	<center>
	<table border="4">
		<th>Nomor</th>
		<th>Nama Mahasiswa</th>
		<th>Nomor Induk Mahasiswa</th>
		<th>Nama Wali</th>
		<th>Nama Dosen</th>
		<th colspan="3">Opsi</th>
		<?php
		include('koneksi.php');
		$ma = mysqli_query($koneksi,"SELECT mahasiswa.id,mahasiswa.nama,mahasiswa.nim,dosen.nama as nama_dosen,wali.nama as nama_wali FROM mahasiswa JOIN dosen on dosen.id=mahasiswa.id_dosen JOIN wali on wali.id=mahasiswa.id_wali");
		$no = 1;
		foreach ($ma as $data) {
			echo "<tr>
			<td>$no</td>
			<td>".$data['nama']."</td>
			<td>".$data['nim']."</td>
			<td>".$data['nama_wali']."</td>
			<td>".$data['nama_dosen']."</td>
			<td><a href='showmahasiswa.php?id=$data[id]'>Show</a></td>
			<td><a href='editmahasiswa.php?id=$data[id]'>Edit</a></td>
			<td><a href='deletemahasiswa.php?id=$data[id]'>Delete</a></td>
			</tr>";
			$no++;
		}
		?>
	</table>
	</center>
</body>
</html>
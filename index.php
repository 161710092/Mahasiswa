<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
</head>
<body>
	<center>
		<h2>Data Dosen</h2>
		<a href="tambahdosen.php">&plus; Tambah Data</a><br><br>
		<table border=3>
			<th>Nomor</th>
			<th>Nama Dosen</th>
			<th colspan="3">Opsi</th>

			<?php
				include('koneksi.php');

				$dosen = mysqli_query($koneksi,"SELECT * FROM dosen");
				if (mysqli_num_rows($dosen) == 0) {
					echo '<tr><td colspan="3"><center>Tidak Ada Data</center></td></tr>';
				}else{
					$no = 1;
					foreach ($dosen as $data) {
						echo '<tr>';
						echo '<td>'.$no++.'</td>';
						echo '<td>'.$data['nama'].'</td>';
						echo '<td><a href="showdosen.php?id='.$data['id'].'>Show</td>';
						echo '<td><a href="editdosen.php?id='.$data['id'].'>Edit</td>';
						echo '<td><a href="deletedosen.php?id='.$data['id'].'>Delete</td>';
						echo '</tr>';
					}
				}
			?>
		</table>
	</center>
</body>
</html>
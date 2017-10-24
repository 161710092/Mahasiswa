<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
</head>
<body>
	<?php
		include('koneksi.php');
		$id   = $_GET['id'];
		$mhs  = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE id='$id'");
		$data = mysqli_fetch_array($mhs);
	?>
	<center><h3>Show Data Mahasiswa</h3></center>
	<fieldset style="width: 50%; margin: auto;">
		<legend>Form Show Biodata Mahasiswa</legend>
		<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
		<p>
			Nama Lengkap Mahasiswa <br>
			<input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" readonly>
		</p>
		<p>
			Nomor Induk Mahasiswa <br>
			<input type="text" name="nim" class="form-control" value="<?php echo $data['nim'] ?>" readonly>
		</p>
		<p>
			Nama Wali <br>
		</p>
		<p>
			Nama Dosen <br>
			<input type="text" name="id_dosen" class="form-control" value="<?php echo $data['id_dosen'] ?>" readonly>
		</p>
	</fieldset>
</form>
</body>
</html>
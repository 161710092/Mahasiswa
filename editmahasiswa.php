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
	<center><h3>Edit Data Mahasiswa</h3></center>
	<fieldset style="width: 50%; margin: auto;">
		<legend>Form Edit Biodata Mahasiswa</legend>
		<form action="simpaneditmahasiswa.php" method="post">
			<input type="hidden" name="id" value="<?php echo $data['id'];?>">
			<p>
				Nama Lengkap Mahasiswa<br>
				<input type="text" name="nama" class="form-control" value="<?php echo $data['nama'] ?>" required>
			</p>
			<p>
				Nomor Induk Mahasiswa <br>
				<input type="text" name="nim" class="form-control" value="<?php echo $data['nim'] ?>">
			</p>
			<p>
				Nama Wali <br>
				<?php
				include('koneksi.php');
				$wali = mysqli_query($koneksi, "SELECT * FROM wali");
				?>
				<select name="id_wali">
					<option>Pilih Wali</option>
					<?php
						foreach ($wali as $data) {
					?>
					<option value="<?php echo $data['id'];?>"><?php echo $data['nama']?></option>
					<?php
						}
					?>
				</select>
			</p>
			<p>
				Nama Dosen <br>
				<?php
				include('koneksi.php');
				$dosen = mysqli_query($koneksi, "SELECT * FROM dosen");
				?>
				<select name="id_dosen">
					<option>Pilih Dosen</option>
					<?php
						foreach ($dosen as $data) {
					?>
					<option value="<?php echo $data['id'];?>"><?php echo $data['nama']?></option>
					<?php
						}
					?>
				</select>
			</p>
			<p>
				<input type="submit" value="Simpan">
			</p>
		</form>
	</fieldset>
	<br/>
	<center><a href="lihatdatamahasiswa.php" class="btn btn-primary">&Lt; Lihat Data</a></center>
</body>
</html>
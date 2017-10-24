<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 align="center">Input Biodata Mahasiswa</h1>
	<fieldset style="width: 50%; margin: auto;">
		<legend>Form Input Biodata Mahasiswa</legend>
		<form action="simpanmahasiswa.php" method="post">
		<?php
			include('koneksi.php');

			$mhs  = mysqli_query($koneksi,"SELECT * FROM wali WHERE nama");

		?>
			<p>
				Nama Lengkap <br/>
				<input type="text" name="nama" required />
			</p>
			<p>
				Nomor Induk Mahasiswa <br/>
				<textarea name="nim" cols="50" required></textarea>
			</p>
			<p>
				Nama Wali <br>
				<?php
				include('koneksi.php');
				$wali = mysqli_query($koneksi, "SELECT * FROM wali");
				?>
				<select name="id_wali">Pilih Wali
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
				<select name="id_dosen">Pilih Dosen
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
				<input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')">
			</p>
		</form>
	</fieldset>
	<br/>
	<center><a href="lihatdatamahasiswa.php">&Lt; Tabel Biodata</a></center>
</body>
</html>
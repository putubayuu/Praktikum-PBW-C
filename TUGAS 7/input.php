
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard | Admin</title>
</head>
<link rel="stylesheet" type="text/css" href="asset/style.css">
<body>
<nav>
	<ul class="kiri">
		<li><a href="">COntrol Admin</a></li>
	</ul>
	<ul class="kanan">
		<li><a href="">Hello Bagus</a></li>
		<div style="clear:both"></div>
	</ul>
</nav>
<div class="sidebar">
		<ul>
			<li><a href="home.php">Dashboard</a></li>
			<li><a href="siswa.php">Data Siswa</a></li>
		</ul>
	</div>
<div class="main">
	<div class="isimain">
		<span class="span">Form Input Data Siswa</span>
			<form action="pro_tambah.php" method="POST">
				<input type="text" name="nisn" placeholder="Masukan NISN"><br>
				<input type="text" name="name" placeholder="Nama Lengkap"><br>
				<input type="text" name="tempatLahir" placeholder="Tempat Lahir"><br>
				<input type="date" name="tglLahir" placeholder="Tanggal Lahir"><br>
				Laki Laki<input type="radio" name="jenisKelamin" value="L">Permpuan<input type="radio" name="jenisKelamin" value="P"><br>
				<select name="jurusan">
					<option>--Pilih Jurusan--</option>
					<option value="rpl">RPL</option>
					<option value="tkj">TKJ</option>
					<option value="tkr">TKR</option>
				</select><br>
				<input type="submit" value="Simpan Data">
			</form>
	</div>
</div>
</body>
</html>

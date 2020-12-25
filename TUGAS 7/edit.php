<?php 
include 'koneksi.php';
 ?>
 <html>
<head>
<title>Home | admin</title>
<link rel="stylesheet" type="text/css" href="asset/style.css">
</head>
<body>
<nav>
<ul class="kiri">
<li><a href="">ADMIN</a></li>
</ul>
<ul class="kanan">
</ul><div style="clear:both"></div>
</nav>
<div class="sidebar">
<ul>
<li><a href="home.php">Dashboard</a></li>
<li><a href="siswa.php">Data Siswa</a></li>

</ul>
</div>
<div class="main">
	<div class="isimain">
			<span class="span">Form Input Tambah Siswa</span>
			<?php 
				$id=$_GET['id'];
				$data=mysql_query("SELECT * from siswa WHERE id='$id'");
				while ($r=mysql_fetch_array($data)) {
					$t=$r['jurusan'];
					$y=$r['jenisKelamin'];
					?>
					<form action="pro_edit.php" method="POST">
						<input type="hidden" name="id" value="<?php echo $r['id']; ?>"><br>
						<input type="text" name="nisn" value="<?php echo $r['nisn'];?>"><br>
						<input type="text" name="name" value="<?php echo $r['name'];?>"><br>
						<input type="text" name="tempatLahir" value="<?php echo $r['tempatLahir'];?>"><br>
						<input type="date" name="tglLahir" value="<?php echo $r['tglLahir'];?>"><br>
						Laki Laki <input type='radio' name='jenisKelamin' value='L' <?php if($y=="L"){echo 'checked';} ?>/>
						Perempuan <input type='radio' name='jenisKelamin' value='P' <?php if($y=="P"){echo 'checked';} ?>/><br>
						<select name='jurusan'>
							<option>--Pilih Jurusan--</option>
							<option value="rpl"<?php if($t=="rpl"){ echo "selected=\"selected\""; } ?>>RPL</option>
							<option value="tkj"<?php if($t=="tkj"){ echo "selected=\"selected\""; } ?>>TKJ</option>
							<option value="tkr"<?php if($t=="tkr"){ echo "selected=\"selected\""; } ?>>TKR</option>
						</select><br>
						<input type='submit'>
					</form>

					<?php
				}
			 ?>
			
	</div>
</div>
</body>
</html>

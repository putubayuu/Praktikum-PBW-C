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
<style type="text/css">
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse;}
</style>
<div class="main">
	<div class="isimain">
		<table>
			<a href="input.php"><input type="submit" value="Tambah Data Siswa"></a>
			<tr>
				<th>No</th><th>Nisn</th><th>Nama</th><th>Tempat Lahir</th><th>Tanggal Lahir</th><th>Jenis Kelamin</th><th>Jurusan</th><th>Action</th>
			</tr>
			<?php 
				$data=mysql_query("SELECT * FROM siswa ORDER BY name");
				$no=1;
				while ($r=mysql_fetch_array($data)) {
					?>
					 <tr>
			 	<td><?php echo $no++ ?></td>
			 	<td><?php echo $r['nisn']; ?></td>
			 	<td><?php echo $r['name']; ?></td>
			 	<td><?php echo $r['tempatLahir']; ?></td>
			 	<td><?php echo $r['tglLahir']; ?></td>
			 	<td><?php echo $r['jenisKelamin']; ?></td>
			 	<td><?php echo $r['jurusan']; ?></td>
			 	<td><a href='edit.php?id=<?php echo $r['id'];?>'>Edit</a><a href='hapus.php?id=<?php echo $r['id'];?>'>Hapus</a></td>
			 </tr>
					<?php
				}
			 ?>

		</table>	
	</div>
</div>
</body>
</html>
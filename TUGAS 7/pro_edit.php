<?php 
include 'koneksi.php';
$id=$_POST['id'];
$a=$_POST['nisn'];
$b=$_POST['name'];
$d=$_POST['tempatLahir'];
$e=$_POST['tglLahir'];
$f=$_POST['jenisKelamin'];
$g=$_POST['jurusan'];

$s=mysql_query("UPDATE  siswa SET nisn='$a',name='$b',tempatLahir='$d',tglLahir='$e',jenisKelamin='$f',jurusan='$g' where id='$id'") or die(mysql_error());{
	?>
	 <script type="text/javascript">
 	alert("Data Berhasil Disimpan");
 	window.location.href='siswa.php';
 </script>
 <?php
}


 ?>
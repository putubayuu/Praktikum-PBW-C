<?php 
	include 'koneksi.php';
 ?>
<?php 
$nisn=$_POST['nisn'];
$nama=$_POST['name'];
$tmpt=$_POST['tempatLahir'];
$tgl=$_POST['tglLahir'];
$jk=$_POST['jenisKelamin'];
$jur=$_POST['jurusan'];

$s=mysql_query("INSERT INTO siswa VALUES('','$nisn','$nama','$tmpt','$tgl','$jk','$jur')") or die(mysql_error());{
	?>
	<script>
		alert("Data Siswa Berhasil Disimpan");
		window.location.href='siswa.php';

	</script>
	<?php 
}

 ?>
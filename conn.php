<?php
	$nim = $_POST['Nim'];
	$nama = $_POST['Nama'];
	$email = $_POST['Email'];
	$query" INSERT INTO t_jurnal1 SET nim='$nim',nama='nama',email='$email'";
	mysqli_query($koneksi,$query);
	header("location:index.php");

?>
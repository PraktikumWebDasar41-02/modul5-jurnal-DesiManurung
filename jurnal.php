<!DOCTYPE html>
<html>
<head>
	<title>Jurnal</title>
</head>
<body>
	<form method="post">
		<tr><td>Nim  <input type="text" name="nim"><br></td></tr><br>
		<tr><td>Nama <input type="text" name="nama"><br></td></tr><br>
		<tr><td>Email <input type="text" name="email"><br></td></tr><br>
		<input type="submit" name="submit" value="simpan"><br>
	</form>

</body>
</html>
<?php
$conn = mysqli_connect('localhost','root','','d_modul5');
if(isset($_POST['submit'])){
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	

	if(strlen($nim) < 10){
		echo "Berhasil";
	}else{
		echo "gagal! tidak boleh lebih dari 10 karakter";
	}

	if(strlen($nama) < 20){
		echo " Berhasil";
	}else{
		echo "Gagal! tidak boleh lebih dari 20 karakter";
	}
	if(strpos($email, '@')|| strpos($email,'.')){
		echo "Berhasil";
	}else{
		echo"Gagal! harus terdapat @ dan .";
	}
	}
	//redirect("location: halaman2.php");
	$masuk = mysqli_query($conn,"INSERT INTO t_jurnal1() VALUES ('$nim','$nama','$email')");
	if($masuk){
		echo "Berhasil";
	}else{
		echo "Gagal";
	}

 ?>	

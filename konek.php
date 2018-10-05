<?php
$username ='root';
$password='';
$database='d_modul5';
$hostname='localhost';

$conn=mysqli_connect($username,$password,$hostname);
$cari=mysqli_select_db($conn,$database);

if ($conn){
echo "Berhasil";	
}else{
	echo "Gagal";
}

?>
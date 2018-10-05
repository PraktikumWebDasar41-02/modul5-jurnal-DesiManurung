<?php
$conn = mysql_connect('localhost','root','','d_modul5');
if (mysql_connect_errno()){
	echo "koneksi gagal: ".mysql_connect_error();
}else{
	echo "berhasil";
}

?>
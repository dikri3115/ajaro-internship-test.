<?php
	include"koneksi.php";
	$id=$_GET['id'];
	$query=mysql_query("delete from data_barang where id='$id'");
	if($query){
		echo"<script>alert('Berhasil dihapus')</script>";
		echo"<meta http-equiv='refresh' content='0.5 url=index.php'>";
	}else{
		echo"<script>alert('Gagal dihapus')</script>";
		echo"<meta http-equiv='refresh' content='0.5 url=index.php'>";
	}
?>
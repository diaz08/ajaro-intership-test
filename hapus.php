<?php
	include("koneksi.php");
	$id = $_GET['id'];
	mysql_query("DELETE FROM barang where id='$id'")or die(mysql_error());
	
	header("location:tabel.php?pesan=hapus");
?>
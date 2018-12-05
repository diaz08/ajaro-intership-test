<?php
include("koneksi.php");

$kode = $_POST["kode"];
$nama = $_POST["nama"];
$deskripsi = $_POST["deskripsi"];
$stok = $_POST["stok"];
$harga = $_POST["harga"];
$berat = $_POST["berat"];

if (trim($kode)=="") {
		echo "kode masih kosong, isi dengan benar";
}
	elseif (trim($nama)=="") {
		echo "nama masih kosong, isi dengan benar";
	}
	elseif (trim($deskripsi)=="") {
		echo "deskripsi masih kosong, isi dengan benar";
	}
	elseif (trim($stok)=="") {
		echo "stok masih kosong, isi dengan benar";
	}
	elseif (trim($harga)=="") {
		echo "harga masih kosong, isi dengan benar";
	}
	elseif (trim($berat)=="") {
		echo "berat masih kosong, isi dengan benar";
	}
	else {
		$input= mysql_query ("insert into barang (kode,nama,deskripsi,stok,harga,berat)
		values ('$kode','$nama','$deskripsi','$stok','$harga','$berat')");
		header("location:tabel.php? pesan=update");
	}
	


?>


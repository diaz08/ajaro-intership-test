<html>
	<head>
		<title>KELOLA DATA BARANG</title>
		<link rel="stylesheet" href="css.css" type="text/css">
	</head>
	<body >
	
		<H2> KELOLA DATA BARANG </H2>
		<table width=40% height=10% p align="center" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td><b> Data Barang </b></td>
				<td class="tambah"><a href =forminput.php ><button class="button"> Tambah </button></a></td>
			</tr>
		</table>
		<table width=40% border="1" cellpadding="10" cellspacing="0" p align="center">
			<tr p align="center">
			
				<td><b> Kode </b></td>
				<td><b> Nama </b></td>
				<td><b> Harga </b></td>
				<td><b> Aksi </b></td>
			
			</tr>
		<?php 
		include("koneksi.php");
		$Query = mysql_query("SELECT * FROM barang");
		while($data = mysql_fetch_array($Query)){
		?>
			<tr p align="center">
				<td> <?php echo $data['kode']; ?></td>
				<td> <?php echo $data['nama']; ?></td>
				<td> <?php echo $data['harga']; ?></td>
				<td>
				<a href="edit.php?no=<?php echo $data['id'];?>" class="link">Edit </a>
				<a href="hapus.php?id=<?php echo $data['id'];?>" class="link1">Hapus </a></td>
			</tr>
		<?php
		}
		?>
		</table>
	</body>
</html>
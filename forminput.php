<html>
	<head>
		<title>KELOLA DATA BARANG</title>
		<link rel="stylesheet" href="css.css" type="text/css">
	</head>
	<body>
	<H2> KELOLA DATA BARANG </H2>
		<form action="input.php" method="post" p align="center">
		<table  width=40% height=10%  border="0" cellpadding="0" cellspacing="0" p align="center">
			<tr>
				<td> <b> Input Data Barang </b></td>
			</tr>
			</table>
		<table  width=40% height=40%  border="0" cellpadding="0" cellspacing="0" p align="center">
			<tr>
				<td width=20%> Kode :  </td> 
				<td><input class="t" type="text" name="kode"></td>
			</tr>
			<tr>
				<td>Nama : </td> 
				<td><input class="t" type="text" name="nama"></td> 
			</tr>
			<tr>
				<td>Deskripsi: </td> 
				<td><textarea class="t" name="deskripsi"></textarea></td> 
			</tr>
			<tr>
				<td>Stok: </td> 
				<td><input class="t" type="text" name="stok"></td> 
			</tr>
			<tr>
				<td>Harga: </td> 
				<td><input class="t" type="text" name="harga"></td> 
			</tr>
			<tr>
				<td>Berat: </td> 
				<td><input class="t" type="text" name="berat"><i>gram</i></td> 
			</tr>
			<tr>
				<td colspan="2" p align="center" height=10%> <input href=tabel.php class="button" type=submit value="Tambah"></td>
			</tr>
		</form>
	</body>
</html>
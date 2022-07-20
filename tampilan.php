<html>
	<head>
		<title>RM Sederhana</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	</head>

	<body bgcolor="grey">
		<div align="center"><strong><font size="6" face="Courier New, Courier, mono">RM Sederhana</font></strong></div>
			<form name="form1" method="post" action="proses.php">
				<table width="58%" border="0" align="center">
					<tr>
						<td>Nama Pelanggan</td>
						<td><input name="namapelanggan" type="text" id="namapelanggan"></td>
					</tr><tr>

						<td>No Meja</td>
						<td><input name="nomeja" type="text" id="nomeja"></td>
					</tr>
					<tr>
						<td>Pilihan Makanan</td>
						<td>
							<select name="makan" id="makan">
								<option>Ayam Pop</option>
								<option>Rendang Daging</option>
								<option>Ikan Nila Bakar</option>
								<option>Sop Iga Sapi</option>
							</select>
						</td>
					</tr>
							<td>Banyak Makanan</td>
							<td><input name="banyak1" type="text" id="banyak1"></td>
					</tr>
					<tr>
						<td>Pilihan Minuman</td>
						<td>
							<select name="minum" id="minum">
								<option>Es Teh</option>
								<option>Es Jeruk</option>
								<option>Kopi</option>
								<option>Air Es</option>
								<option>Jeruk Hangat</option>
							</select>
						</td>
					</tr>
							<td>Banyak Minuman</td>
							<td><input name="banyak2" type="text" id="banyak2"></td>
					<tr>
						<td>Catatan Pembeli</td>
						<td><textarea name="catatan" id="catatan"></textarea></td> </textarea>
					</tr>

					<tr>
						<td></td>
						<td><input type="submit" name="Submit" value="Pesan"><input type="reset" name="Submit2" value="Batal">
					</td>
					</tr>
				</table>
			</form>
		<div align="center"><strong><a href="lihat.php">::Lihat Pesanan::
		<div align="center"><strong><a href="index.php">::Beranda::
		</a></strong></div>
	</body>
</html>
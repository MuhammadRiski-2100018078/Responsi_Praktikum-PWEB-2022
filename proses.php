<!DOCTYPE html>
<html>
<head>
</head>
<body bgcolor="grey">
</body>
</html>

<?php 

$namapelanggan = $_POST['namapelanggan'];
$nomeja = $_POST['nomeja'];
$makan = $_POST['makan'];
$minum = $_POST['minum'];
$banyak1 = $_POST['banyak1'];
$banyak2 = $_POST['banyak2'];
$catatan = $_POST['catatan'];
echo "<head><title>Pesanan</title></head>";
$fp = fopen("pesan.txt", "a+");
fputs($fp, "$namapelanggan|$nomeja|$makan|$banyak1|$minum|$banyak2|$catatan\n");
fclose($fp);

echo "Terimakasih telah Memesan !!!<br>";
echo "<a href='tampilan.php'>Isi pesanan</a><br>";
echo "<a href='lihat.php'>Lihat Pesanan</a><br>";

 ?>




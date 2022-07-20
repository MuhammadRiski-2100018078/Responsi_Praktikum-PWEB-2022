<!DOCTYPE html>
<html>
<head>
</head>
<body bgcolor="grey">
</body>
</html>
<?php 
echo "<head><title>Detail Pesanan</title></head>";
$fp = fopen("pesan.txt", "r");

echo "<table border='0'>";

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>Nama: </td><td>: $pisah[0] </td></tr>";
    echo "<tr><td>NoMeja: </td><td>: $pisah[1]</td></tr>";
    echo "<tr><td>Pilihan Makanan: </td><td>: $pisah[2] </td></tr>";
    echo "<tr><td>Banyak Makanan: </td><td>: $pisah[3] </td></tr>";
    echo "<tr><td>Pilihan Minuman: </td><td>: $pisah[4] </td></tr>";
    echo "<tr><td>Banyak Minuman: </td><td>: $pisah[5] </td></tr>";
    echo "<tr><td>Catatan Pembeli: </td><td>: $pisah[6] </td></tr>";
    echo "<tr><td><br></td><td><br></td></tr>";
}

echo "</table>";
echo "<a href='tampilan.php'> Pesan lagi </a>";
?>
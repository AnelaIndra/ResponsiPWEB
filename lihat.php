<?php 

echo "<head><title>Seblak Lala</title></head>";
$fp = fopen("hasil.txt", "r");

echo "<table border='0'>";

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>nama: </td><td>: $pisah[0] </td></tr>";
    echo "<tr><td>alamat: </td><td>: $pisah[1] </td></tr>";
    echo "<tr><td>kota: </td><td>: $pisah[2] </td></tr>";
    echo "<tr><td>email: </td><td>: $pisah[3] </td></tr>";
    echo "<tr><td>no: </td><td>: $pisah[4] </td></tr>";
    echo "<tr><td>pembayaran: </td><td>: $pisah[5] </td></tr>";
    echo "<tr><td>menuseblak: </td><td>: $pisah[6] </td></tr>";
    echo "<tr><td>harga: </td><td>: $pisah[7] </td></tr>";
    echo "<tr><td>request: </td><td>: $pisah[8] </td></tr>";
    echo "<tr><td><br></td><td><br></td></tr>";
}

echo "</table>";
echo "<a href='pemesanan.php'> Pesanan Seblak Lala Anda </a>";

?>
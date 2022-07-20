<?php 

	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$kota = $_POST['kota'];
	$email = $_POST['email'];
	$no = $_POST['no'];
	$pembayaran = $_POST['pembayaran'];
	$menuseblak= $_POST['menuseblak'];
	$harga = $_POST['harga'];
	$request = $_POST['request'];

	echo "<head><title>Seblak Lala</title></head>";
	$fp = fopen("hasil.txt", "a+");
	fputs($fp, "$nama\n");
	fputs($fp, "$alamat\n");
	fputs($fp, "$kota\n");
	fputs($fp, "$email\n");
	fputs($fp, "$no\n");
	fputs($fp, "$pembayaran\n");
	fputs($fp, "$menuseblak\n");
	fputs($fp, "$harga\n");
	fputs($fp, "$request\n");
	fclose($fp);

	echo "Terima Kasih Atas Kunjungannya Selamat Menikmati Seblak Lala <br>";
	echo "<a href='pemesanan.php'>Isi pesanan</a><br>";
?>
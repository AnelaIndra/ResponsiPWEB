<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RESPONSI PWEB</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
	<button onclick="goBack()">Go Back</button>
	<script src="script.js"></script>
	<button onclick="goforward()">Go Forward</button>
	<script src="script.js"></script>

	<!--loader-->
	<div class="loader"></div>

	<!--header-->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="index.html">Seblak Lala</a></h1>
			<ul>
				<li><a href="index.html">HOME</a></li>
				<li><a href="about.html">ABOUT</a></li>
				<li><a href="product.html">PRODUCT</a></li>
				<li><a href="pembayaran.html">PEMBAYARAN</a></li>
				<li class="active"><a href="pemesanan.php">PEMESANAN</a></li>
				<li><a href="contact.html">KONTAK</a></li>
			</ul>
		</div>
	</header>

	<!--label-->
	<section class="label">
		<div class="container">
			<p>Home/Pemesanan</p>
		</div>
	</section>

	<!--pemesanan-->
	<section class="pemesanan">
		<div class="container">
			<body bgcolor="FFE4E1">
			<h3>PEMESANAN</h3>
			<h3><center>FORM PEMESANAN</h3></center>
			<br>
			<form action="form.php" method="POST">
				<p>Isi From Pemesanan berikut:</p><br>
				<pre>
					Nama Lengkap <input type="text" name="nama" size="30" maxlength="100"><br>
					Alamat <textarea input type="text" name="alamat" rows="6" cols="40" maxlength="100"></textarea><br>
					Kota <input type="text" name="kota" size="30" maxlength="100"><br>
					E-mail <input type="text" name="email" size="30" maxlength="100"><br>
					No. Handphone <input type="text" name="no" size="30" maxlength="100"><br>
					Pembayaran <select name="pembayaran">
						<option value="-Pilih-">-PILIH-</option>
						<option value="bank">Transfer Bank</option>
						<option value="dana">Dana</option>
						<option value="ovo">Ovo</option>
						<option value="shopee">Shopeepay</option>
					</select>
					Menu Seblak <select name="menuseblak">
						<option value="-Pilih-">-PILIH-</option>
						<option value="Seblak Original">Seblak Original</option>
						<option value="Seblak Telur">Seblak Telur</option>
						<option value="Seblak Bakso">Seblak Bakso</option>
						<option value="Seblak Sosis">Seblak Sosis</option>
						<option value="Seblak Ceker">Seblak Ceker</option>
						<option value="Seblak Tulang">Seblak Tulang</option>
						<option value="Seblak Kikil">Seblak Kikil</option>
						<option value="Seblak Telur dan Bakso">Seblak Telur dan Bakso</option>
						<option value="Seblak Spesial">Seblak Spesial</option>
					</select>
					Harga <select name="harga">
						<option value="-Pilih-">-PILIH-</option>
						<option value="Rp8.000">Rp8.000</option>
						<option value="Rp9.000">Rp9.000</option>
						<option value="Rp12.000">Rp12.000</option>
						<option value="Rp12.000">Rp12.000</option>
						<option value="Rp15.000">Rp15.000</option>
						<option value="Rp15.000">Rp15.000</option>
						<option value="Rp17.000">Rp17.000</option>
						<option value="Rp18.000">Rp18.000</option>
						<option value="Rp22.000">Rp22.000</option>
					</select>
					Request Seblak <input type="text" name="request" size="30" maxlength="100"><br>
					</select>
					<input type="submit" name="submit" value="kirim"><input type="reset" name="reset" value="batal">
				</pre>
			</form>
		</div>
	</section>

	<!--footer-->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2022 - Seblak Lala, All Right Reserved.</small>
		</div>
	</footer>
</body>
</html>
<?php 
include_once('php/db_connect.php');
$database = new database();
session_start();
if(! isset($_SESSION['is_login']))
{
	echo "<script>alert ('Silahkan login terlebih dahulu!');window.location='account.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Konfirmasi | Helmify</title>
	<link rel="shortcut icon" href="images/logo footer.png">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div class="container">
	<div class="navbar">
		<div class="logo">
			<a href="index.php"><img src="images/logo.png" width="60px"></a>
		</div>
		<nav>
			<ul id="ItemMenu">
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php#sini">About</a></li>
				<li><a href="index.php#sini">Contact</a></li>
				<?php if(isset($_SESSION['is_login'])){ ?>
				<li><a class="link" href="php/logout.php">Logout</a></li>
					<?php }else{ ?>
				<li><a class="link" href="account.php">Login</a></li>
					<?php } ?>
			</ul>
		</nav>
		<a href="keranjang.php"><img src="images/cart.png" width="30px" height="30px"></a>
		<img src="images/menu.png" class="icon-menu" onclick="menutoggle()">
	</div>
  </div>

<!--- akun page --->

<div class="akun-page">
	<div class="container">
		<div class="row">

			<div class="col-2">
				<div class="form-container-konf">
					<div class="form-btn">
					<p>Konfirmasi Pembayaran</p>
					<hr id="garis">
				</div>

				<form class="Confirm" method="POST" id="Confirm" enctype="multipart/form-data">
					<input class="konf" type="text" placeholder="Nama" name="nama" required>
                    <input class="konf" type="email" placeholder="Email" name="email" required>
                    <input class="konf" type="number" placeholder="Nomor Telpon" name="telp" required>
                    <textarea class="konf" type="password" placeholder="Alamat" name="alamat" required></textarea>
					<input class="konf" type="text" placeholder="Nama Barang" name="barang" required>
					<input class="konf" type="number" placeholder="Jumlah Barang" name="jumlah" required>
					<input class="konf" id="JNE" type="radio" name="kurir" value="JNE" required>
					<label for="JNE">JNE</label><br>
					<input class="konf" id="Gosend" type="radio" name="kurir" value="Gosend" required>
					<label for="Gosend">Gosend Sameday</label>
                    <select class="konf" name="pembayaran">
                        <option value="BCA">BCA | 5379413021442154</option>
                        <option value="DANA">Dana | 6289618547500</option>
                        <option value="OVO">OVO | 6289618547500</option>
                    </select>
					<label>Bukti Pembayaran :</label>
                    <input class="konf" type="file" name="bukti" required>
					<input type="submit" name="submit" class="btn-konf">

					<!--<button action="konfirmasi.php" type="submit" class="btn">Konfirmasi</button>-->

				</form>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
 // buat koneksi dengan database
 $con = mysqli_connect('localhost', 'root', '', 'helmify') or die($conn);
 
 if(isset($_POST['submit'])){
	$ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$telp = $_POST['telp'];
	$alamat = $_POST['alamat'];
	$barang = $_POST['barang'];
	$jumlah = $_POST['jumlah'];
	$kurir = $_POST['kurir'];
	$pembayaran = $_POST['pembayaran'];
	$nama_file = $_FILES['bukti']['name'];
	$x = explode('.', $nama_file);
	$ekstensi = strtolower(end($x));
	$source = $_FILES['bukti']['tmp_name'];
	$folder = './foto/';

	move_uploaded_file($source, $folder.$nama_file);

	$insert = mysqli_query($con, "INSERT INTO konfirmasi VALUES (
		NULL,
		'$nama',
		'$email',
		'$telp',
		'$alamat',
		'$barang',
		'$jumlah',
		'$kurir',
		'$pembayaran', 
		'$nama_file')");

	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		
		if($insert){
			echo "<script>alert ('Data berhasil ditambahkan!');</script>";
		}else{
			echo 'Gagal upload data';
		}
	}else{
		echo 'Gagal upload data';
	}
}
?>

<!---footer--->

<div class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col-1">
				<h3>Know More About Us</h3>
				<p>Kalian bisa langsung mengunjungi store kami yang berada di Perbanas Institute Jakarta tepatnya di daerah Kuningan</p>
			</div>
			<div class="footer-col-2">
				<h3>Follow Us</h3>
				<ul>
					<li>Muhammad Rizky Gaez</li>
					<li>Reza Nugraha Wisesa</li>
					<li>Sendy Indra Febrianto</li>
					<li>YouTube</li>
				</ul>
			</div>
		</div>
		<hr>
		<p class="cpy">Copyright 2020 - Helmify</p>
	</div>
</div>

<!--- js for toggle menu --->
	<script>
		var ItemMenu = document.getElementById("ItemMenu");

		ItemMenu.style.maxHeight = "0px";

		function menutoggle(){
			if(ItemMenu.style.maxHeight == "0px")
			{
				ItemMenu.style.maxHeight = "200px";
			}
			else 
			{
				ItemMenu.style.maxHeight = "0px";
			}
		}
	</script>
	

<!--- js for toggle form --->

	<script>

		var LoginForm = document.getElementById("LoginForm");
		var RegForm = document.getElementById("RegForm");
		var Indikator = document.getElementById("Indikator");


		function register(){

			RegForm.style.transform = "translateX(0px)";
			LoginForm.style.transform = "translateX(0px)";
			Indikator.style.transform = "translateX(100px)";
		}

		function login(){

			RegForm.style.transform = "translateX(300px)";
			LoginForm.style.transform = "translateX(300px)";
			Indikator.style.transform = "translateX(0px)";
		}

	</script>



</body>
</html>
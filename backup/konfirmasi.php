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

				<form method="POST" id="Confirm">
					<input type="text" placeholder="Nama" name="nama" required>
                    <input type="email" placeholder="Email" name="email" required>
                    <input type="number" placeholder="Nomor Telpon" name="telp" required>
                    <textarea type="password" placeholder="Alamat" name="alamat" required></textarea>
                    <select name="pembayaran">
                        <option value="1">BCA</option>
                        <option value="2">Dana</option>
                        <option value="3">OVO</option>
                    </select>
					<label>Bukti Pembayaran :</label>
                    <input type="file" name="bukti" required>
					<input type="submit" class="btn">

					<!--<button action="konfirmasi.php" type="submit" class="btn">Konfirmasi</button>-->

				</form>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
 // buat koneksi dengan database
 $con = new PDO('mysql:host=localhost;dbname=helmify', "root", "");
 
 try {
	$query = "INSERT INTO konfirmasi SET nama = ?, email = ?, telp = ?, alamat = ?, pembayaran = ?, bukti = ?";
     
    //prepare query for excecution
    $stmt = $con->prepare($query);
 
    //bind the parameters
    $stmt->bindParam(1, $_POST['nama']);
    $stmt->bindParam(2, $_POST['email']);
    $stmt->bindParam(3, $_POST['telp']);
	$stmt->bindParam(4, $_POST['alamat']);
	$stmt->bindParam(5, $_POST['pembayaran']);
	$stmt->bindParam(6, $_POST['bukti']);
     
    // Execute the query
    if($stmt->execute()){
		echo "<script>alert ('Data berhasil ditambahkan!');</script>";
    }else{
        die('Data tidak boleh kosong.');
    }          
 } catch (PDOException $exception){
    echo "Error: " . $exception->getMessage(); 
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
<?php 
session_start();
if(! isset($_SESSION['is_login']))
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Helmify | Ecommerce</title>
	<link rel="shortcut icon" href="images/logo footer.png">
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="keranjang.js" async></script>
</head>
<body>


<div class="header">
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
	<div class="row">
		<div class="col-2">
			<h3>Selamat Datang <?php echo $_SESSION['email']; ?></h3>
			<h1>Cintai Palamu<br>Pakai Helm Tiap Hari!</h1>
			<p>Helm menjaga kepala anda tetap aman sentosa kecuali anda kelindes kereta, sekalipun anda pake helm ya sama aja.<br> Tapi tetep beli aja helm dari kami supaya kami cepat kaya dan sukses terus punya rumah yang mudah diakses</p>
			<a href="keranjang.php" class="btn">Explore Now &#8594;</a>
		</div>
		<div class="col-2">
			<img src="images/image6.png">
		</div>
	</div>
</div>
</div>
	
<!----- featured categories----->
	<div class="categories">
		<div class="small-container">
			<div class="row">
			<div class="col-3">
				<img src="images/rsz_helm5.jpg">
			</div>
			<div class="col-3">
				<img src="images/rsz_helm2.jpg">
			</div>
			<div class="col-3">
				<img src="images/rsz_helm3.jpg">
			</div>
		</div>
		</div>
		
	</div>

<!----- featured products----->
	<div class="small-container">
		<h2 class="title">Featured Products</h2>
		<div class="row">
		<div class="col-4">
				<a href="detail bogo.php"><img src="images/produk1.png"></a>
				<a href="detail bogo.php"><h4>Helm Bogo JPN</h4></a>
				<p>Rp150.000</p>
		</div>

		<div class="col-4">
			<a href="detail zeus.php"><img src="images/produk2.png"></a>
			<a href="detail zeus.php"><h4>Helm Zeus Keren Banget</h4></a>
				<p>Rp550.000</p>
		</div>

		<div class="col-4">
			<a href="detail agv.php"><img src="images/produk3.png"></a>
			<a href="detail agv.php"><h4>Helm AGV Kece</h4></a>
				<p>Rp1.550.000</p>
		</div>
		
		<div class="col-4">
			<a href="detail arai.php"><img src="images/produk4.png"></a>
			<a href="detail arai.php"><h4>Helm Arai Fullfest</h4></a>
				<p>Rp8.720.000</p>
		</div>
		</div>

		<h2 class="title">Latest Products</h2>
				<div class="row">
		<div class="col-4">
				<a href="detail kyt.php"><img src="images/kyt2.png"></a>
				<a href="detail kyt.php"><h4>Helm KYT Bukan Main</h4></a>
				<p>Rp320.000</p>
		</div>

		<div class="col-4">
				<a href="detail ink.php"><img src="images/ink2.png"></a>
				<a href="detail ink.php"><h4>Helm INK Menarik</h4></a>
				<p>Rp430.000</p>
		</div>
	
		<div class="col-4">
				<a href="detail shark.php"><img src="images/shark4.png"></a>
				<a href="detail shark.php"><h4>Helm Shark Yang dipake Lorenzo</h4></a>
				<p>Rp2.800.000</p>
		</div>

		<div class="col-4">
			<a href="detail scorpion.php"><img src="images/scorpion1.png"></a>
			<a href="detail scorpion.php"><h4>Helm Scorpion Kece Parah</h4></a>
			<p>Rp3.800.000</p>
	</div>
	
	</div>

<!---------- offer ------->
	<div class="offer">
		<div class="small-container">
			<div class="row">
				<div class="col-2">
					<img src="images/td x fm1.png" class="offer-img">
				</div>
				<div class="col-2">
					<p>Exclusive di Helmify</p>
					<h1>The Dessert X Fuel Motorcycle Retro Elegant</h1>
					<small>
						The Desert Race dan Fuel Motorcycle berkolaborasi membuat helm dan jersey limited edition. 
						Helmnya sendiri nggak tanggung-tanggung, yakni Veldt, salah satu brand premium di dunia perheleman.
						The Desert Race sendiri merupakan festival motor di California yang memadukan antara penggemar sepeda motor, 
						pembalap motorcross, para pemula dan professional, dll di seluruh dunia
					</small>
					<a href="exclusive.php" class="btn">Buy Now! &#8594;</a>
				</div>
			</div>
		</div>
	</div>


<!---footer--->

<div class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col-1">
				<h3 id="sini">Know More About Us</h3>
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
	

</body>
</html>
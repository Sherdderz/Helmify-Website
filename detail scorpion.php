<?php 
session_start();
if(! isset($_SESSION['is_login']))
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Products Details | Helmify</title>
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


<!--- single product details --->

<div class="small-container single-product">
	<div class="row">
		<div class="col-2">
			<img src="images/scorpion1.png" width="100%" id="product-img">

			<div class="small-img-row">
				<div class="small-img-col">
					<img src="images/scorpion/scorpion1.png" width="100%" class="small-img">
				</div>
				<div class="small-img-col">
					<img src="images/scorpion/scorpion4.png" width="100%" class="small-img">
				</div>
				<div class="small-img-col">
					<img src="images/scorpion/scorpion2.png" width="100%" class="small-img">
				</div>
				<div class="small-img-col">
					<img src="images/scorpion/scorpion3.png" width="100%" class="small-img">
				</div>
			</div>

		</div>
		<div class="col-2">
			<h1>Helm Scorpion Kece Parah</h1>
			<h4>Rp3.800.000</h4>
			
			<a href="keranjang.php" class="btn">Buy Now!</a>

			<h3>Product Details</h3> <br>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
			standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
			a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
			remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
			Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of 
			Lorem Ipsum.</p>
		</div>
	</div>
</div>

	<div class="small-container">
		<div class="row row-2">
			<h2>Related Products</h2>
			
		</div>
	</div>

	<div class="small-container">
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
</div>


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
	

<!--- js for product gallery --->
	<script>
		var ProductImg = document.getElementById("product-img");
		var SmallImg = document.getElementsByClassName("small-img");

		SmallImg[0].onclick = function()
		{
			ProductImg.src = SmallImg[0].src;
		}
		SmallImg[1].onclick = function()
		{
			ProductImg.src = SmallImg[1].src;
		}
		SmallImg[2].onclick = function()
		{
			ProductImg.src = SmallImg[2].src;
		}
		SmallImg[3].onclick = function()
		{
			ProductImg.src = SmallImg[3].src;
		}

	</script>

</body>
</html>
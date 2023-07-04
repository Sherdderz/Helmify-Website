<?php 
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
	<title>All Products | Helmify</title>
	<link rel="shortcut icon" href="images/logo footer.png">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="keranjang.js" async></script>
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
  


<div class="small-container">
<div class="row row-2">
	<h2>All Products</h2>
</div>
	<!-- Filter harga
	<select>
		<option>Default Shorting</option>
		<option>Short by Price</option>
		<option>Short by Popularity</option>
		<option>Short by Rating</option>
		<option>Short by Sale</option>
	</select>

                                            -->
                                            
        <!---Semua Produk-->
		<section class="container content-section">
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Helm Bogo JPN</span>
                  <a href="detail bogo.php"><img class="shop-item-image" src="images/produk1.png"></a><br><br>
				  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;Rp150000
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp150000</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Helm Zeus Keren Banget</span>
                    <a href="detail zeus.php"><img class="shop-item-image" src="images/produk2.png"></a><br><br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;Rp550000
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp550000</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Helm AGV Kece</span>
                    <a href="detail agv.php"><img class="shop-item-image" src="images/produk3.png"></a><br><br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;Rp1550000
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp1550000</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Helm Arai Fullfest</span>
                   <a href="detail arai.php"><img class="shop-item-image" src="images/produk4.png"></a><br><br>
				   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;Rp8720000
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp8720000</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Helm KYT Bukan Main</span>
                    <a href="detail kyt.php"><img class="shop-item-image" src="images/kyt2.png"></a><br><br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;Rp320000
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp320000</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Helm INK Menarik</span>
                    <a href="detail ink.php"><img class="shop-item-image" src="images/ink2.png"></a><br><br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;Rp430000
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp430000</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Helm Shark Yang dipake Lorenzo</span>
                    <a href="detail shark.php"><img class="shop-item-image" src="images/shark4.png"></a><br><br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;Rp2800000
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp2800000</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Helm Scorpion Kece Parah</span>
                    <a href="detail scorpion.php"><img class="shop-item-image" src="images/scorpion1.png"></a><br><br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;Rp3800000
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp3800000</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>


    <!---Keranjang-->
<section class="container content-section">
	<h2 class="section-header">CART</h2><br>
	<div class="cart-row">
		<span class="cart-item cart-header cart-column">ITEM</span>
		<span class="cart-price cart-header cart-column">PRICE</span>
		<span class="cart-quantity cart-header cart-column">QUANTITY</span>
	</div>
	<div class="ker-items">
	</div>
	<div class="cart-total">
		<strong class="cart-total-title">Total</strong>
		<span class="cart-total-price">Rp0</span>
	</div>
	<a href="konfirmasi.php"><button class="btn btn-primary btn-purchase" type="button">PURCHASE</button></a>
</section>




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
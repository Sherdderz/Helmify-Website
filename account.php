<?php 
include_once('php/db_connect.php');
$database = new database();
if(isset($_POST['register']))
{
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = password_hash($_POST['password'],PASSWORD_DEFAULT);
	$conf_password = password_hash($_POST['conf_password'],PASSWORD_DEFAULT);
    if($database->register($username,$password,$email,$conf_password))
    {
      header('location:account.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Account | Helmify</title>
	<link rel="shortcut icon" href="images/logo footer.png">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
  </div>

<!--- akun page --->

<div class="akun-page">
	<div class="container">
		<div class="row">
			<div class="col-2">
				<img src="images/image6.png" width="100%">
			</div>

			<div class="col-2">
				<div class="form-container">
					<div class="form-btn">
					<span onclick="login()">Login</span>
					<span onclick="register()">Register</span>
					<hr id="Indikator">
				</div>

				
				<form action="php/login.php" method="POST" id="LoginForm">
					<input type="email" placeholder="Email" name="email" required>
					<input type="password" placeholder="Password" name="password" required>
					<button type="submit" class="btn" name="login">Login</button>
					<a href="">Forgot Password</a>
				</form>

				<form action="" method="POST" id="RegForm">
					<input type="text" placeholder="Username" name="username" required>
					<input type="email" placeholder="Email" name="email" required>
					<input class="password" type="password" placeholder="Password" name="password" required>
					<input class="confirmPassword" type="password" placeholder="Confirm Password" name="conf_password" required>
					<button type="submit" class="btn vbtn" name="register">Register</button>

				</form>
				</div>
			</div>
		</div>
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

<!--- js vefiication password -->

		<script>
			document.querySelector('.vbtn').onclick = function(){

				var password = document.querySelector('.password').value,
				confirmPassword = document.querySelector('.confirmPassword').value;

				if(password == ""){
					alert("Password tidak boleh kosong");
				}
				else if(password != confirmPassword){
					alert("Password tidak sesuai");
					return false
				}
				else if(password == confirmPassword){
					alert("Berhasil register, silahkan login")
				}
				return true
			}
		</script>

</body>
</html>
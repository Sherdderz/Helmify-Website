<?php 
class database{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "helmify";
	var $koneksi;

	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}


	function register($username,$password,$email)
	{	
		$insert = mysqli_query($this->koneksi,"insert into akun values ('','$email','$username','$password')");
		return $insert;
	}

	function login($email,$password,$remember)
	{
		$query = mysqli_query($this->koneksi,"select * from akun where email='$email'");
		$data_user = $query->fetch_array();
		if(password_verify($password,$data_user['password']))
		{
			
			if($remember)
			{
				setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
				setcookie('email', $data_user['email'], time() + (60 * 60 * 24 * 5), '/');
			}
			
			$_SESSION['email'] = $data_user['email'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}

	function relogin($username)
	{
		$query = mysqli_query($this->koneksi,"select * from akun where username='$username'");
		$data_user = $query->fetch_array();
		$_SESSION['username'] = $username;
		$_SESSION['email'] = $data_user['email'];
		$_SESSION['is_login'] = TRUE;
	}
} 

function verification($nama,$email,$telp,$alamat,$pembayaran,$bukti)
{	
	$insert = mysqli_query($this->koneksi,"insert into konfirmasi values (
		'','$nama','$email','$telp','$alamat','$pembayaran','$bukti')");
	return $insert;
}


?>
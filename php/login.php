<?php 
session_start();
include_once('db_connect.php');
$database = new database();

if(isset($_SESSION['is_login']))
{
    header('location:../index.php');
}

if(isset($_COOKIE['username']))
{
  $database->relogin($_COOKIE['username']);
  header('location:../index.php');
}

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }

    if($database->login($email,$password,$remember))
    {
      
      header('location:../index.php');
    }
    else
    {
      echo "Email atau Password salah, silahkan coba kembali";
    }
}
?>

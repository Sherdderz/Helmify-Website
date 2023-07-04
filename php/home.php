<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Starter Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/css/starter-template.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  

  
    

    <a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Logout</a>

  </div>
</nav>

<main role="main" class="container">

  <div class="starter-template">
    <h1>Selamat Datang <?php echo $_SESSION['email']; ?></h1>
    <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
      Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an 
      unknown printer took a galley of type and scrambled it to make a type specimen book. 
      It has survived not only five centuries, but also the leap into electronic typesetting, 
      remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
      sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like 
      Aldus PageMaker including versions of Lorem Ipsum.</p>
  </div>

</main><!-- /.container -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>
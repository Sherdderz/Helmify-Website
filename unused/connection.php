<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);
    if(!$conn)
    {
        die("Connection Fialed" .mysqli_connect_error());
    }
    else
    {
        echo "Connected";
    }
?>
<?php

    $dbhost="localhost";
    $dbuser="root";
    $dbpassword="";
    $dbname="login";

    $conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
    if(!$conn)
    {
      die("Error, no hay conexión: ".mysqli_connect_error());
    }

    $usuario = $_POST['nombre'];
    $password = $_POST['password'];

    $query=mysqli_query($conn,"SELECT * FROM usuarios WHERE Nombre = '".$usuario."' and contrasena = '".$password."'");
    $nr = mysqli_num_rows($query);

    if($nr==1)
    {
      header("Location: logear.html");
    }
    elseif($nr==0)
    {
      echo "<h1 class='red-text'>Error usuario o contraseña incorrectos </h1>";
    }
?>
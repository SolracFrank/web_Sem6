<!DOCTYPE html>
  <html>
    <head>
        <meta charset="UTF-8">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <style>
        body{
            background: url(./Images/fondo.png);
            background-size: cover;
        }
        .login{
            margin-top: 200px; 
            background-color: rgba(0, 0, 0, 0.5);
        }
    </style>
    <body>
        <div class="container">
            <?php

            $usuario = $_POST["txtUser"];
            $password = $_POST["txtPass"];

            if($usuario == "Carlos" & $password == 1234){
                echo "Bienvenido ".$usuario;
            }
            else{
                echo "Usuario y/o contraseña incorrectos.";
            }
            

            ?>
        </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>



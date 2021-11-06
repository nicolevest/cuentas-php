<?php
 //entry.php
 session_start(); //inicilizar las variables de sesión
 if(!isset($_SESSION["username"]))
 {
      header("location:sispambaindex.php?action=login");
 }
 ?>
 <!DOCTYPE html>
 <html>
      <head>
           <title>Inicio SISPAMBA</title>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
           <link rel="stylesheet" href="estilos.css">
      </head>
      <body>
           <br /><br />
           <div class="container" style="width:500px;">
                <h3 align="center">Ingreso al sistema</h3>
                <br />
                <?php
                echo '<div class="card-login"><h2>BIENVENIDO '.$_SESSION["fullName"].'</h2></div>';
                echo '<label><a href="logout.php">Logout</a></label>';
                ?>
           </div>
      </body>
 </html>

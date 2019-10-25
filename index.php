<?php
session_start();
 include 'conexion.php';
 
 if(!isset($_SESSION['nombre'])){
header("location:login.php");

}else{
?>
<!DOCTYPE html>
<html >
<head>
  <head>
  <title>SAD</title>
  <meta charset="UTF-8">
  <form action="validar.php" method="post">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css"> 
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
 <div class="container-login200" style="background-image: url('images/foto1.jpg');">
 <header>
<nav class="nav-bar">
 
  <div class="navbar-header">
    <div class="nav-menu" id="nav"> Menú</div>
    <ul class="nav-items">
      <li><a href="index.php">Inicio</a>
        <?php
           //if(isset($_SESSION['rol'])){
               echo' <li><a href="turnos.php">Sacar turno</a> ';
               echo' <li><a href="bajatur.php">Eliminar turno</a> ';
          // }
        ?>

      <li><a href="salir.php">Salir de la sesión</a>
         <?php 
                                  if (isset($_SESSION['nombre'])) {
                                  echo ' <li class="navbar-text">'.$_SESSION['rol'].' : '.$_SESSION['nombre'].'</li>' ; 
                                  }
                                  ?>
    </ul>
  </div> 
</nav>
</header>


 <!--article  class="post clearfix">
<main id="ContenedorCuerpo">
<div class="login-page">
    <div class="form">
      <h3>Iniciar Sesión</h3>
       <form class="login-form" method="POST" action="Funciones/ValidarLoginAdm.php">
          <input type="text" name="usuario" placeholder="Usuario"/>
          <input type="password" name="clave" placeholder="Contraseña"/>
          <button><b>Ingresar</b></button>
      </form>
    </div>
  </div>
</main>
</article-->

    <script src="js/index.js"></script>
</body>
</html>
  <?php 
             }            
                                  ?>
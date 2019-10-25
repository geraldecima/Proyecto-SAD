<?php
session_start();
include 'conexion.php';
?>
<html>
<head>
<title>
Registro de turno
</title>
</head>
<body>
<?php
$correo = $_SESSION['correo'];
$dia = $_REQUEST['dia'];
$hora = $_REQUEST['horario'];
/*if($_SESSION['rol'] == 'admin'){
$rol = "admin";
}else{
$rol = "Usuario";
}*/
$sql = "insert into turnos values('','".$correo."','".$dia."','".$hora."')";
mysqli_query($con,$sql);
?>
<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=index.php"> 
</body>
</html>
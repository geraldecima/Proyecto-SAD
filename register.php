<?php
session_start();
include 'conexion.php';
?>
<html>
<head>
<title>
Registro
</title>
</head>
<body>
<?php
$name = $_REQUEST['nombre'];
$surname = $_REQUEST['apellido'];
$cuil = $_REQUEST['cuil'];
$correo = $_REQUEST['correo'];
$telefono = $_REQUEST['telefono'];
$telefonoc = $_REQUEST['telefonoc'];

$rol = 'usuario';

// Creamos la conexión
$conn = new mysqli($server,$username,$password,$db);

// Revisamos la conexión
if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   } 

// Realizamos la consulta para saber si coincide con uno de esos criterios
$sql = "select * from registro where cuil='$cuil'";
$sql2 = "select * from registro where correo='$correo'";
$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql2);
?>

<?php
 // Validamos si hay resultados
 if(mysqli_num_rows($result)>0)
 {
	 // Si es mayor a cero imprimimos que ya existe el usuario
  	header("Location:registro.php?cexist");
 }
 else if(mysqli_num_rows($result2)>0)
 {
	 
  	header("Location:registro.php?exist");
 }else{
// Si no hay resultados, ingresamos el registro a la base de datos
$con = ("INSERT INTO registro (id,nombre,apellido,cuil,correo,telefono,celular,rol,cuiladmin) 
	    VALUES (NULL,'$name','$surname','$cuil','$correo','$telefono','$telefonoc','$rol','clear')");
if (mysqli_query($conn, $con)) {
	// Imprimimos que se ingreso correctamente
	echo "Nuevo Registro Creado Exitosamente.";
} else {
	// Mostramos si hay algun error al insertar registro
	echo "Error: " . $con . "" . mysqli_error($conn);
}

}
// Cerramos la conexión
$conn->close();

?>



<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=login.php">
</body>
</html>
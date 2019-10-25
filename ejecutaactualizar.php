<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
 include 'conexion.php';
	$sentencia="update turnos set dia='$fecha', horario='$horario', asunto='$asunto' where id_turno='$id'";
	
	$resent=mysqli_query($con,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: registros.php?error='en cargar'");
		
		echo "<script>location.href='registros.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='registros.php'</script>";

		
	}
?>


	

<?php
session_start();
 include 'conexion.php';
 

	$cuilc=$_POST['cuil'];

		
 $sql2=mysqli_query($con,"SELECT * FROM registro WHERE cuiladmin='$cuilc'")or die(mysqli_error($con));
	$num2 = mysqli_num_rows($sql2);
 	if($num2>0){
 	while ($f2=mysqli_fetch_array($sql2))
 		{
			$_SESSION['id']=$f2['id'];	
 			$_SESSION['correo'] = $f2['correo'];
 			$_SESSION['nombre'] = $f2['nombre'];
 			$_SESSION['apellido'] = $f2['apellido'];
 			$_SESSION['rol'] = $f2['rol'];
 			$_SESSION['cuiladmin'] = $f2['cuiladmin'];
			header("Location: index2.php");
         }  
	}else{
			
			 $re=mysqli_query($con,"SELECT * FROM registro WHERE cuil='".$_POST['cuil']."' ")or die(mysqli_error($con));
 	$num = mysqli_num_rows($re);
 	if($num>0){
 	while ($f=mysqli_fetch_array($re)) 
 		{
 		$_SESSION['id'] = $f['id'];
 		$_SESSION['correo'] = $f['correo'];
 		$_SESSION['nombre'] = $f['nombre'];
 		$_SESSION['apellido'] = $f['apellido'];
 		$_SESSION['cuil'] = $f['cuil'];
 		$_SESSION['correo'] = $f['correo'];
 		$_SESSION['rol'] = $f['rol'];
		header("Location: index.php");

 		}
 			}
 	else
 		{
 		header("Location: login.php?dinv=datos no validos");
 		}
		}
	
	


?>
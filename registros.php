<!DOCTYPE html>
<?php
 include 'conexion.php';


?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SAD ADMINISTRACION</title>
	<meta charset="UTF-8">
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
	<link rel="stylesheet" href="popup/estilos.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" href="css/estilo.css"/>



  </head>
<div class="limiter">
		<div class="container-login300" style="background-image: url('images/foto1.jpg');">
<header class="header">

</header>

<div class="row">
<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
<div class="contenedor">
			<div class="overlay" id="overlay">
			<div class="pepe" id="pepe">

		<h2> Administración de turnos</h2>	
		
	
		<div class="well well-small" >
		<hr class="soft"/>
		<h4>Tabla de turnos registrados para el dia de hoy</h4>
		<div class="row-fluid">
		

		<?php

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
			
$arrayMeses = array('01', '02', '03', '04', '05', '06',
   '07', '08', '09', '10', '11', '12');
 
   $arrayDias = array( 'Domingo', 'Lunes', 'Martes',
       'Miercoles', 'Jueves', 'Viernes', 'Sabado');
     
   $hoy= date('Y')."-".$arrayMeses[date('m')-1]."-".date('d');
        $no_of_records_per_page = 18;
        $offset = ($pageno-1) * $no_of_records_per_page;

     

        $total_pages_sql = "SELECT COUNT(*) FROM turnos";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM turnos where dia>='$hoy' LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($con,$sql);
				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Id</td>";
						echo "<td>Email</td>";
						echo "<td>Fecha</td>";
						echo "<td>Horario</td>";
						echo "<td>Asunto</td>";
					
						echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
						
					echo "</tr>";
        while($row = mysqli_fetch_array($res_data)){
      
		  
			  	echo "<tr class='success'>";
				    	echo '<td>'.$row['id_turno'].'</td>';
				    	echo '<td>'.$row['correo'].'</td>';
				    	echo '<td>'.$row['dia'].'</td>';
				    	echo '<td>'.$row['horario'].'</td>';
				    	echo '<td>'.$row['asunto'].'</td>';
						

				    	echo "<td><a href='actualizar.php?id=$row[id_turno]'><img src='images/boton-editar.png' class='img-rounded' height='40px'></td>";
						echo "<td><a href='registros.php?id=$row[id_turno]&idborrar=2'><img src='images/boton-borrar.png' class='img-rounded' height='40px'/></a></td>";
						
					
						
					echo "</tr>";
				
			
        }
			echo "</table>";
			
				extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE  FROM turnos WHERE id_turno=$id";
						$resborrar=mysqli_query($con,$sqlborrar);
						
								
						
				
							
							?>
			  

						<div class="alert alert-success">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
							<strong>¡Atencion!</strong> Registro borrado correctamente  <a href="registros.php" class="alert-link">Click aqui.. para actualizar</a>
							</div>
			<?php 
						
						
					}

		
			
        mysqli_close($con);


?>
 
	   <div align="center">
    <ul class="pagination">
	
				
        <li><a href="?pageno=1">1</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Anterior</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Siguiente</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>"><?php echo $total_pages; ?></a></li>
	   </ul>
	    </div>
	<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
							<a href="index2.php">Volver al menú</a>
							</button>
						</div>
					</div>
					</div>				
	

</html>

<!DOCTYPE html>
<?php


 include 'conexion.php';
?>		
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SAD</title>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
  </head>
<div class="limiter">
		<div class="container-login200" style="background-image: url('images/foto1.jpg');">
<header class="header">

</header>

  <!-- Navbar
    ================================================== -->


<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
		
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
	
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>

<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h4> Administración de turnos registrados</h4>
		<br>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Edición de turnos</h4>
		<div class="row-fluid">
		<br>
		<?php
		extract($_GET);
		
		$sql="SELECT * FROM turnos WHERE id_turno=$id";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql=mysqli_query($con,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$email=$row[1];
		    	$dia=$row[2];
		    	$horario=$row[3];
		    	$asunto=$row[4];
		    }



		?>

		<form action="ejecutaactualizar.php" method="post">
				Id<br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
				Email<br> <input type="text" name="user" value="<?php echo $email?>"  readonly="readonly"><br>
				Fecha<br> <input type="text" name="fecha" value="<?php echo $dia?>"><br>
				Horario<br> <input type="text" name="horario" value="<?php echo $horario?>"><br>
				Asunto<br> <input type="text" name="asunto" value="<?php echo $asunto?>"><br>
				
				<br>
				<input type="submit" value="Actualizar" class="btn btn-success btn-primary">
			</form>

				  
		
		
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		





		
		
		</div>

		


		

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>
</div>
</div>
</div>

  </body>
</html>



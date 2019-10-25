<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registro SAD BERAZATEGUI</title>
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
</head>

<body>
	<div class="limiter">
		<div class="container-login200" style="background-image: url('images/foto1.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
									<?php
								if(isset($_GET['exist'])){	
					?>
							<div class="alert alert-warning alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>¡Atencion!</strong> El mail ingresado ya existe,por favor ingrese otro para continuar.
</div>
			
			<?php
			}
			
				?>
											<?php
								if(isset($_GET['cexist'])){	
					?>
							<div class="alert alert-warning alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>¡Atencion!</strong> El cuil ingresado ya existe,por favor ingrese otro para continuar.
</div>
			
			<?php
			}
			
				?>
				<form class="login100-form validate-form" method="POST" action="register.php">
					          <img src="" class="">
					
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Nombre">
						<span class="label-input100">Nombre</span>
						<input class="input100" type="text" name="nombre" placeholder="Ingrese su nombre">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Apellido">
						<span class="label-input100">Apellido</span>
						<input class="input100" type="text" name="apellido" placeholder="Ingrese su apellido">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="CUIL">
						<span class="label-input100">CUIL</span>
						<input class="input100" type="text" name="cuil" placeholder="Ingrese su CUIL">
						<span class="focus-input100"></span>
					</div>
					<br>
					<div class="wrap-input100 validate-input" data-validate="Correo electronico">
						<span class="label-input100">Correo electronico</span>
						<input class="input100" type="text" name="correo" placeholder="Ingrese su correo electronico">
						<span class="focus-input100"></span>
					</div>
					<br>
					<div class="wrap-input100 validate-input" data-validate="Telefono">
						<span class="label-input100">Telefono</span>
						<input class="input100" type="text" name="telefono" placeholder="Ingrese su telefono">
						<span class="focus-input100"></span>
					</div>
					<br>
						<div class="wrap-input100 validate-input" data-validate="Telefono celular">
						<span class="label-input100">Telefono celular</span>
						<input class="input100" type="telefonoc" name="telefonoc" placeholder="Ingrese su telefono celular">
						<span class="focus-input100"></span>
					</div>
					<br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="action">
								Registrarse
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	
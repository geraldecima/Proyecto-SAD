<?php
session_start();
include 'conexion.php';

if(!isset($_SESSION['nombre'])){
header("location:login.php");

}else{
	?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sacar turno</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"><link rel="stylesheet" href="turnos/style.css">
  <link rel="stylesheet" href="popup/estilos.css">
<link rel="stylesheet" href="turnos/boton.css">
<link rel="stylesheet" href="informacion/d.css">

</head>
<body background="images/foto1.jpg">
<!-- partial:index.partial.html -->
<div class="container-login100" style="background-image: url('images/foto1.jpg');">
  <div class="container">
    <div class="wrapper">
      <ul class="steps">
        <li class="is-active">Paso 1</li>
        <li>Paso 2</li>
        <li>Paso 3</li>
      </ul>
	  
      <form  method="post">
	  <div class="form-wrapper">
        <fieldset class="section is-active">
          <h3>Seleccionar Asunto</h3>
		  
          	
						<span class="cambicol">Asunto</span>
							<div>
						
							<select name="asunto" id="asunto">
							   <option selected value="0"> Seleccione un asunto: </option>
							   <option value="Listado oficial">Listado oficial</option> 
							   <option value="Listado 108 A">Listado 108 A</option> 
							   <option value="Listado infine 108 A infine">Listado 108 A infine</option>
							   <option value="Listado 108 B">Listado 108 B</option> 
							   <option value="Listado 108 B infine">Listado 108 B infine</option> 
							   <option value="Listado 108 emergencia">Listado 108 emergencia</option> 
							   <option value="fines1">fines 1</option> 
							   <option value="fines2">fines 2</option>
							
							</select>
							  
						</div>
						
						<span class="focus-input100" data-symbol="&#xf190;"></span>
		
          <div class="button" id="obtener">Siguiente</div>
        </fieldset>
        <fieldset class="section">
          <h3>Seleccionar una fecha</h3>
		  
  

          
			<input type="date" name="fecha" >
			

	
          <div class="button">Siguiente</div>
		  <br>
				<br>
				<br>
		  				   <div class="accordion-container">
        <a href="#" class="accordion-titulo">Click aqui(Informacion) <span class="toggle-icon"></span></a>
        <div class="accordion-content">
		<p>Listado oficial : dias disponibles(Cerrado) </p>
		<p>Listado 108 A : dias disponibles(Martes, miércoles y jueves) </p>
		<p>Listado 108 B : dias disponibles(Lunes a viernes) </p>
		<p>Listado 108 A infine : dias disponibles(Martes, miércoles y jueves) </p>
		<p>Listado 108 B infine : dias disponibles(Lunes y martes) </p>
		<p>Listado 108 emergencia : dias disponibles(Cerrado) </p>
		<p>Listado fines 1 : dias disponibles(Cerrado) </p>
		<p>Listado fines 2 : dias disponibles(Cerrado) </p>
        </div>  
    </div>
        </fieldset>
        <fieldset class="section">
          <h3>Elegir un horario</h3>
          		<select name="horario">
								<option selected value="0"> Seleccione un horario: </option>
							   <option value="08:20">08:20</option> 
							   <option value="08:40">08:40</option>
							   <option value="09:00">09:00</option> 
							   <option value="09:20">09:20</option> 
							   <option value="09:40">09:40</option> 
							   <option value="10:00">10:00</option> 
							   <option value="10:20">10:20</option> 
							   <option value="10:40">10:40</option>					 
							   <option value="11:00">11:00</option> 
							   <option value="11:20">11:20</option> 
							   <option value="11:40">11:40</option> 
							   <option value="12:00">12:00</option> 
							   <option value="12:20">12:20</option> 
							   <option value="12:40">12:40</option> 
							   <option value="13:00">13:00</option> 
							   <option value="13:20">13:20</option> 
							   <option value="13:40">13:40</option> 
				</select>

				 <div class="button">Siguiente</div>
				 <br>
				  <br>
				   <br>
		<div class="accordion-container">
        <a href="#" class="accordion-titulo">Click aqui(Informacion) <span class="toggle-icon"></span></a>
        <div class="accordion-content">
		<p>Listado oficial : horarios disponibles(Cerrado) </p>
		<p>Listado 108 A : horarios disponibles(9 a 14 hs) </p>
		<p>Listado 108 B : horarios disponibles(9 a 12 hs) </p>
		<p>Listado 108 A infine : horarios disponibles(8:30 a 12:30 hs) </p>
		<p>Listado 108 B infine : horarios disponibles(10 a 14 hs) </p>
		<p>Listado 108 emergencia : horarios disponibles(Cerrado) </p>
		<p>Listado fines 1 : horarios disponibles(Cerrado) </p>
		<p>Listado fines 2 : horarios disponibles(Cerrado) </p>
        </div>  
    </div>
	
		</fieldset>

        <fieldset class="section">
          <h3>Operacion realizada con exito!</h3>
		 <h3>Click en finalizar para confirmar y ver informacion del turno</h3>

		  
          
		   
         
		  <input class="submit button"  name="action" type="submit" value="Finalizar">
							
        </fieldset>
      </form>
	  
	  
		 <?php
if(isset($_POST['action'] )){
$correo = $_SESSION['correo'];
$dia = $_POST['fecha'];
$hora = $_POST['horario'];
$asunto = $_POST['asunto'];
$sql = "insert into turnos values('','".$correo."','".$dia."','".$hora."','".$asunto."')";
mysqli_query($con,$sql);
$mesaje="1";

echo "<script> window.location.href = 'turnos.php?datos=$dia'</script>";
}
?> 

	  
    </div>
  </div>
</div>

<?php	
if(isset($_GET['datos'] )){
	$correo=$_SESSION['correo'];
	$dia=$_GET['datos'];
	$query="SELECT * FROM turnos where correo='$correo' AND  dia='$dia'   ";
  $result=$con->query($query);
 $row=mysqli_fetch_assoc($result);
?>
	
	<div class="contenedor">
			<div class="overlay" id="overlay">
			<div class="popup" id="popup">
			
				
			<div class="content-box-blue"><h2>Correo Electronico</h2></div>
			<h4><?php echo $correo; ?></h4>
		  <div class="content-box-blue">  <h2>Dia</h2></div>
			<h4><?php echo  $dia; ?></h4>
			
			<div class="content-box-blue"><h2>Horario</h2></div>
			<h4><?php if($row)
					{
						echo $row['horario'];
					}
					?>
			<div class="content-box-blue"><h2>Asunto</h2></div>
			<h4><?php if($row)
					{
						echo $row['asunto'];
					}
					
			?>
			</h4>
			
		<div class="content-box-blue">	<h2>Id del turno(copiarlo en caso de querer anular)</h2></div>
			<h4><?php if($row)
					{
						echo $row['id_turno'];
					}
			?>
			</h4>
	
				<div align="center">
				

						
					
					<button class="bubbly-button" onclick="window.location.href='index.php'" >Menu Principal</button>
					
					</div>
					</div>								
	
	<?php
}
?>
  
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script  src="turnos/script.js"></script>
  <script  src="turnos/boton.js"></script>
<script src="popup/popup.js"></script>
<script>

$(".accordion-titulo").click(function(){
		
   var contenido=$(this).next(".accordion-content");
			
   if(contenido.css("display")=="none"){ //open		
      contenido.slideDown(250);			
      $(this).addClass("open");
   }
   else{ //close		
      contenido.slideUp(250);
      $(this).removeClass("open");	
  }
							
});
</script>
</body>
</html>

<?php
}
?>
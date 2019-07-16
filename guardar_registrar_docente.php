<?php
	include 'includes/conexion.php';
		$nombre=$_POST['nombre'];
		$appa=$_POST['appa'];
		$apma=$_POST['apma'];
		$nocontrol=$_POST['nocontrol'];
		$usuario=$_POST['usuario'];
		$contrasena=$_POST['contrasena'];
		$telefono=$_POST['telefono'];
		$email=$_POST['email'];
		$carrera=$_POST['carrera'];

$mysqli -> query("INSERT INTO tbl_docente (nombre, appa, apma, nocontrol, usuario, contrasena, telefono, email, id_carrera) VALUES ('$nombre', '$appa', '$apma', '$nocontrol', '$usuario', '$contrasena', '$telefono', '$email', '$carrera')");

if (!$mysqli)
	 printf("Errormessage: %s\n", $mysqli->error);



?>

<br> Volver a:
<br><a href="index.php"> Menu inicio </a>
<br>O
<br><a href="administrador_registrar.php"> Alta Cientificos </a>
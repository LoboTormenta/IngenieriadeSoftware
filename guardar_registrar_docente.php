<?php
	include 'conexion.php';
		$nombre=$_POST['nombre'];
		$appa=$_POST['appa'];
		$apma=$_POST['apma'];
		$nocontrol=$_POST['nocontrol'];
		$usuario=$_POST['usuario'];
		$contrasena=$_POST['contrasena'];
		$telefono=$_POST['telefono'];
		$email=$_POST['email'];
		$carrera=$_POST['id_carrera'];


$query_insert="INSERT INTO tbl_docente (nombre, appa, apma, nocontrol, usuario, contrasena, telefono, email, id_carrera, nivel) VALUES ('$nombre', '$appa', '$apma', '$nocontrol', '$usuario', '$contrasena', '$telefono', '$email', '$carrera', '2')";
mysqli_query($conn,$query_insert);
	echo "HECHO, SE HA INSERTADO";
	header("Location: registrar_docente.php");
?>

<br> Volver a:
<br><a href="index.php"> Menu inicio </a>
<br>O
<br><a href="registrar_docente"> Alta Cientificos </a>
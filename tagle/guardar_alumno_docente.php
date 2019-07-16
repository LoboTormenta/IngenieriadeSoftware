<?php
	include 'includes/conexion.php';
	
		$id_alumno=$_POST['id_alumno'];
		$id_docente=$_POST['id_docente'];
		$id_revisor1=$_POST['id_revisor1'];
		$id_revisor2=$_POST['id_revisor2'];
		

$mysqli -> query("INSERT INTO tbl_alumno_docente (id_alumno, id_docente, id_revisor1, id_revisor2) VALUES ('$id_alumno', '$id_docente', '$id_revisor1', '$id_revisor2')");

if (!$mysqli)
	 printf("Errormessage: %s\n", $mysqli->error);



?>

<br> Volver a:
<br><a href="index.php"> Menu inicio </a>
<br>O
<br><a href="vincular_alumno_docente.php"> Registrar </a>

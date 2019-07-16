<!DOCTYPE html>
<html>
<head>
	<title>Registrar Docente</title>
</head>
<body>

<style>
#sidebar{
    float:left;
    width: 27%;
    height: auto;
}</style>

<aside id="sidebar">
<div>

<?php require 'menuadmin.php' ?>
</div>
</aside>

	<h1> Registrar Docente</h1>

	<form action="guardar_registrar_docente.php" method="POST">
		<br>
		<br>
		Nombre: <input type="text" name="nombre">
		<br>
		<br>
		Apellido Parerno: <input type="text" name="appa">
		<br>
		<br>
		Apellido Materno <input type="text" name="apma">
		<br>
		<br>
		Nº de Control <input type="text" name="nocontrol">
		<br>
		<br>
		Usuario: <input type="text" name="usuario">
		<br>
		<br>
		Contraseña: <input type="text" name="contrasena">
		<br>
		<br>
	    Teléfono: <input type="text" name="telefono">
		<br>
		<br>
		Email: <input type="text" name="email">
		<br>
		<br>
		
		<select name="carrera">
		<option value="1">Ingeniería en Sistemas Computacionales</option>
		<option value="2">Ingeniería en Bioquímica</option>
		<option value="3">Ingeniería en Gestión Empresarial</option>
		<option value="4">Ingeniería en Alimentos</option>
		<br>
		<br>

		<input type="submit" name="submit">

		<br>
		<br>
	</form>

</body>


</html>
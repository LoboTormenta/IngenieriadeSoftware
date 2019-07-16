<!DOCTYPE html>
<html>
<head>
	<title>Vincular alumno - docente </title>
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
<?php require 'menuadmin.php';
		require 'includes/conexion.php'
 ?>
</div>
</aside>
<div align="center">
	<h1> Vincular Alumno-Docente </h1>
</div>


<form action="guardar_alumno_docente.php" method="POST">
<div align="center">

    <h3>Demo de menú alumno desplegable</h3>
 
    <p>Seleccione un alumno del siguiente menú:</p>
    <p>Alumno:
      <select name="id_alumno">
        <option value="0">Selección:</option>
        <?php
 
          $query = $mysqli -> query ("SELECT * FROM tbl_alumno");
 
          while ($valores = mysqli_fetch_array($query)) {
 
            echo '<option value="'.$valores[id_alumno].'">'.$valores[nocontrol] .'	' .$valores[nombre].' ' .$valores[appa]. ' ' .$valores[apma].    '</option>';
 
          }
        ?>
      </select>
     
    </p>
  



  <br>
    <br>
      <br>
        <br>

    <h3>Demo de menú de tutor desplegable</h3>
 
    <p>Seleccione un docente del siguiente menú:</p>
    <p>Alumno:
      <select name="id_docente">
        <option value="0">Selección:</option>
        <?php
 
          $query = $mysqli -> query ("SELECT * FROM tbl_docente");
 
          while ($valores = mysqli_fetch_array($query)) {
 
            echo '<option value="'.$valores[id_docente].'">'.$valores[nocontrol] .'	' .$valores[nombre].' ' .$valores[appa]. ' ' .$valores[apma].    '</option>';
 
          }
        ?>
      </select>
      
    </p>
  

  <br>


    <h3>Demo de menú de revisor 1 desplegable</h3>
 
    <p>Seleccione el primer revisor del siguiente menú:</p>
    <p>Alumno:
      <select name="id_revisor1">
        <option value="0">Selección:</option>
        <?php
 
          $query = $mysqli -> query ("SELECT * FROM tbl_docente");
 
          while ($valores = mysqli_fetch_array($query)) {
 
            echo '<option value="'.$valores[id_docente].'">'.$valores[nocontrol] .'	' .$valores[nombre].' ' .$valores[appa]. ' ' .$valores[apma].    '</option>';
 
          }
        ?>
      </select>
     
    </p>
 
<br>


    <h3>Demo de menú de revisor 2 desplegable</h3>
 
    <p>Seleccione el segundo revisor del siguiente menú:</p>
    <p>Alumno:
      <select name="id_revisor2">
        <option value="0">Selección:</option>
        <?php
 
          $query = $mysqli -> query ("SELECT * FROM tbl_docente");
 
          while ($valores = mysqli_fetch_array($query)) {
 
            echo '<option value="'.$valores[id_docente].'">'.$valores[nocontrol] .'	' .$valores[nombre].' ' .$valores[appa]. ' ' .$valores[apma].    '</option>';
 
          }
        ?>
      </select>
     
    </p>
  <input type="submit" value="Submit">
</div>
</form>

<br>
<br>
<br>
<br>

<?php 
$connection = mysqli_connect("localhost", "root", "", "RESIDENCIASSEGUIMIENTO");
$sql = "SELECT adr.id_alumno AS adr_ida, adr.id_docente AS adr_doc, adr.id_revisor1 as adr_rev1, adr.id_revisor2 as adr_rev2, 
almn.nombre as nombrealmn, almn.appa as apellidopaalmn, almn.apma as apellidomaalnm,
 doc.nombre as docentenom, doc.appa as docenteappa, doc.apma as docenteapma, 
rev1.nombre as nombrerev1, rev1.appa as apparev1, rev1.apma as apmarev1, 
rev2.nombre as nombrerev2, rev2.appa as apparev2, rev2.apma as apmarev2, 
carrera.NombreCarrera AS carr


FROM tbl_alumno_docente AS adr 


INNER JOIN tbl_alumno AS almn ON adr.id_alumno = almn.id_alumno

INNER JOIN tbl_docente AS doc ON adr.id_docente = doc.id_docente

INNER JOIN tbl_docente AS rev1 ON adr.id_revisor1 = rev1.id_docente

INNER JOIN tbl_docente AS rev2 ON adr.id_revisor2 = rev2.id_docente

INNER JOIN tbl_carrera AS carrera on adr.id_alumno = carrera.id_carrera

";



$result = mysqli_query($connection, $sql);
?>

<div class="container">
	<h3 align="center">Fetch Data from two table join</h3>
	<div class="table-resposive" align="center">
		<table class="table table-resposive" align="center">
			<tr>
				<th>Nombre Alumno</th>
				<th>Tutor Docente</th>
				<th>Docente revisor1</th>
				<th>Docente revisor2</th>
				<th>Carrera</th>

			</tr>
			<?php 
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_array($result)) {
					?>	
					<tr>
						<td><?php echo $row["nombrealmn"] .'	'.$row["apellidopaalmn"].'	'.$row["apellidomaalnm"] ; ?></td>

						<td><?php echo $row["docentenom"].'		'.$row["docenteappa"].'	'.$row["docenteapma"]; ?></td>

						<td><?php echo $row["nombrerev1"].'		'.$row["apparev1"].'	'.$row["apmarev1"]; ?></td>


						<td><?php echo $row["nombrerev2"].'		'.$row["apparev2"].'	'.$row["apmarev2"]; ?></td>

						<td><?php echo $row["carr"]; ?></td>


					</tr>
					<?php 
					}
				}
			?>
		</table>
	</div>
</div>





</body>
</html>
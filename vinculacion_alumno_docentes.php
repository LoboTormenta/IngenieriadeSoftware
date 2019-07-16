<?php 
$connection = mysqli_connect("localhost", "root", "", "RESIDENCIASSEGUIMIENTO");
$sql = "SELECT adr.id_alumno AS adr_ida, adr.id_docente AS adr_doc, adr.id_revisor1 as adr_rev1, adr.id_revisor2 as adr_rev2, almn.nombre as nombrealmn, almn.appa as apellidopaalmn, almn.apma as apellidomaalnm, doc.nombre as docentenom, doc.appa as docenteappa, doc.apma as docenteapma, rev1.nombre as nombrerev1, rev1.appa as apparev1, rev1.apma as apmarev1, rev2.nombre as nombrerev2, rev2.appa as apparev2, rev2.apma as apmarev2 FROM tbl_alumno_docente AS adr 


INNER JOIN tbl_alumno AS almn ON adr.id_alumno = almn.id_alumno

INNER JOIN tbl_docente AS doc ON adr.id_docente = doc.id_docente

INNER JOIN tbl_docente AS rev1 ON adr.id_revisor1 = rev1.id_docente

INNER JOIN tbl_docente AS rev2 ON adr.id_revisor2 = rev2.id_docente

";



$result = mysqli_query($connection, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>How to join table using php wiht sql</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<br/>
<div class="container">
	<h3 align="">Fetch Data from two table join</h3>
	<div class="table-resposive">
		<table class="table table-resposive">
			<tr>
				<th>Nombre Alumno</th>
				<th>Tutor Docente</th>
				<th>Docente revisor1</th>
				<th>Docente revisor2</th>

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
<?php
	session_start();
	if(isset($_SESSION['user']))
	{
?>


<?php


		$mysqli=mysqli_connect("localhost","root","","signature_igs16");
		$sql = $mysqli->query("SET NAMES 'utf8'");

		$id = intval($_POST['id']);
		$nombre  = mysqli_real_escape_string($mysqli,(strip_tags($_POST['nombre'], ENT_QUOTES)));
			
			mysqli_query ($mysqli, "UPDATE areas SET nombre = '$nombre' WHERE areas.id = '$id'") or die (mysql_error());
			echo"<script>alert('Carrera Editada Con Exito')</script>";
				?>
				<META HTTP-EQUIV="Refresh" CONTENT="0; URL=mostrar_area.php">
				
<?php
	}
	else
	{
		?>
		 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php">
		 <?php
	}
?>
<?php


	$ID_VEN = $_GET['id_ven'];
	$mysqli =new mysqli ("localhost","davidMorales","Edward10*","pruebas");		
	$sql = $mysqli->query("delete from vendedor where ID_VEN='$ID_VEN'")or die(mysqli_error($mysqli));	
	
	#echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=listar.php'>";
	echo "eliminado";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=listar.php'>";

?>
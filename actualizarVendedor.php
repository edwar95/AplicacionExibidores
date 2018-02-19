<?php



	$mysqli =new mysqli ("localhost","davidMorales","Edward10*","pruebas");	
	
	$id_ven = $_POST['id_ven'];
	$nombre1_ven = $_POST['nombre1_ven'];
	$nombre2_ven = $_POST['nombre2_ven'];
	$apellido1_ven = $_POST['apellido1_ven'];
	$apellido2_ven = $_POST['apellido2_ven'];
	$tlf_ven = $_POST['tlf_ven'];

		

	$sql = $mysqli->query("update vendedor set NOMBRE1_VEN='$nombre1_ven', NOMBRE2_VEN='$nombre2_ven', APELLIDO1_VEN='$apellido1_ven', APELLIDO2_VEN='$apellido2_ven', TLF_VEN='$tlf_ven' where ID_VEN=$id_ven") or die ("no sirve".mysqli_error($mysqli));
	
?>	
<SCRIPT LANGUAGE="javascript"> 
    alert("Cliente Actualizado"); 
</SCRIPT> 
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=listar.php">

	 


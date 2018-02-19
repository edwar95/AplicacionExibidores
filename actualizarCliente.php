<?php



	$mysqli =new mysqli ("localhost","davidMorales","Edward10*","pruebas");	
	
	$id_cli = $_POST['id_cli'];
	$nombre1_cli = $_POST['nombre1_cli'];
	$nombre2_cli = $_POST['nombre2_cli'];
	$apellido1_cli = $_POST['apellido1_cli'];
	$apellido2_cli = $_POST['apellido2_cli'];
	$tlf_cli = $_POST['tlf_cli'];

		

	$sql = $mysqli->query("update cliente set NOMBRE1_CLI='$nombre1_cli', NOMBRE2_CLI='$nombre2_cli', APELLIDO1_CLI='$apellido1_cli', APELLIDO2_CLI='$apellido2_cli', TLF_CLI='$tlf_cli' where ID_CLI=$id_cli") or die ("no sirve".mysqli_error($mysqli));
	
?>	
<SCRIPT LANGUAGE="javascript"> 
    alert("Vendedor Actualizado"); 
</SCRIPT> 
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=listarCliente.php">

	 


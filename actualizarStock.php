<?php



	$mysqli =new mysqli ("localhost","davidMorales","Edward10*","pruebas");	
	
	$id = $_POST['id'];
	$stock = $_POST['stock'];
		

	$sql = $mysqli->query("update stock set stock='$stock' where id=$id") or die ("no sirve".mysqli_error($mysqli));
	
?>	
<SCRIPT LANGUAGE="javascript"> 
    alert("Stock Actualizado"); 
</SCRIPT> 
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=listarExhibibor.php">

	 

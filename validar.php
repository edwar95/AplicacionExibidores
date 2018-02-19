<?php
$codigo=$_POST['codigo'];
$contrasenia=hash('sha512',$_POST['contrasenia']);
$tipo=$_POST['tipo'];

if($tipo=="Administrador"){
	$conexion=new mysqli ("localhost","davidMorales","Edward10*","pruebas");

	$consulta=$conexion->query("SELECT * FROM administrador WHERE COD_ADM ='$codigo' and pass_adm='$contrasenia'") or die ("no sirve");
	$filas=mysqli_num_rows($consulta);
	if($filas>0){
 		header("location:principalAdmin.html");
	}
	mysqli_free_result($consulta);
	mysqli_close($conexion);

}else if($tipo=="Vendedor"){
	$conexion=new mysqli ("localhost","davidMorales","Edward10*","pruebas");

	$consulta=$conexion->query("SELECT * FROM vendedor WHERE COD_VEN ='$codigo' and pass_ven='$contrasenia'") or die ("no sirve");
	$filas=mysqli_num_rows($consulta);
	if($filas>0){
 		header("location:principalVen.html");
	}
	mysqli_free_result($consulta);
	mysqli_close($conexion);
}


?>

<?php
$usuario=$_POST['usuario'];
$contrasenia=$_POST['contrasenia'];
$tipo=$_POST['tipo'];

if($tipo=="Administrador"){
	$tipo="admin";
}


$conexion=new mysqli ("localhost","davidMorales","Edward10*","proyprueba");

$consulta=$conexion->query("SELECT * FROM usuario WHERE USR_NAME ='$usuario' and pass='$contrasenia'and TIPO_USUARIO='$tipo'") or die ("no sirve");



$filas=mysqli_num_rows($consulta);
if($filas>0 && $tipo=="admin"){
  header("location:principalAdmin.html");
}
else if ($filas>0 && $tipo=="Vendedor"){
  header("location:principalVen.html");
}
mysqli_free_result($consulta);
mysqli_close($conexion);

 ?>

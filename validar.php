<?php
$usuario=$_POST['usuario'];
$contrasenia=$_POST['contrasenia'];
$tipo=$_POST['tipo'];

$conexion=new mysqli ("localhost","davidMorales","Edward10*","exibidores_db");
$consulta=$conexion->query("SELECT * FROM usuarios WHERE nombreUser='$usuario' and password='$contrasenia'and tipoUsuario='$tipo'") or die ("no sirve");


$filas=mysqli_num_rows($consulta);
if($filas>0 && $tipo=="Administrador"){
  header("location:principal.html");
}
else if ($filas>0 && $tipo=="Vendedor"){
  header("location:principal.html");
}
mysqli_free_result($consulta);
mysqli_close($conexion);

 ?>

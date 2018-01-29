<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contrasenia'];
$tipo=$_POST['tipo'];
//conectar a la bASE DE DATOS
$conexion=new mysqli ("localhost","davidMorales","Edward10*","exibidores_db");
$consulta=$conexion->query("SELECT * FROM usuarios WHERE nombreUser='$usuario' and password='$contraseña'and tipoUsuario='$tipo'") or die ("no sirve");

##$resultado= mysqli ($conexion, $consulta);
$filas=mysqli_num_rows($consulta);
if($filas>0){
header("location:principal.html");

}
else {
  echo "Error en la conexion";
}
mysqli_free_result($consulta);
mysqli_close($conexion);

 ?>

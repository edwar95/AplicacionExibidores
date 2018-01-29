<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
//conectar a la bASE DE DATOS
$conexion=mysqli connect("localhost","root",".","login");
$consulta="SELECT * FROM usuario WHERE usuario='$usuario' and contraseña='$contraseña'";
$resultado= mysqli query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
if($filas>0){
header("location:principal.html");

}
else {
  echo "Error en la conexion";
}
mysqli_fre_result($resultado);
mysqli_close($conexion);

 ?>

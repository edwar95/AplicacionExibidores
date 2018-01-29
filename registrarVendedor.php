<?php

$id_vendedor=$_POST['id_vendedor'];
$nombreVendedor=$_POST['nombreVendedor'];
$apellidoVendedor=$_POST['apellidoVendedor'];
$cedulaVendedor=$_POST['cedulaVendedor'];
$telefonoVendedor=$_POST['telefonoVendedor'];
$codVendedor=$_POST['codVendedor'];

$conexion=new mysqli ("localhost","davidMorales","Edward10*","exibidores_db");
$consulta=$conexion->query("INSERT into vendedor (id_vendedor,nombreVendedor,apellidoVendedor,cedulaVendedor,telefonoVendedor,codVendedor) values('$id_vendedor','$nombreVendedor','$apellidoVendedor','$cedulaVendedor','$telefonoVendedor','$codVendedor');") or die ("no sirve");

$conexion=null;
echo "todo bien"

?>
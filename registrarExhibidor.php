<?php
$tipo=$_POST['tipo'];
$tamanio=$_POST['tamanio'];
$peso=$_POST['peso'];
$stock=$_POST['stock'];


$conexion=new mysqli ("localhost","davidMorales","Edward10*","pruebas");
$id=$conexion->query("select MAX(id) from stock ");
$row = $id->fetch_assoc();
$idCod=$row['MAX(id)']+1;


$consulta2=$conexion->query("INSERT into stock (id,tipo,stock) values('$idCod','$tipo','$stock');") or die ("no sirve");

echo "<SCRIPT LANGUAGE='javascript'> ";
echo "alert('Exhibidor Registrado');";
echo "</SCRIPT> ";
echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=listarExhibibor.php'>";

?>
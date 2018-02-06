<?php

$nombre1=$_POST['nombre1'];
$nombre2=$_POST['nombre2'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$cedulaVendedor=$_POST['cedulaVendedor'];
$pasaporteVendedor=$_POST['pasaporteVendedor'];
$telefonoVendedor=$_POST['telefonoVendedor'];
$codVendedor=$_POST['codVendedor'];
$usrName=$nombre1.$apellido1;
$pass=$_POST['pass'];

$conexion=new mysqli ("localhost","davidMorales","Edward10*","proyprueba");
$consulta=$conexion->query("INSERT into vendedor (NOMBRE1_VEN,NOMBRE2_VEN,APELLIDO1_VEN,APELLIDO2_VEN,CEDULA_VEN,PASAPORTE_VEN,TLF_VEN,COD_VEN) values('$nombre1','$nombre2','$apellido1','$apellido2','$cedulaVendedor','$pasaporteVendedor','$telefonoVendedor','$codVendedor');") or die ("no sirve");
$id=$conexion->query("select MAX(ID_VEN) from vendedor ");
$conexion=null;
echo "todo bien ";

$row = $id->fetch_assoc();
$id_usr=$row['MAX(ID_VEN)'];

$conexion1=new mysqli ("localhost","davidMorales","Edward10*","proyprueba");
$consulta1=$conexion1->query("INSERT into usuario (ID_VEN,TIPO_USUARIO,USR_NAME,pass) values('$id_usr','Vendedor','$usrName','$pass');") or die ("no sirve");
$id2=$conexion1->query("select MAX(ID_USUARIO) from usuario ");
$conexion1=null;
echo "todo bien ";

$row2 = $id2->fetch_assoc();
$id_ven=$row2['MAX(ID_USUARIO)'];

$conexion2=new mysqli ("localhost","davidMorales","Edward10*","proyprueba");
$consulta2=$conexion2->query("update vendedor set ID_USUARIO='$id_ven' where ID_VEN='$id_usr'  ") or die ("no sirve");
$conexion2=null;
echo "todo bien $id_ven ";




?>
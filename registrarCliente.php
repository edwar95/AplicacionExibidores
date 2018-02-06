<?php

$nombre1=$_POST['nombre1'];
$nombre2=$_POST['nombre2'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$cedulaCliente=$_POST['cedulaCliente'];
$pasaporteCliente=$_POST['pasaporteCliente'];
$RUC=$_POST['RUC'];
$telefonoCliente=$_POST['telefonoCliente'];
$codCliente=$_POST['codCliente'];
$usrName=$nombre1.$apellido1;
$pass=$_POST['pass'];

$conexion=new mysqli ("localhost","davidMorales","Edward10*","proyprueba");
$consulta=$conexion->query("INSERT into cliente (NOMBRE1_CLI,NOMBRE2_CLI,APELLIDO1_CLI,APELLIDO2_CLI,CEDULA_CLI,PASAPORTE_CLI,RUC_CLI,TLF_CLI,COD_CLI) values('$nombre1','$nombre2','$apellido1','$apellido2','$cedulaCliente','$pasaporteCliente','$RUC','$telefonoCliente','$codCliente');") or die ("no sirve");
$id=$conexion->query("select MAX(ID_CLI) from cliente ");
$conexion=null;
echo "todo bien ";

$row = $id->fetch_assoc();
$id_usr=$row['MAX(ID_CLI)'];

$conexion1=new mysqli ("localhost","davidMorales","Edward10*","proyprueba");
$consulta1=$conexion1->query("INSERT into usuario (ID_CLI,TIPO_USUARIO,USR_NAME,pass) values('$id_usr','Cliente','$usrName','$pass');") or die ("no sirve");
$id2=$conexion1->query("select MAX(ID_USUARIO) from usuario ");
$conexion1=null;
echo "todo bien ";

$row2 = $id2->fetch_assoc();
$id_cli=$row2['MAX(ID_USUARIO)'];

$conexion2=new mysqli ("localhost","davidMorales","Edward10*","proyprueba");
$consulta2=$conexion2->query("update cliente set ID_USUARIO='$id_cli' where ID_CLI='$id_usr'  ") or die ("no sirve");
$conexion2=null;
echo "todo bien $id_cli ";




?>
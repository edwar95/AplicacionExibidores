<?php

$contador=0;

function validarNombre($cadena){
        $pattern = "/^[A-Z][a-zñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ, ]{2,}$/";
        if (preg_match($pattern, $cadena)) {
            return true;
        }
        return false;
}

function validarCI($strCedula)
{
   
        if (is_numeric($strCedula)) {
            $total_caracteres = strlen($strCedula);
            if ($total_caracteres == 10  ) {
                $nro_region = substr($strCedula, 0, 2);
                if ($nro_region >= 1 && $nro_region <= 24) {
                    $ult_digito = substr($strCedula, -1, 1);
                    $valor2     = substr($strCedula, 1, 1);
                    $valor4     = substr($strCedula, 3, 1);
                    $valor6     = substr($strCedula, 5, 1);
                    $valor8     = substr($strCedula, 7, 1);
                    $suma_pares = ($valor2 + $valor4 + $valor6 + $valor8);
                    $valor1     = substr($strCedula, 0, 1);
                    $valor1     = ($valor1 * 2);
                    if ($valor1 > 9) {
                        $valor1 = ($valor1 - 9);
                    } else {
                    }
                    $valor3 = substr($strCedula, 2, 1);
                    $valor3 = ($valor3 * 2);
                    if ($valor3 > 9) {
                        $valor3 = ($valor3 - 9);
                    } else {
                    }
                    $valor5 = substr($strCedula, 4, 1);
                    $valor5 = ($valor5 * 2);
                    if ($valor5 > 9) {
                        $valor5 = ($valor5 - 9);
                    } else {
                    }
                    $valor7 = substr($strCedula, 6, 1);
                    $valor7 = ($valor7 * 2);
                    if ($valor7 > 9) {
                        $valor7 = ($valor7 - 9);
                    } else {
                    }
                    $valor9 = substr($strCedula, 8, 1);
                    $valor9 = ($valor9 * 2);
                    if ($valor9 > 9) {
                        $valor9 = ($valor9 - 9);
                    } else {
                    }
                    $suma_impares = ($valor1 + $valor3 + $valor5 + $valor7 + $valor9);
                    $suma         = ($suma_pares + $suma_impares);
                    $dis          = substr($suma, 0, 1);
                    $dis          = (($dis + 1) * 10);
                    $digito       = ($dis - $suma);
                    if ($digito == 10) {
                        $digito = '0';
                    } else {
                    }
                    if ($digito == $ult_digito) {
                        return true;
                    } else {
                         return false;
                    }
                } else {
                     return false;
                }
            } else  {
                 return false;
            }
        } else if($strCedula==null){
            return true;
        }
    
}

function validarIdentificacion($strCedulaR, $strPasaporte,$strRuc){

	if($strCedulaR!=null or $strPasaporte!=null or $strRuc!=null){
		return true;

	}else{
		return false;
	}
}




$validacionNombre=validarNombre($_POST['nombre1']);

if($validacionNombre!=true){
	$contador+=1;
	echo "<script language='javascript'> alert('No se admite formato de nombre. Formato: ´David´  '); </script>";
	echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=registrarVendedor.html'>";
}else{
	$nombre1=$_POST['nombre1'];
}

$validacionNombre2=validarNombre($_POST['nombre2']);

if($_POST['nombre2'] and $validacionNombre2!=true){
	$contador+=1;
	echo "<script language='javascript'> alert('No se admite formato de nombre.  Formato: ´David´ '); </script>";
	echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=registrarVendedor.html'>";
}else if ($_POST['nombre2']==null  or $validacionNombre2==true ){
	$nombre2=$_POST['nombre2'];
}

$validacionApellido1=validarNombre($_POST['apellido1']);

if($validacionApellido1!=true){
	$contador+=1;
	echo "<script language='javascript'> alert('No se admite formato de apellido.  Formato: ´Morales´ '); </script>";
	echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=registrarVendedor.html'>";
}else{
	$apellido1=$_POST['apellido1'];
}

$validacionApellido2=validarNombre($_POST['apellido2']);

if($_POST['apellido2'] and $validacionApellido2!=true){
	$contador+=1;
	echo "<script language='javascript'> alert('No se admite formato de nombre.  Formato: ´David´ '); </script>";
	echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=registrarVendedor.html'>";
}else if ($_POST['apellido2']==null  or $validacionNombre2==true ){
	$apellido2=$_POST['apellido2'];
}




if(validarIdentificacion($_POST['cedulaCliente'],$_POST['pasaporteCliente'],$_POST['RUC'])==true){
	if($_POST['cedulaCliente']!=null){
		$validarCedula =validarCI($_POST['cedulaCliente']);
		$pasaporteCliente=$_POST['pasaporteCliente'];
		$RUC=$_POST['RUC'];
		if($validarCedula!=true){
			$contador+=1;
			echo "<script language='javascript'> alert('Cedula incorrecta'); </script>";
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=registrarVendedor.html'>";
		}else {
			$cedulaCliente=$_POST['cedulaCliente'];
			$pass=$_POST['cedulaCliente'];
		}
	}else if($_POST['pasaporteCliente']!=null){
		$pasaporteCliente=$_POST['pasaporteCliente'];
		$cedulaCliente=$_POST['cedulaCliente'];
		$RUC=$_POST['RUC'];
		$pass=$_POST['pasaporteCliente'];
	}else if($_POST['RUC']!=null){
		$pasaporteCliente=$_POST['pasaporteCliente'];
		$cedulaCliente=$_POST['cedulaCliente'];
		$RUC=$_POST['RUC'];
		$pass=$_POST['RUC'];
	}

}else {
	$contador+=1;
	echo "<script language='javascript'> alert('Ingrese cédula o pasaporte'); </script>";
	echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=registrarVendedor.html'>";
}











if($contador==0){

	$telefonoCliente=$_POST['telefonoCliente'];

	$conexion=new mysqli ("localhost","davidMorales","Edward10*","pruebas");
	$id=$conexion->query("select MAX(ID_CLI) from cliente ");
	$row = $id->fetch_assoc();
	$idCod=$row['MAX(ID_CLI)']+1;

	$codCliente="CLI".$idCod;
	$password=$pass.$codCliente;
	$passwd=hash('sha512', $password);


	$consulta=$conexion->query("INSERT into cliente (NOMBRE1_CLI,NOMBRE2_CLI,APELLIDO1_CLI,APELLIDO2_CLI,CEDULA_CLI,PASAPORTE_CLI,RUC_CLI,TLF_CLI,PASS_CLI,COD_CLI) values('$nombre1','$nombre2','$apellido1','$apellido2','$cedulaCliente','$pasaporteCliente','$RUC','$telefonoCliente','$passwd','$codCliente');") or die ("no sirve");
	$id=$conexion->query("select MAX(ID_CLI) from cliente ");
	$conexion=null;
	echo "todo bien ";

	

	echo "<SCRIPT LANGUAGE='javascript'> ";
	echo "alert('Vendedor Registrado');";
	echo "</SCRIPT> ";
	echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=listarCliente.php'>";
}




?>

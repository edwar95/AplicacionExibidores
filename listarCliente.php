<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Clientes</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">	
	<script src="js/metodos.js"></script>
	<style type="text/css">
             
            *{
                margin: 0;
                padding: 0;
                font-family: sans-serif;
                box-sizing: border-box;
            }
             
            
        
            body{
                margin: 2%;
                font-family: sans-serif;
                background: #FFF;
            }
             
            header{
                width: 100%;
                background:#223870 ; 
                border-radius: 10px;
                align-items: center; 
            }
             
            #btn-menu{     
                display: none;     
            }
             
            header label {
                display: none;
                width: 30px;
                height: 30px;
                padding: 1%;
                border-right: 1px solid #fff;
            }
             
            header label:hover {
                cursor: pointer;
                background:#223870 ;
            }    
             
            .menu ul{                 
                margin: 0%; 
                list-style: none;
                padding: 0;
                display: flex;
            }
             
            .menu li{
                text-align: center;
                flex-grow: 1;
                border-right: none;
            }
            
            .menu li:hover {
                background: #223870;
            }
            
            .menu li a {
                display: block;
                padding: 10px 20px;
                color: #fff;
                text-decoration: none;
            }
             
            .menu ul ul {
                display: none;
                flex-direction: column; 
            }
             
            .menu a{
                display: block;
                padding: 10px 20px;
            }
            
            .menu a:hover{
                 
                background: rgba(0,0,0,0.4);
                border-radius: 10px;
            }
              
            .menu ul li:hover ul{
                display: block;
                position: absolute;
                background:#566BA3 ;
                border-radius: 10px;
            }
            
            @media(max-width:768px) {
                header label{
                    margin: 3%;
                    display: block;
                }

                .menu{
                    position: absolute;
                    background: #223870;
                    width: 30%;
                    margin-left: -40%;
                    transition: all 0.5s;
                }
                 
                .menu ul{
                    flex-direction: column;
                    margin: 0%; 
                }

                .menu ul li:hover ul{
                    display: none;
                }
                 
                .menu li {
                    border-top: 1px solid #fff;
                }
                 
                #btn-menu:checked ~ .menu {
                    margin: 0%;
                }
                 
                html, main{
                    height: 100%;
                }  
            }
             
            .horizontal{
                display: flex;
                justify-content: center;
            }

            .vertical{
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .divPadre{
                height: 100%
            }
             
      
             

        </style>    
</head>
<body>

	<header>
            <input type="checkbox" id="btn-menu">
            <label for="btn-menu"> <img src="1496968559-jd25_84667.png" all=""> </label>
            <nav class="menu">
            
                <ul>
                    <li class="submenu"><a href=""> VENDEDORES   </a>
                        <ul>
                        <li  ><a href="principalVen.php"> Registrar Vendedor</a>  </li>
                        <li  ><a href="principalVen.php">  Buscar </a>  </li>
                        </ul>             
     
                    </li>
                    
                    <li><a href=""> CLIENTES  </a>
                        <ul>

                        <li  ><a href="registrarCliente.html">  Registrar Cliente </a>  </li>
                            <li  ><a href="listarCliente.php">  Buscar </a>  </li>
                        
                                
                </ul>   
                        </li> 
                    
                    <li class="submenu"><a href=" "> EXHIBIDORES  </a>
                    <ul>
                        <li  ><a href=""> Datos Exhibidor</a>  </li>
                            <li  ><a href=" ">  Buscar </a>  </li>
                            <li><a href="acercade.html"> STOCK  </a>
                        
                        </ul>           
     
                    </li>
                    
                    <li><a href=""> GUIA DE ENTREGA  </a>
                    <ul>
                        <li  ><a href=""> Registrar Guia</a> </li>
                        
                        <li  ><a href="">  Buscar </a>  </li>
                        
                        </ul> 
                    
                    </li>
                    <li><a href=""> REPORTES  </a>
                         <ul>
                        <li  ><a href=""> Clientes</a>  </li>
                            <li  ><a href="">  Exhibidores </a>  </li>
                        
                        </ul> 
                    
                    
                    </li>
                    
                    
                
            
            </nav>
        </header>    

	<div class="container">
		<div class="row">	

			<table class='table'>
				<tr>
					<th>Id</th><th>Nombres</th><th> </th><th>Apellidos</th><th> </th><th>Cedula</th><th>Pasaporte</th><th>RUC</th><th>Teléfono</th><th>Código</th><th><span class="glyphicon glyphicon-wrench"></span></th>
				</tr>			
<?php
			
			$mysqli =new mysqli ("localhost","davidMorales","Edward10*","pruebas");	
			if ($mysqli->connect_errno) {
			    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			    exit();
			}
			$consulta= "SELECT * FROM cliente";
			if ($resultado = $mysqli->query($consulta)) 
			{
				while ($fila = $resultado->fetch_row()) 
				{					
					echo "<tr>";
					echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td><td>$fila[6]</td><td>$fila[7]</td><td>$fila[8]</td><td>$fila[9]</td>";	
					echo"<td>";						
				    echo "<a data-toggle='modal' data-target='#editUsu' data-id_cli='" .$fila[0] ."' data-nombre1_cli='" .$fila[1] ."'data-nombre2_cli='" .$fila[2] ."'  data-apellido1_cli='" .$fila[3] ."' data-apellido2_cli='".$fila[4] ."' data-cedula_cli='" .$fila[5] ."'data-pasaporte_cli='" .$fila[6] ."'data-ruc_cli='" .$fila[7] ."'data-tlf_cli='" .$fila[8] ."'data-cod_cli='" .$fila[9] ."'  class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span>Editar</a> ";			
					echo "<a class='btn btn-danger' href='eliminarVendedor.php?id_ven=" .$fila[0] ."'><span class='glyphicon glyphicon-remove'></span>Eliminar</a>";		
					echo "</td>";
					echo "</tr>";
				}
				$resultado->close();
			}
			$mysqli->close();			
			
	

?>
	        </table>
		</div> 


		

		<div class="modal" id="editUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Editar Vendedor</h4>
                    </div>
                    <div class="modal-body">                      
                       <form action="actualizarCliente.php" method="POST">                       		
                       		        
                       		        <input  id="id_cli" name="id_cli" type="hidden" ></input>   		
		                       		<div class="form-group">
		                       			<label for="nombre1_cli">Primer Nombre:</label>
		                       			<input class="form-control" id="nombre1_cli" name="nombre1_cli" type="text" ></input>
		                       		</div>
		                       		<div class="form-group">
		                       			<label for="nombre2_cli">Segundo Nombre:</label>
		                       			<input class="form-control" id="nombre2_cli" name="nombre2_cli" type="text" ></input>
		                       		</div>
		                       		<div class="form-group">
		                       			<label for="apellido1_cli">Primer Apellido:</label>
		                       			<input class="form-control" id="apellido1_cli" name="apellido1_cli" type="text" ></input>
		                       		</div>

		                       		<div class="form-group">
		                       			<label for="apellido2_cli">Segundo Apellido:</label>
		                       			<input class="form-control" id="apellido2_cli" name="apellido2_cli" type="text" ></input>
		                       		</div>
		                       		
		                       		<div class="form-group">
		                       			<label for="tlf_ven">Teléfono:</label>
		                       			<input class="form-control" id="tlf_cli" name="tlf_cli" type="text" ></input>
		                       		</div>
		                       		

									<input type="submit" class="btn btn-success">							
                       </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>		
	<script>			 
		  $('#editUsu').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var recipient0 = button.data('id_cli')
		  var recipient1 = button.data('id_usuario')
		  var recipient2 = button.data('nombre1_cli')
		  var recipient3 = button.data('nombre2_cli')
		  var recipient4 = button.data('apellido1_cli')
		  var recipient5 = button.data('apellido2_cli')
		  var recipient6 = button.data('cedula_cli')
		  var recipient7 = button.data('pasaporte_cli')
          var recipient8 = button.data('ruc_cli')
		  var recipient9 = button.data('tlf_ven')
		  var recipient10 = button.data('cod_ven')
		   // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		 
		  var modal = $(this)		 
		  modal.find('.modal-body #id_cli').val(recipient0)
		  modal.find('.modal-body #id_usuario').val(recipient1)
		  modal.find('.modal-body #nombre1_cli').val(recipient2)
		  modal.find('.modal-body #nombre2_cli').val(recipient3)
		  modal.find('.modal-body #apellido1_cli').val(recipient4)
		  modal.find('.modal-body #apellido2_cli').val(recipient5)
		  modal.find('.modal-body #cedula_cli').val(recipient6)
		  modal.find('.modal-body #pasaporte_cli').val(recipient7)
          modal.find('.modal-body #ruc_cli').val(recipient8)
		  modal.find('.modal-body #tlf_cli').val(recipient9)
		  modal.find('.modal-body #cod_cli').val(recipient10)	

		});
		
	</script>
	
</body>
</html>		
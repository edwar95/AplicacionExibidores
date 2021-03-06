<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Vendedores</title>
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
                        <li  ><a href="registrarVendedor.html"> Registrar Vendedor</a>  </li>
                        <li  ><a href="listar.php">  Buscar </a>  </li>
                        </ul>             
     
                    </li>
                    
                    <li><a href=""> CLIENTES  </a>
                        <ul>

                        <li  ><a href="principalAdmin.php">  Registrar Cliente </a>  </li>
                            <li  ><a href="principalAdmin.php">  Buscar </a>  </li>
                        
                                
                </ul>   
                        </li> 
                    
                    <li class="submenu"><a href=" "> EXHIBIDORES  </a>
                    <ul>
                        <li  ><a href="registrarExhibidor.html"> Registrar Exhibidor</a>  </li>
                            <li  ><a href="listarExhibibor.php">  Buscar </a>  </li>
                           
                        </ul>           
     
                    </li>
                    
                    <li><a href=""> GUIA DE ENTREGA  </a>
                    <ul>
                        <li  ><a href="principalAdmin.php"> Registrar Guia</a> </li>
                        
                        <li  ><a href="principalAdmin.php">  Buscar </a>  </li>
                        
                        </ul> 
                    
                    </li>
                    <li><a href=""> REPORTES  </a>
                         <ul>
                        <li  ><a href="principalAdmin.php"> Clientes</a>  </li>
                            <li  ><a href="principalAdmin.php">  Exhibidores </a>  </li>
                        
                        </ul> 
                    
                    
                    </li>
                    
                    
                
            
            </nav>
        </header>    

	<div class="container">
		<div class="row">	

			<table class='table'>
				<tr>
					<th>Id</th><th>Nombres</th><th> </th><th>Apellidos</th><th> </th><th>Cedula</th><th>Pasaporte</th><th>Teléfono</th><th>Código</th><th><span class="glyphicon glyphicon-wrench"></span></th>
				</tr>			
<?php
			
			$mysqli =new mysqli ("localhost","davidMorales","Edward10*","pruebas");	
			if ($mysqli->connect_errno) {
			    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			    exit();
			}
			$consulta= "SELECT * FROM vendedor";
			if ($resultado = $mysqli->query($consulta)) 
			{
				while ($fila = $resultado->fetch_row()) 
				{					
					echo "<tr>";
					echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td><td>$fila[6]</td><td>$fila[7]</td><td>$fila[9]</td>";	
					echo"<td>";						
				    echo "<a data-toggle='modal' data-target='#editUsu' data-id_ven='" .$fila[0] ."' data-nombre1_ven='" .$fila[1] ."'data-nombre2_ven='" .$fila[2] ."'  data-apellido1_ven='" .$fila[3] ."' data-apellido2_ven='".$fila[4] ."' data-cedula_ven='" .$fila[5] ."'data-pasaporte_ven='" .$fila[6] ."'data-tlf_ven='" .$fila[7] ."'data-cod_ven='" .$fila[9] ."'  class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span>Editar</a> ";			
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
                       <form action="actualizarVendedor.php" method="POST">                       		
                       		        
                       		        <input  id="id_ven" name="id_ven" type="hidden" ></input>   		
		                       		<div class="form-group">
		                       			<label for="nombre1_ven">Primer Nombre:</label>
		                       			<input class="form-control" id="nombre1_ven" name="nombre1_ven" type="text" ></input>
		                       		</div>
		                       		<div class="form-group">
		                       			<label for="nombre2_ven">Segundo Nombre:</label>
		                       			<input class="form-control" id="nombre2_ven" name="nombre2_ven" type="text" ></input>
		                       		</div>
		                       		<div class="form-group">
		                       			<label for="apellido1_ven">Primer Apellido:</label>
		                       			<input class="form-control" id="apellido1_ven" name="apellido1_ven" type="text" ></input>
		                       		</div>

		                       		<div class="form-group">
		                       			<label for="apellido2_ven">Segundo Apellido:</label>
		                       			<input class="form-control" id="apellido2_ven" name="apellido2_ven" type="text" ></input>
		                       		</div>
		                       		
		                       		<div class="form-group">
		                       			<label for="tlf_ven">Teléfono:</label>
		                       			<input class="form-control" id="tlf_ven" name="tlf_ven" type="text" ></input>
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
		  var recipient0 = button.data('id_ven')
		  var recipient2 = button.data('nombre1_ven')
		  var recipient3 = button.data('nombre2_ven')
		  var recipient4 = button.data('apellido1_ven')
		  var recipient5 = button.data('apellido2_ven')
		  var recipient6 = button.data('cedula_ven')
		  var recipient7 = button.data('pasaporte_ven')
		  var recipient8 = button.data('tlf_ven')
		  var recipient9 = button.data('cod_ven')
		   // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		 
		  var modal = $(this)		 
		  modal.find('.modal-body #id_ven').val(recipient0)
		  modal.find('.modal-body #nombre1_ven').val(recipient2)
		  modal.find('.modal-body #nombre2_ven').val(recipient3)
		  modal.find('.modal-body #apellido1_ven').val(recipient4)
		  modal.find('.modal-body #apellido2_ven').val(recipient5)
		  modal.find('.modal-body #cedula_ven').val(recipient6)
		  modal.find('.modal-body #pasaporte_ven').val(recipient7)
		  modal.find('.modal-body #tlf_ven').val(recipient8)
		  modal.find('.modal-body #cod_ven').val(recipient9)	

		});
		
	</script>
	
</body>
</html>		
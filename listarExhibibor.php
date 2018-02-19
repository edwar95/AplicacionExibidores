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
                    <li class="submenu"><a href=""> EXHIBIDORES   </a>
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
					<th>Id</th><th>Tipo</th><th>Stock</th><th><span class="glyphicon glyphicon-wrench"></span></th>
				</tr>			
<?php
			
			$mysqli =new mysqli ("localhost","davidMorales","Edward10*","pruebas");	
			if ($mysqli->connect_errno) {
			    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			    exit();
			}
			$consulta= "SELECT * FROM stock";
			if ($resultado = $mysqli->query($consulta)) 
			{
				while ($fila = $resultado->fetch_row()) 
				{					
					echo "<tr>";
					echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td>";	
					echo"<td>";						
				    echo "<a data-toggle='modal' data-target='#editUsu' data-id='" .$fila[0] ."' data-tipo='" .$fila[1] ."'data-stock='" .$fila[2] ."'class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span>Editar Stock</a> ";					
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
                        <h4>Editar Stock</h4>
                    </div>
                    <div class="modal-body">                      
                       <form action="actualizarStock.php" method="POST">                       		
                       		        
                       		        <input  id="id" name="id" type="hidden" ></input>   		
		                       		
		                       		
		                       		<div class="form-group">
		                       			<label for="tlf_ven">Stock:</label>
		                       			<input class="form-control" id="stock" name="stock" type="text" ></input>
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
		  var recipient0 = button.data('id')
		  var recipient2 = button.data('tipo')
		  var recipient3 = button.data('stock')
		  

		   // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		 
		  var modal = $(this)		 
		  modal.find('.modal-body #id').val(recipient0)
		  modal.find('.modal-body #tipo').val(recipient2)
		  modal.find('.modal-body #stock').val(recipient3)
		  	

		});
		
	</script>
	
</body>
</html>		
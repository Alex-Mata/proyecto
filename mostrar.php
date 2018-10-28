<?php
	session_start();
	if(isset($_SESSION['user']))
	{
?>
<!DOCTYPE html>
<html>
<script>
function numeros(e){
                 key = e.keyCode || e.which;
                 tecla = String.fromCharCode(key).toLowerCase();
                 letras = "0123456789";
                 especiales = [];
 
                 tecla_especial = false
                 for(var i in especiales){
                 if(key == especiales[i]){
                 tecla_especial = true;
                 break;
                 } 
                 }
 
                 if(letras.indexOf(tecla)==-1 && !tecla_especial)
                 return false;
                 }       
</script>
<head>
	<title></title>
	 
    <script src="js/jquery.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <script src="bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="js/metodos.js"></script>
</head>
<body>
<div id="co" class="container">
  <header>
    <nav id="nav" class="navbar navbar-light navbar-fixed-top" style="background-color: #1e1e1e;"">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#navbar-1">
          <span class="sr-only">menu</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
<style type="text/css">
body {
	padding-top: 90px;
}
	.nav li, a {
		color: #fff;
	}
</style>
          <a href="index.php" class="navbar-brand">Signature-IGS16</a>
        </div>
        
        <div class="callapse navbar-collapse" id="navbar-1">
          <ul class="nav navbar-nav navbar-center">
            <li><a href="docente.php">Agregar Docente</a></li>
             <ul class="nav navbar-nav navbar-center">
          <li>
     <form action="busqueda.php" method="POST" autocomplete="off" style="padding-top: 2.5%;" class="form-inline my-3 my-lg-1">
      <input class="form-control mr-sm-3" name="caja_busqueda" id="caja_busqueda" type="text" placeholder="Buscar" aria-label="Buscar">
      <button class="btn btn-info my-2 my-sm-0" type="submit">Buscar</button>
    </form>
    </li>
 		</ul>  
            <li><a href="horario.php">Agregar Horario</a></li>
            <li><a href="materia.php">Agregar Materia</a></li>
          </ul>       
        </div>
      </div>
    </nav>
  </header>
</div>



<div class="container">
	
		<div class="row">
		<table class="table table-hover table-striped table-condensed">
			<thead>
				<tr>
					<th scope="col">ID:</th>
					<th scope="col">NOMBRE:</th>
					<th scope="col">TITULO:</th>
					<th scope="col">TELEFONO:</th>
					<th scope="col">EXCLUSIVIDAD:</th>
					<th scope="col">CEDULA PROFESIONAL:</th>
					<th><span class="glyphicon glyphicon-wrench"></span></th>
				</tr>	
			</thead>


		<?php
		$mysqli = new mysqli("localhost", "root", "", "signature_igs16");	
		$sql = $mysqli->query("SET NAMES 'utf8'");	
			if ($mysqli->connect_errno) {
			    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			    exit();
			}
			$consulta= "SELECT * FROM docentes";
			if ($resultado = $mysqli->query($consulta)) 
			{
				while ($fila = $resultado->fetch_row()) 
				{					
					echo "<tr>";
					echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td>";	
					echo"<td>";						
				    echo "<a data-toggle='modal' data-target='#editUsu' data-id='" .$fila[0] ."' data-nombre='" .$fila[1] ."' data-titulo='" .$fila[2] ."' data-telefono='" .$fila[3] ."' data-exclusividad='" .$fila[4] ."' data-cedula_profesional='" .$fila[5] ."' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span> Editar</a> ";			
					echo "<a class='btn btn-danger' href='elimina.php?id=" .$fila[0] ."'><span class='glyphicon glyphicon-trash'></span> Eliminar</a>";		
					echo "</td>";
					echo "</tr>";
				}
				$resultado->close();
			}
			$mysqli->close();
			?>
		</table>
		</div>
</div>

	<div class="modal" id="editUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Editar Docente</h4>
                    </div>
                    <div class="modal-body">                      
                       <form action="actualiza.php" method="POST" autocomplete="off">                       		

                       		        <input class="form-control" id="id" name="id" type="hidden" ></input>   		
		                       		<div class="form-group">
		                       			<label for="nombre">NOMBRE:</label>
		                       			<input class="form-control" required id="nombre" name="nombre" type="text"></input>
		                       		</div>
		                       		<div class="form-group">
		                       			<label for="titulo">TITULO:</label>
		                       			<input class="form-control" required id="titulo" name="titulo" type="text"></input>
		                       		</div>
		                       		<div class="form-group">
		                       			<label for="telefono">TELEFONO:</label>
		                       			<input class="form-control" required id="telefono" name="telefono" maxlength="10" onkeypress="return numeros(event)" type="text"></input>
		                       		</div>
		                       		<div class="form-group">
                            <label  for="exclusividad">Exclusividad:</label>
                            <select id="exclusividad" name="exclusividad" class="form-control">
                              <option value="Fijo">Fijo</option>
                              <option value="Temporal">Temporal</option>
                              <option value="Inactivo">Inactivo</option>
                            </select>
                          </div>
		                       		<div class="form-group">
		                       			<label for="cedula_profesional">CEDULA PROFESIONAL:</label>
		                       			<input class="form-control" required id="cedula_profesional" name="cedula_profesional" type="text"></input>
		                       		</div>

									<input type="submit" class="btn btn-success" value="Editar">
									
                       </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
    </div>
    </div>

    <script>			 
		  $('#editUsu').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Boton que activa el modal
		  var recipient0 = button.data('id')
		  var recipient1 = button.data('nombre')
		  var recipient2 = button.data('titulo')
		  var recipient3 = button.data('telefono')
		  var recipient4 = button.data('exclusividad')
		  var recipient5 = button.data('cedula_profesional')

			//Extraer información de los atributos data- *
			// Si es necesario, puede iniciar una solicitud AJAX aquí (y luego hacer la actualización en una devolución de llamada).
			// Actualiza el contenido modal. Utilizaremos jQuery aquí, pero en su lugar podría usar una biblioteca de enlace de datos u otros métodos.
		  
		 
		  var modal = $(this)		 
		  modal.find('.modal-body #id').val(recipient0)
		  modal.find('.modal-body #nombre').val(recipient1)
		  modal.find('.modal-body #titulo').val(recipient2)
		  modal.find('.modal-body #telefono').val(recipient3)	
		  modal.find('.modal-body #exclusividad').val(recipient4)
		  modal.find('.modal-body #cedula_profesional').val(recipient5)	 
		});
		
	</script>

</body>
</html>

<?php
	}
	else
	{
		?>
		 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php">
		 <?php
	}
?>
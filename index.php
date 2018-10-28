<?php
	session_start();
	if(isset($_SESSION['user']))
	{
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/slider.css">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/stilospaneles.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
	<meta name="">
    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=, initial-scale=1, maximum-scale=1, minima-scale=1">
    <link rel="stylesheet" type="text/css" href="css/pie.css">
  

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
<script type='text/javascript'>
$(function(){
$('.input-group.date').datepicker({
    calendarWeeks: true,
    todayHighlight: true,
    autoclose: true
});  
});
</script>

</head>
<body>
<header>
<div class="contenedor">
	<div class="slider">
		<ul>
		<li><img src="img/icep.png"></li>
		<li><img src="img/amistad.jpg"></li>
		<li><img src="tecla.jpg"></li>
		</ul>
	</div>


</div>						
</header>

<div class="container">
	<div class="panel panel-primary">
 
  <div class="panel-heading">signature igs16</div>
  <div class="panel-body">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
</div>

<div class="row">
	<div class="col-6 col-sm-4">
		<div id="panel" class="panel panel-success">
			<div class="panel-heading text-center"><strong>Alta Docentes</strong><img style="width: 30% " align="left" src="registrado.png" class="img-circle"></div>
  			<div class="panel-body">
    			<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    				<div style="padding-top: 20px;" class="form-group">
    					<div class="col-md-2 col-md-offset-2">
    						<a data-toggle='modal' data-target='#agregarDocente' class='btn btn-success'>Agregar</a>
						</div>
						<div class="col-md-2 col-md-offset-2">
						  	<a href="mostrar.php">
                               <input type="submit" class="btn btn-warning" value="Mostrar Registros">
                            </a>
                         </div>
    				</div>
    			</div>
 		 	</div>
		</div>	
					

	<div class="col-6 col-sm-4">
		<div class="panel panel-danger">
  			<div class="panel-heading text-center"><img style="width: 30% " align="left" src="Horario.png" class="img-circle"><strong>Horarios</strong>
        </div>
  			<div class="panel-body">
    			<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    			<div style="padding-top: 20px;" class="form-group">
    					<div class="col-md-2 col-md-offset-2">
    						<a data-toggle='modal' data-target='#agregarHorario' class='btn btn-danger'>Agregar</a>
						</div>

						<div class="col-md-2 col-md-offset-2">
						  	<a href="mostrar_horario.php">
                               <input type="submit" class="btn btn-warning" value="Mostrar Registros">
                            </a>
                         </div>
    				</div>
 		 	</div>
		</div>	
	</div>

	<div class="col-6 col-sm-4">
		<div class="panel panel-primary">
  			<div class="panel-heading text-center"><img style="width: 30% " align="left" src="libros.jpg" class="img-circle"><strong>Agregar materia</strong></div>
  			<div class="panel-body">
    			<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    			<div style="padding-top: 20px;" class="form-group">
    					<div class="col-md-2 col-md-offset-2">
    						<a data-toggle='modal' data-target='#agregarMateria' class='btn btn-primary'>Agregar</a>
						</div>
							<div class="col-md-2 col-md-offset-2">
						  		<a href="mostrar_materia.php">
                                   <input type="submit" class="btn btn-warning" value="Mostrar Registros">
                                </a>
                            </div>
    			</div>
 		 	</div>
		</div>	
	</div>
</div>

<footer>
	<div class="">
		<div class="row">
			<div class="col-xs-6">
				<p>Asignature igs16</p>
			</div>
			<div class=" col-xs-6 ">
				<ul class="list-inline text-right">
					<li><a href="#">Inicio</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<a href="logout.php">
<input type="submit" name="cerrar" value="cerrar secion" class="btn btn-warning">
</a>


<div class="modal" id="agregarHorario" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Agregar Horario:</h4>
                    </div>
                    <div class="modal-body">                      
                       <form class="form-horizontal" action="insertar_horario.php" method="POST" autocomplete="off">                           

                                  <input class="form-control" id="id" name="id" type="hidden" ></input>       
                              <div class="form-group">
      <label class="form-label col-md-2 " >Materia:</label>
      <div class="col-md-10">
        <select class="form-control" id="materia" name="materia">
        <option value="0">Seleccione:</option>
        <?php
    $mysqli = mysqli_connect('localhost', 'root', '', "signature_igs16");
    $sql = $mysqli->query("SET NAMES 'utf8'");
  if (mysqli_connect_errno($mysqli))
    echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
  $mysqli->set_charset('utf8');
  $query = 'SELECT * FROM `materias`';
  $result = $mysqli->query($query);
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    echo '<option value="'.$row[nombre].'">'.$row[nombre].'</option>';
  }
      ?>
      </select>
    </div>
    </div>

    <div class="form-group">
      <label class="form-label col-md-2 " >Docente:</label>
      <div class="col-md-10">
        <select class="form-control" id="docente" name="docente">
        <option value="0">Seleccione:</option>
        <?php
    $mysqli = mysqli_connect('localhost', 'root', '', "signature_igs16");
    $sql = $mysqli->query("SET NAMES 'utf8'");
  if (mysqli_connect_errno($mysqli))
    echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
  $mysqli->set_charset('utf8');
  $query = 'SELECT * FROM `docentes`';
  $result = $mysqli->query($query);
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    echo '<option value="'.$row[nombre].'">'.$row[nombre].'</option>';
  }
      ?>
      </select>
    </div>
    </div>

    <div class="form-group">
           <label class="form-label col-md-4" >Dias Laborales:</label>
           <div class="col-md-8">
              <select class="form-control" id="dias" name="dias">
                 <option selected>Seleccione:</option>
                 <option value="Sabado">Sabado</option>
                 <option value="Domigo">Domigo</option>
              </select>
             </div>
    </div>
                          
  <div class="form-group">
   <label class="form-label col-md-2 " >Grupo:</label>
   <div class="col-md-10">
         <input class="form-control" id="grupo" name="grupo" type="text" autocomplete="off" placeholder="Ingrese Grupo"></input>
  </div>
  </div>

    <div class="form-group">
      <label class="form-label col-md-3 " >Fecha Inicio:</label>
      <div class="col-md-8">
<div class="input-group date">
  <input type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
</div>
 </div>
 </div>

    <div class="form-group">
      <label class="form-label col-md-3 " >Fecha Fin:</label>
      <div class="col-md-8">
<div class="input-group date">
  <input type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
</div>
 </div>
 </div>
    <div class="form-group">
      <label class="form-label col-md-3 " >Horario Inicio:</label>
                


    </div>

    <div class="form-group">
      <label class="form-label col-md-3 " >Horario Fin:</label>
      <div class="col-md-9">
      <input class="form-control" id="h_f" name="h_f" type="time" autocomplete="off" placeholder="Ingrese Hora 00:00:00"></input>
    </div>
    </div>

                  <input type="submit" class="btn btn-success" value="Agregar">
                  
                       </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
    </div>
    </div>


    <div class="modal" id="agregarMateria" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Agregar Materia:</h4>
                    </div>
                    <div class="modal-body">                      
                       <form action="insertar_materia.php" method="POST" autocomplete="off">                           

                                  <input class="form-control" id="id" name="id" type="hidden" ></input>       
                              <div class="form-group">
                                <label class="form-label col-md-3 " for="nombre">NOMBRE:</label>
                                <input class="form-control" required id="nombre" name="nombre" type="text"></input>
                              </div>
                              <div class="form-group">
                                <label class="form-label col-md-3 " for="titulo">BLOQUE:</label>
                                <input class="form-control" required id="bloque" name="bloque" type="text"></input>
                              </div>
                              <div class="form-group">
                                <label class="form-label col-md-3 " for="licenciatura">Licenciatura:</label>
                            <select class="form-control" id="licenciatura" name="licenciatura">
                              <option value="0">Seleccione:</option>
                              <?php
                                $mysqli = mysqli_connect('localhost', 'root', '', "signature_igs16");
                                $sql = $mysqli->query("SET NAMES 'utf8'");
                                if (mysqli_connect_errno($mysqli))
                                echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
                                $mysqli->set_charset('utf8');
                                $query = 'SELECT * FROM `areas`';
                                $result = $mysqli->query($query);
                                while($row = $result->fetch_array(MYSQLI_ASSOC)){
                                echo '<option value="'.$row[nombre].'">'.$row[nombre].'</option>';
                                }
                              ?>
                           </select>
                              </div>

                  <input type="submit" class="btn btn-success" value="Agregar">
                  
                       </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
    </div>
    </div>


<div class="modal" id="agregarDocente" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Agregar Docente:</h4>
                    </div>
                    <div class="modal-body">                      
                       <form class="form-horizontal" action="insertar_docente.php" method="GET" autocomplete="off">  

                          <div class="form-group">
                            <label class="form-label col-md-2 "  for="nombre">Nombre:</label>
                            <div class="col-md-10">
                            <input class="form-control" id="nombre" requiered name="nombre" type="text" autocomplete="off" placeholder="Ingrese Nombre"></input>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="form-label col-md-2 "  for="titulo">Titulo:</label>
                            <div class="col-md-10">
                            <input class="form-control" id="titulo" required name="titulo" type="text" autocomplete="off" placeholder="Ingrese Titulo"></input>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="form-label col-md-2 "  for="telefono">Telefono:</label>
                            <div class="col-md-10">
                            <input class="form-control" id="telefono" required  name="telefono" type="text" maxlength="10" onkeypress="return numeros(event)" autocomplete="off" placeholder="Ingrese Telefono"></input>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="form-label col-md-3 "  for="exclusividad">Exclusividad:</label>
                            <div class="col-md-9">
                            <select class="form-control" name="opciones">
                              <option value="Fijo">Fijo</option>
                              <option value="Temporal">Temporal</option>
                              <option value="Inactivo">Inactivo</option>
                            </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="form-label col-md-4"  for="cedula">Cedula Profesional:</label>
                            <div class="col-md-8">
                            <input class="form-control" id="cedula" required  name="cedula" type="text" autocomplete="off" placeholder="Ingrese Cedula Profesional"></input>
                            </div>
                          </div>
                              </div>
 
                              <div class="form-group">
                                  <div class="col-md-3">    
                                   <input type="submit" class="btn btn-success" value="Guardar">
                                  </div>
                                </div>
                                </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>



</body>
</html>

<?php
	}
	else
	{
		?>
		 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=login.php">
		 <?php
	}
?>
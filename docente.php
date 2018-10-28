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
  <title>DOCENTE</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
  <meta name="">
    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=, initial-scale=1, maximum-scale=1, minima-scale=1">
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
            <li><a href="horario.php">Agregar Horario</a></li>
            <li><a href="materia.php">Agregar Materia</a></li>
          </ul>       
        </div>
      </div>
    </nav>
  </header>
</div>


<div class="container ">
<div class="panel  panel-success col-sm-6">
  <div class="panel-heading text-center"><strong>REGISTRO DOCENTE</strong></div>
  <div class="panel-body">
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
                                
              
                       </form>
                                  <div class=" col-md-offset-9">
                                   <a href="mostrar.php">
                                   <input type="submit" class="btn btn-info" value="Mostrar Registros">
                                   </a>
                                   </div>
                                </div>
                    </div>
                </div>
                </div>
  </div>


        <script src="js/jquery-1.12.3.min.js" charset="utf-8"></script>
    <script src="bootstrap/js/bootstrap.min.js" charset="utf-8"></script>            
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
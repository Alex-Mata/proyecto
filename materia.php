<?php
  session_start();
  if(isset($_SESSION['user']))
  {
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
            <li><a href="docente.php">Agregar Docente</a></li> 
            <li><a href="horario.php">Agregar Horario</a></li>
          </ul>       
        </div>
      </div>
    </nav>
  </header>
</div>


<div class="container ">
<div class="panel  panel-success col-sm-6">
<div class="panel-heading text-center"><strong>REGISTRO DE MATERIA</strong></div>
<div class="panel-body">
	<div class="modal-body">
    <form class="form-horizontal" action="insertar_materia.php" method="GET" autocomplete="off">   

<div class="form-group">
  <label class="form-label col-md-2 " for="materia">Materia:</label>
  <div class="col-md-10">
		<input class="form-control" id="materia" name="materia" type="text" autocomplete="off" placeholder="Ingrese Materia"></input>
</div>
</div>

<div class="form-group">
	<label class="form-label col-md-2 " for="bloque">Bloque:</label>
  <div class="col-md-10">
	<input class="form-control" id="bloque" name="bloque" type="text" autocomplete="off" placeholder="Ingrese Bloque"></input>
</div>
</div>

<div class="form-group">
	<label class="form-label col-md-3 ">Licenciatura:</label>
  <div class="col-md-9">
    <select class="form-control" id="area" name="area">
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
          echo '<option value="'.$row[id].'">'.$row[nombre].'</option>';
          }
        ?>
    </select>
</div>
</div>
</div>
<div class="form-group">
<div class="col-md-3">
  <input type="submit" class="btn btn-success" value="Guardar">
  </div>
  </div>
  </form>
  <div class=" col-md-offset-8">
    <a href="mostrar_materia.php">
     <input type="submit" class="btn btn-info" value="Mostrar Registros">
    </a>
  </div>
</div>
</div>
</div>
</div>



<div class="container ">
<div class="panel  panel-success col-sm-6">
<div class="panel-heading text-center"><strong>REGISTRO DE CARRERA</strong></div>
<div class="panel-body">
  <div class="modal-body">
    <form class="form-horizontal" action="insertar_area.php" method="GET" autocomplete="off">   

<div class="form-group">
  <label class="form-label col-md-2 " for="area">Carrera:</label>
  <div class="col-md-10">
    <input class="form-control" id="area" name="area" type="text" autocomplete="off" placeholder="Ingrese Carrera"></input>
</div>
</div>

<div class="form-group">
<div class="col-md-3">
  <input type="submit" class="btn btn-success" value="Guardar">
  </div>
  </div>
  </form>
  <div class=" col-md-offset-8">
    <a href="mostrar_area.php">
     <input type="submit" class="btn btn-info" value="Mostrar Registros">
    </a>
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
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php">
     <?php
  }
?>
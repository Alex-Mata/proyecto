<?php
  session_start();
  if(isset($_SESSION['user']))
  {
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
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
            <li><a href="materia.php">Agregar Materia</a></li>
          </ul>       
        </div>
      </div>
    </nav>
  </header>
</div>


<div class="container ">
<div class="panel  panel-success col-sm-6">
  <div class="panel-heading text-center"><strong>REGISTRO DE HORARIO</strong></div>
  <div class="panel-body">
  <div class="modal-body">

  <form class="form-horizontal" action="insertar_horario.php" method="GET" autocomplete="">  
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
    echo '<option value="'.$row[id].'">'.$row[nombre].'</option>';
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
    echo '<option value="'.$row[id].'">'.$row[nombre].'</option>';
  }
      ?>
      </select>
    </div>
    </div>

    <div class="form-group">
           <label class="form-label col-md-4" >Dias Laborales:</label>
           <div class="col-md-8">
              <select class="form-control" id="dias" name="dias">
                 <option value="0">Seleccione:</option>
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
      <div class="col-md-9">
      <input class="form-control" id="f_i" name="f_i" type="date" autocomplete="off" placeholder="Ingrese Fecha 0000-00-00"></input>
      </div>
    </div>

    <div class="form-group">
      <label class="form-label col-md-3 " >Fecha Fin:</label>
      <div class="col-md-9">
      <input class="form-control" id="f_f" name="f_f" type="date" autocomplete="off" placeholder="Ingrese Fecha 0000-00-00"></input>
      </div>
    </div>
 
    <div class="form-group">
      <label class="form-label col-md-3 " >Horario Inicio:</label>
      <div class="col-md-9">
      <input class="form-control" id="h_i" name="h_i" type="time" autocomplete="off" placeholder="Ingrese Hora 00:00:00"></input>
    </div>
    </div>

    <div class="form-group">
      <label class="form-label col-md-3 " >Horario Fin:</label>
      <div class="col-md-9">
      <input class="form-control" id="h_f" name="h_f" type="time" autocomplete="off" placeholder="Ingrese Hora 00:00:00"></input>
    </div>
    </div>
    </div>

  <div class="form-group">
  <div class="col-md-1">
    <input type="submit" class="btn btn-success" value="Guardar">
    </div>
  </form>
  <div class=" col-md-offset-8">
  <a href="mostrar_horario.php">
  <input type="submit" class="btn btn-info" value="Mostrar Registros">
  </a>
  </div>
  </div>
</div>
</div>
</div>               
</div>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
  <script type="text/javascript" src="js/horario.js  "></script>
  <script type="text/javascript" src="js/docente.js"></script>
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
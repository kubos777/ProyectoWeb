<?php
    if ( empty($_POST['nickname']) || empty($_POST['nombre']) || empty($_POST['apellido'])) {
        header("location: ./actividad.php");
        exit();
    } else {
        session_start();
    } 
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="materialize/css/materialize.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans|Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=News+Cycle|PT+Sans|Pacifico" rel="stylesheet">
</head>
<body style="background-color: rgba(84, 153, 199, 0.4); overflow-x: hidden">
  <!--NAV ESTILO MIKEY-->
  <nav>
    <div class="nav-wrapper black   white-text">
      <a href="index.php" style="font-family: 'Raleway', sans-serif"  class="brand-logo left"><img class="responsive-img" id="logo" src="img/protlog.png" width="65"/><p style="margin-bottom: 10px;margin-left:90px;margin-top: -80px">Cursos intersemestrales</p></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li> 

          <div class="input-field col s12">
          <a href="actividad.php  class="waves-effect waves-light btn style="color: #bbdefb O font-family: 'Raleway', sans-serif">Regresar</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</li>
</ul>
</div>
</nav>

<!--CODIGO DE LA PAGINA :V-->
<h4>Registro de actividad para <?php echo $_POST['nombre'].' '.$_POST['apellido']?> </h4>
<table>
  <thead>
    <tr>
      <th>Estado</th>
      <th>Momento del cambio de estado</th>
    </tr>
  </thead>
  <tbody>
    <?php
    require 'db.php';
    $pdo = Database::connect();
    $i = 0;
    $sql = 'SELECT * FROM Asistencia WHERE nickname=\''.$_POST['nickname'].'\' AND nombre=\''.$_POST['nombre'].'\'';
      foreach ($pdo->query($sql) as $row) {
      ?>
      <tr>
        <td>
          <?php echo $row['estado'];?>
        </td>
        <td>
          <?php echo $row['tiempo'];?>
        </td>
        <?php
        $i+=1;
        if ($i == 100){
          break;
        }
      }
      Database::disconnect();
      ?>
    </tr>
  </tbody>
</table>

<!--Fin del código de la página-->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="materialize/js/materialize.js"></script>
</html>

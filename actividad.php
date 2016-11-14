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
<body style="background-color: rgba(123, 115, 135, 0.67); overflow-x: hidden">
  <!--NAV ESTILO MIKEY-->
  <nav>
    <div class="nav-wrapper black   white-text">
      <a href="index.php" style="font-family: 'Raleway', sans-serif"  class="brand-logo left"><img class="responsive-img" id="logo" src="img/protlog.png" width="65"/><p style="margin-bottom: 10px;margin-left:90px;margin-top: -80px">Cursos intersemestrales</p></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li> 

          <div class="input-field col s12">

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

<h1 style=" font-family: 'Lobster', cursive; text-align: center;">Actividad reciente de los becarios.</h1>
  <p style="font-family: 'Raleway', sans-serif; text-align: center;">¿Deseas buscar la actividad reciente de algún becario en específico?</p>
  <!--Si no se encuentran resultados, regresa al mismo lugar-->
  
<div class="row">
            <div class="col s12 offset-l4 m4" off>
                <div class="card black darken-l" style="border-radius: 5px">
                    <div class="card-content white-text" style="text-align: center">
                    <span class="card-title" style=" font-family: 'Raleway', sans-serif; border-radius: 10px" >Ingresa sus datos</span>
  <form action="busqueda.php" method="POST"> 
    <div class="input-field col l10 offset-l1" style="text-align: left">
      <div class="input-field col l10 offset-l1" style="text-align: left">
        <input id="nickname" type="text" class="validate" name="nickname"><label for="nickname">Nickname</label>
      </div>
      <div class="input-field col l10 offset-l1" style="text-align: left">
        <input id="nombre" type="text" class="validate" name="nombre"><label for="nombre">Nombre</label>
      </div>
      <div class="input-field col l10 offset-l1" style="text-align: left"> 
        <input id="apellido" type="text" class="validate" name="apellido"><label for="apellido">Apellido Paterno</label>
      </div>
    </div>
    <input style="text-align: center; background: rgba(136, 148, 240, 0.5); font-family: 'Lobster', cursive; border-radius: 10px" type="submit" value="Buscar"/>
  </form>

                    </div>
                </div>
            </div>
        </div>

  <h4 style="font-family: 'Raleway', sans-serif;"">A continuación se muestran los últimos 100 registros de actividad de los becarios:</h4>
<table class="responsive-table centered highlight bordered #9fa8da indigo lighten-3" style="font-family: 'Raleway', sans-serif;" >
  <thead>
    <tr>
      <th>Nickname</th>
      <th>Nombre</th>
      <th>Apellido Paterno</th>
      <th>Estado</th>
      <th>Momento del cambio de estado</th>
    </tr>
  </thead>
  <tbody>
    <?php
    require 'db.php';
    $pdo = Database::connect();
    $i = 0;
    $sql = 'SELECT * FROM Asistencia';
      foreach ($pdo->query($sql) as $row) {
      ?>
      <tr>
        <td >
          <?php echo $row['nickname'];?>
        </td>
        <td>
          <?php echo $row['nombre'];?>
        </td>
        <td>
          <?php echo $row['apellido'];?>
        </td>
        <td>
          <?php echo $row['estado'];?>
        </td>
        <td>
          <?php echo $row['tiempo'];?>
        </td>
        <?php
        $i+=1;
        if ($i ==100) {
          break;
        }
      }
      Database::disconnect();
      ?>
    </tr>
  </tbody>
</table>
<center>
<div>
<a class="waves-effect waves-light btn #3949ab indigo darken-1" href="index.php" style="color: #bbdefb O font-family: 'Raleway', sans-serif;margin: 10px;padding: -10px; text-align: center;">Regresar</a>
</div>
</center>
<!--Fin del código de la página-->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="materialize/js/materialize.js"></script>
</html>

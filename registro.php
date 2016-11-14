<?php
  session_start();
  if(isset($_SESSION['nickname'])) {
    header('location: ./index.php');
    exit();
  }

  if ( !empty($_POST)) {

    $nickname = $_POST['nickname'];
    $nombre = $_POST['nombre'];
    $apellido_p = $_POST['apellido_p'];
    $apellido_m = $_POST['apellido_m'];
    $password = $_POST['password'];

    require 'db.php';
     
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Becario (nickname,nombre,apellido_p,apellido_m,password) values(?,?,?,?,?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($nickname,$nombre,$apellido_p,$apellido_m,$password));
    $sql = "INSERT INTO Asistencia (nickname,nombre,apellido,estado) values(?,?,?,?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($nickname,$nombre,$apellido_p,'inactivo'));
    Database::disconnect();
    header('location: ./success.php');
    exit();
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
	<title>Registro de Asistentes</title>
</head>
<body style="background-color: rgba(84, 153, 199, 0.4); overflow-x: hidden">
	<!--NAV ESTILO MIKEY-->
	<nav>
		<div class="nav-wrapper black   white-text">
			<a href="index.php" style="font-family: 'Raleway', sans-serif"  class="brand-logo left"><img class="responsive-img" id="logo" src="img/protlog.png" width="65"/><p style="margin-bottom: 10px;margin-left:90px;margin-top: -80px">Cursos intersemestrales</p></a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li> 

					<div class="input-field col s12">
					<a href="index.php  class="waves-effect waves-light btn style="color: #bbdefb O font-family: 'Raleway', sans-serif">Regresar</a>
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
<div class="row" style="align-content: center">
            <div class="col s12 offset-l4 m4" off>
                <div class="card black darken-l" style="border-radius: 5px">
                    <div class="card-content white-text" style="text-align: center">
                        <span class="card-title" style=" font-family: 'Lobster', cursive; border-radius: 10px" >Registrate para tomar asistencia</span>
                        <form method="post" action="registro.php"> 
                            <center style="font-family: 'PT Sans', sans-serif"> 
                                Nickname: 
                                <input type="text" style="border-radius: 10px" name="nickname" id="nickname"/>  
                                Nombre: 
                                <input type="text" style="border-radius: 10px" name="nombre" id="nombre"/>  
                                Apellido Paterno:
                                <input type="text" style="border-radius: 10px" name="apellido_p" id="apellido_p"/>
                                Apellido Materno 
                                <input type="text" style="border-radius: 10px" name="apellido_m" id="apellido_m"/>  
                                Constraseña:
                                <input type="password" style="border-radius: 10px" name="password" id="password"/>
                                <br>
                                <input style="text-align: center; background: rgba(136, 148, 240, 0.5); font-family: 'Lobster', cursive; border-radius: 10px" type="submit" value="Registrarse"/>
                            </center>
                        </form> 
                        
                    </div>
                </div>
            </div>
        </div>
<!--Fin del código de la página-->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="materialize/js/materialize.js"></script>
</html>

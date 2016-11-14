<?php
  session_start();
  if (!isset($_SESSION['nickname'])) {
    header('location: ./index-invitado.php');
    exit();
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <link rel="stylesheet" href="materialize/css/materialize.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans|Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=News+Cycle|PT+Sans|Pacifico" rel="stylesheet">
  <title>Entrada</title>
</head>
<body style="background-color: rgba(84, 153, 199, 0.4)">
  <!--NAV ESTILO MIKEY-->
  <nav>
    <div class="nav-wrapper black   white-text">
      <a href="index.php" style="font-family: 'Raleway', sans-serif"  class="brand-logo left"><img class="responsive-img" id="logo" src="img/protlog.png" width="65"/><p style="margin-bottom: 10px;margin-left:90px;margin-top: -80px">Cursos intersemestrales</p></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li>
          <div class="row">
            <form class="col s12 " action="login.jsp" method="POST">
              <div class="row"> 

            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</nav>


<!--CODIGO DE LA PAGINA :V-->

<div class="carousel" >
  <a class="carousel-item" href="#"><img src="img/c.png"></a>
  <a class="carousel-item" href="#"><img src="img/py.png"></a>
  <a class="carousel-item" href="#"><img src="img/java.png"></a>
  <a class="carousel-item" href="#"><img src="img/web.png"></a>
  <a class="carousel-item" href="#"><img src="img/redes.png"></a>
  <a class="carousel-item" href="#"><img src="img/ard.png"></a>
  <a class="carousel-item" href="#"><img src="img/raspy.png"></a>
  <a class="carousel-item" href="#"><img src="img/andy.png"></a>
  <a class="carousel-item" href="#"><img src="img/ios.png"></a>

</div>
<div class="container" id="info">
  <div>
    <h2 style="text-align: left; font-family: 'Raleway', sans-serif">Becarios activos actualmente:</h2>
    
    
  </div>
</div>
<div class="parallax-container">
  <div class="parallax">
    <img src="img/cursos.jpg">
  </div>
</div>
<div class="container" id="info">
  <div>
    <h1 style="text-align: left; font-family: 'Raleway', sans-serif">Gracias por participar.</h1>
    <p class="text-justify" style="font-family: 'News Cycle', sans-serif; font-size: 30px">
      El futuro tiene muchos nombres. Para los débiles es lo inalcanzable. Para los temerosos, lo desconocido. Para los valientes es la oportunidad.
      -Victor Hugo
    </p>
  </div>
</div>





<!--Fin del código de la página-->
<!--Inicio del footer-->
<footer class="page-footer black" style="font-family: 'Raleway', sans-serif">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">
          Lista de asistencias
        </h5>
        <p class="grey-text text-lighten-4">
          En este sitio podrás encontrar las listas de asistencia.
        </p>
      </div>
      <div class="col l4 offset-l2 s12">
        <ul>
          <li><a href="https://es-la.facebook.com/proteco/" target="_blank" ="color: #1031C8"  >Facebook</a></li>
          <li><a href="https://twitter.com/proteco?lang=es" style="color: #41BCE0"  >Twitter</a></li>
          <li><a href="https://www.youtube.com/channel/UCSEngCSxjHdCDFxK-gzwsxw" style="color: #B84F46" >YouTube</a></li>
          <li><a href="https://www.instagram.com/protecounam/
            " style="color: #D9DD35" >Instagram</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <a href="#">2016 &#169 Copyright PROTECO</a>
      </div>
    </div>
  </footer>
  <!--Fin del footer-->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="materialize/js/materialize.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.carousel').carousel({
      full_width:0,
      padding:-10,
      margin:-10
    });
    $('.parallax').parallax();
  });
</script>
</html>

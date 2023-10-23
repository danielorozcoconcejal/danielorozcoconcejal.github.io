<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <title>Daniel Orozco</title>
    <meta name="description" content="">
    <meta name="author" content="WebThemez">
    <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <!--[if lte IE 8]>
            <script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
        <![endif]-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link href="css/animate.css" rel="stylesheet" media="screen">
    <!-- Owl Carousel Assets -->
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/ciudadanostyles.css" />

    <!-- Font Awesome -->
    <link href="font/css/font-awesome.min.css" rel="stylesheet">
    </head>
<body>
  <header class="header addBg">
    <div class="container">
      <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
          <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a href="#home" class="navbar-brand scroll-top logo  animated bounceInLeft"><b><i><img class="logoEstilos" src="images/logo.png" /></i></b></a>
          <a href="#home" class="navbar-brand animated bounceInLeft logoEstilos2"><b><i><img src="images/merecemosTodosUn10.png" /></i></b></a> 
        </div>
        <!--/.navbar-header-->
        <div id="main-nav" class="collapse navbar-collapse">
          <ul class="nav navbar-nav" id="mainNav">
            <li id="firstLink"><a href="index.html" class="scroll-link">Inicio</a></li>
            <li class="active"><a href="index.html#quiensoy" class="scroll-link">Quién Soy</a></li>
            <li><a href="#" class="scroll-link">Sé Voluntario</a></li>
            <li><a href="index.html#articulos" class="scroll-link">Artículos</a></li>
            <li><a href="index.html#galeria" class="scroll-link">Galería</a></li>
            <li><a href="index.html#redes" class="scroll-link">Redes sociales</a></li>
          </ul>
        </div>
        <!--/.navbar-collapse--> 
      </nav>
      <!--/.navbar--> 
    </div>
    <!--/.container--> 
  </header>
  <!--/.header-->

  <div class="animated bounceInRight">
      <div class="banda-roja-voluntarios">
        <p class="texto-voluntario">Sé voluntario</p>
      </div>
    <form method="post" class="form">
    <?php 
      include("bd_ciudadanos/registrar.php");
      ?>
      <fieldset>
            <legend>Información personal</legend>
    	Nombres y apellidos: <input class="input" type="text" name="nombre" placeholder="Nombre completo">
    	Correo electronico: <input class="input" type="email" name="correo" placeholder="Correo electronico">
      Celular: <input class="input" type="number" name="celular" placeholder="Celular">
      Documento: <input class="input" type="number" name="id" placeholder="Documento">
      </fieldset>
      <fieldset>
            <legend>Residencia</legend>
    	Barrio o vereda: <input class="input" type="text" name="barrio_vereda" placeholder="Barrio o vereda">
    </fieldset></br>
    	<input class="submit" type="submit" name="registrar">
    </form>


    </div>

<footer>
  <div class="container" id="centrar-footer">
          <div class="row">
              <div class="col-md-4">
                <div class="col">
                     <h4>Contacto</h4>
                     <ul>
                          <li>Dirección: Carrera 15 # 6-35, Girardota – Antioquia, Colombia.</li>
                          <li>Correo electrónico: <a target="_blank" href="mailto:danielorozcoconcejal@gmail.com" title="Email Us">danielorozcoconcejal@gmail.com</a></li>
                      </ul>
                   </div>
              </div>
            
              
              <div class="col-md-4">
                <div class="col col-social-icons">
                      <h4>Sigueme</h4>
                      <a target="_blank" href="https://www.facebook.com/orozcocordoba"><i class="fa fa-facebook"></i></a>
                      <a target="_blank" href="https://www.instagram.com/orozcocordoba/"><i class="fa fa-instagram"></i></a>
                  </div>
              </div>
  
              <div class="col-md-4">
                <div class="col col-social-icons">
                      <h4>Vota</h4>
                      <img class="logoFooterEstilos" src="images/logoFooter.png">
                  </div>
              </div>
          </div>
           
      </div>
      
  </footer>
  <!--/.page-section-->
  <section class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center textfooter"> © 2023 <a target="_blank" href="https://danielorozco.com.co">Daniel Orozco.</a>  All Rights Reserved. </br> Designed by <a target="_blank" href="https://fashioncodes.online">Fashion Codes.</a> </div>
      </div>
      <!-- / .row --> 
    </div>
  </section>

  
<script src="js/modernizr-latest.js"></script> 
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/jquery.isotope.min.js" type="text/javascript"></script> 
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script src="js/jquery.nav.js" type="text/javascript"></script> 
<script src="js/jquery.fittext.js"></script> 
<script src="js/waypoints.js"></script> 
<script src="js/custom.js" type="text/javascript"></script> 
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>
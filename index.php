<!DOCTYPE html>
<html lang="en">
<head>
	<title>Luft Soluciones Integrales</title>
	<link rel="icon" href="favicon.png" type="image/png"> <!-- definir favicon (logo) -->
	<meta http-equiv="Content-type" content="text/html" charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" type="text/css" href="vendor/css/luftStyle.css">
      <link rel="stylesheet" href="vendor/css/bootstrap.css"/>         <!-- css bootstraps -->
      <link rel="stylesheet" href="vendor/css/modern-business.css"/>
      <link rel="stylesheet" href="vendor/js/jqueryui/jquery-ui.css"/>

      <script type="text/javascript" src="vendor/js/jquery-3.3.1.js"></script>

      <script type="text/javascript" src="vendor/js/jqueryui/jquery-ui.js"></script>

      <script type="text/javascript" src="vendor/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="vendor/validator/js/bootstrapValidator.js"></script>



      <!--script type="text/javascript"> 
  $(function () {
    $("#boton").click(function () { 
   alert("funciona");
    
    $("#boton").finish();
   })
  })

  </script-->
	

</head>
<body>

<header  id="header">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicadores -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Contenido del slide -->
  <div class="carousel-inner fulls">
    <div class="item active">
      <img src="vendor/image/1.jpg" alt="foto1"> <!-- imagenes de 1.920 X 1.080 px -->
    </div>

    <div class="item">
      <img src="vendor/image/2.jpg" alt="foto2">
    </div>

    <div class="item">
      <img src="vendor/image/3.jpg" alt="foto3">
    </div>
  </div>

  <!-- Controlador izquierda derecha -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



	<nav class="main-nav-outer navbar-inverse" id="nav"> <!-- barra de navegación -->

		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Luft Lab</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#historia">Nuestra Historia</a></li>
				<li><a href="#servicios">Nuestro Servicios</a></li>
				<li><a href="#nosotros">Quienes Somos</a></li>
				<li><a href="#clientes">Nuestros Clientes</a></li>
				<li><a href="#contacto">Contactanos</a></li>
			</ul>
		</div>
	</nav> <!-- Fin Barra de navegación -->

</header>



<section class="container-fluid">

<!--Boton "Arriba" -->
	<div class="btn-arriba">
	
		<button id="up"  name="up"  class="boton-top btn btn-primary btn-block btn-lg col-lg-3 glyphicon glyphicon-circle-arrow-up" >Arriba</button> 
	
	</div> <!--Fin Boton Arriba -->


	<section class="breadcrumb" id="historia"> <h2 class="fulls text-center">Historia</h2> <!-- Historia de la Empresa -->

	</section> <!-- Fin Historia -->


	<section  id="servicios"><h2 class="fulls text-center">Nuestros Servicios</h2> <!-- Servicios -->

	</section> <!--Fin Servicios-->


	<section class="breadcrumb" id="nosotros"><h2 class="fulls text-center">Quienes Somos</h2> <!--Quienes Somos -->

	</section> <!--Fin Quienes Somos-->


	<section  id="clientes"><h2 class="fulls text-center">Nuestros Clientes</h2> <!--Clientes-->

	</section> <!--Fin Clientes-->


	<section class="breadcrumb" id="contacto"><h2 class="text-center">Contactanos</h2> <!--formulario Contacto -->

		<div class="container">
			<form action="#" method="POST">
				<div class="form-group">
					<label for="name">Nombre:</label>
					<input type="text" id="nombre" name="nombre" class="form-control">
				</div>
				<div class="form-group">
					<label for="Asunto">Asunto:</label>
					<input type="text" id="asunto" name="asunto" class="form-control">
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" id="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="telefono">Telefono: (opcional)</label>
					<input type="text" id="telefono" name="telefono" class="form-control">
				</div>
				<div class="form-group">
					<label for="mensaje">Mensaje:</label>
					<textarea class="form-control" rows="5" id="mensaje" name="mensaje"></textarea>
				</div>
				<div>
				<button type="input" class="btn btn-success">Enviar</button>
				</div>
			
			</form>
		</div>
	   

	</section><!--Fin formulario contacto-->

</section>

	<footer class="footer" id="footer"> <h5 class="text-center">LUFT Soluciones Integrales &copy </h5> <!-- footer-->
	
</footer> <!--Fin Footer-->

     <script type="text/javascript">
    $('.boton-top').fadeOut(); 

     	 $(window).scroll(function(){

    if ($(this).scrollTop() > 0) {
        $('.boton-top').fadeIn();
    } else {
        $('.boton-top').fadeOut();
    }
});
  

  $('.boton-top').click(function(){
    $('body,html').animate({scrollTop : 0}, 500);
    return false;


});

  </script>

 

	
	
	
</body>
</html>

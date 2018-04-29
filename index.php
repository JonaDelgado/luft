<!DOCTYPE html>
<html lang="en">
<head>
	<title>Luft Lab</title>
	<link rel="icon" href="favicon.png" type="image/png"> <!-- definir favicon (logo) -->
	<meta http-equiv="Content-type" content="text/html" charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
	<link href="vendor/fonts/webfonts/fontawesome-all.css" rel="stylesheet" >

      <link rel="stylesheet" type="text/css" href="vendor/css/luftStyle.css">
      <link rel="stylesheet" href="vendor/css/bootstrap.css"/>         <!-- css bootstraps -->
      <link rel="stylesheet" href="vendor/css/bootstrap-theme.css"/>
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
				<li><a href="#historia">Nosotros</a></li>
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


	<section class="breadcrumb fulls" id="historia"> <h2 class="text-center">Nosotros</h2> <!-- Historia de la Empresa -->

		<div class="container">
  			<h2>Luft Lab</h2><br>
  				<h4>Laboratorio de soluciones par emprendedores</h4> 
 			 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 				proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>

 				 <!--button class="btn btn-default btn-lg">Get in Touch</button>


 
  			<h2>Our Values</h2>
  			<h4><strong>MISSION:</strong> Our mission lorem ipsum..</h4> 
  			<p><strong>VISION:</strong> Our vision Lorem ipsum..</p-->
		</div>

	</section> <!-- Fin Historia -->


	<section  id="servicios" class="main-section fulls"><h2 class="text-center">Nuestros Servicios</h2> <!-- Servicios -->
		<div class="container">
			<h2>Servicios Integrales pensados en tus necesidades</h2>
			
		</div>

	</section> <!--Fin Servicios-->


	<section class="breadcrumb container fulls" id="nosotros"><h2 class=" text-center">Quienes Somos</h2> <!--Quienes Somos -->

	</section> <!--Fin Quienes Somos-->


	<section  id="clientes" class="fulls"><h2 class="fulls text-center">Nuestros Clientes</h2> <!--Clientes-->

	</section> <!--Fin Clientes-->


	<section class="fulls container breadcrumb" id="contacto"><h2 class="text-center">Contactános</h2> <!--Contacto -->

		
  			<div class="row">
    			 <div class="col-sm-5" style="font-size: 20px">
      				<p><h3>Medios De contacto</h3></p> <br>
      				<p><span class="fas fa-map-marker"></span> Santiago, Chile</p>
      				<p><span class="fa fa-phone" ></span> +56 9 8765432</p>
     			 	<p><span class="glyphicon glyphicon-envelope"></span> info@luftlab.com</p> 
    
			   		 <ul class="social-link">
						<li class="twitter"><a href="#"><i class="fab fa-twitter-square"></i></a></li>
						<li class="facebook"><a href="https://www.facebook.com/Luft-155636168440934"><i class="fab fa-facebook"></i></a></li>
						<li class="pinterest"><a href="https://www.linkedin.com/company/16224303/"><i class="fab fa-linkedin"></i></a></li>
						<li class="gplus"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<!--li class="dribbble"><a href="#"><i class="fa-dribbble"></i></a></li-->
					</ul>
				 </div>

    				<div class="col-sm-7">
     	 			<div class="row">
      				<form  class="form-control-static form-area" action="vendor/controlador/correo.php" method="POST">
			    			<h3 class="text-center"></h3>
			    				<div class="form-group">
			    				<input type="text" id="nombre" required name="nombre" placeholder="Nombre" class="form-control" title="Ingrese su nombre"> 
			    				</div>
			    				<div class="form-group">
			    					<input type="text" id="apellidos" required name="apellidos" placeholder="Apellidos" class="form-control" 	title="Ingrese apellidos">
			    				</div>
			    				<div class="form-group">
			    					<input type="text" id="asunto" required name="asunto" placeholder="Asunto" class="form-control" title="Motivo contacto">
			    				</div>
			    				<div class="form-group">
			    		   		<input type="email" id="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required 			name="email" placeholder="Email" class="form-control" title="Debe ser formato ejempo@ejemplo.cl">
			    				</div>
			    				<div class="form-group">
			    					<input type="tel" id="telefono" pattern="^[9]\d{8}$" required name="telefono" class="form-control bfh-phone" placeholder="		Teléfono" title="Telefono debe comenzar con 9 y tener 9 digitos">
			    				</div>
			    			<div class="form-group">
			    			<textarea class="form-control" rows="6" id="mensaje" required name="mensaje" placeholder="Escriba su 	mensaje" title="Escriba su mensaje"></textarea>
			    			</div>
			    			<div>
			    			<button type="submit" class="btn btn-primary btn-lg">Enviar</button>
			    			</div>
			    	</form>
			   </div> 
     
  	 </div>
		</div>

	</section><!--Contacto-->


	<footer class="footer" id="footer"> <h5 class="text-center">LUFT Lab &copy </h5> <!-- footer-->
	
</footer> <!--Fin Footer-->

</section>


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

 <!--<?php

 if (isset($_POST['nombre'])) {
 	$nombre=$_POST['nombre'];
 }
if (isset($_POST['asunto'])) {
 	$asunto=$_POST['asunto'];
 }
if (isset($_POST['email'])) {
 	$email=$_POST['email'];
 }
if (isset($_POST['mensaje'])) {
 	$mensaje=$_POST['mensaje'];
 }
if (isset($_POST['telefono'])) {
 	$telefono=$_POST['telefono'];
 }else{
 	$telefono='';
 }
 

 ?> -->

 <!--script type="text/javascript">
 	$(document).ready(function() {
 		$('#contacto').bootstrapValidator({
 			feedbackIcons: {
            		valid: 'glyphicon glyphicon-ok',
            		invalid: 'glyphicon glyphicon-remove',
            		validating: 'glyphicon glyphicon-refresh'
            	},
            	fields: {
            		nombre: {
              				validators: {
                      			notEmpty: {
                          			message: 'Debe ingresar el nombre completo'
                             	}
                            }
              			},
              			asunto: {
              				validators: {
                      			notEmpty: {
                          			message: 'Indique un asunto'
                             	}
                            }
              			},
              			email: {
              				validators: {
              					emailAddress: {
                        message: 'Email debe tener formato ejemplo'
                    			},
                      			notEmpty: {
                          			message: 'Debe ingresar el formato ejemplo@ejemplo.cl'
                             	}
                            }
              			},

              			mensaje: {
              				validators: {
                      			notEmpty: {
                          			message: 'Escriba su mensaje'
                             	}
                            }
              			},
              			telefono: {
              				validators: {
                      			notEmpty: {
                          			message: 'ingrese su telefono'
                             	}
                            }
              			},
              			apellidos: {
              				validators: {
                      			notEmpty: {
                          			message: 'ingrese su telefono'
                             	}
                            }
              			},

            	}

 		});
 	});
 </script-->

 <!--script type="text/javascript"> 
  $(function () {
    $("#enviar").click(function () { 
    	$('#contacto').bootstrapValidator({
 			feedbackIcons: {
            		valid: 'glyphicon glyphicon-ok',
            		invalid: 'glyphicon glyphicon-remove',
            		validating: 'glyphicon glyphicon-refresh'
            	},
            	fields: {
            		nombre: {
              				validators: {
                      			notEmpty: {
                          			message: 'Debe ingresar el nombre completo'
                             	}
                            }
              			},
              			asunto: {
              				validators: {
                      			notEmpty: {
                          			message: 'Indique un asunto'
                             	}
                            }
              			},
              			email: {
              				validators: {
              					emailAddress: {
                        message: 'Email debe tener formato ejemplo'
                    			},
                      			notEmpty: {
                          			message: 'Debe ingresar el formato ejemplo@ejemplo.cl'
                             	}
                            }
              			},

              			mensaje: {
              				validators: {
                      			notEmpty: {
                          			message: 'Escriba su mensaje'
                             	}
                            }
              			},

            	}

 		});

 		 /*document.getElementById("enviar").disabled = true;
 		 nom=document.getElementById("nombre");
 		 email=document.getElementById("email");
 		 asunto=document.getElementById("asunto");
 		 msj=document.getElementById("mensaje");
 		 tel=document.getElementById("telefono");*/



    	

   
    
    $("#enviar").finish();
   })
  })

  </script-->

 

	
	
	
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
  <title>Ejemplo bootstrap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
   <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="icon" 
      type="image/png" 
      href="images/favicon.png">
 <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#inicio">Página curso bootstrap</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#inicio">Inicio</a></li>
        <li><a href="#contenido">Contenido</a></li>
        <li><a href="#info">Información detallada</a></li> 
        <li><a href="#acerca">Acerca del mentor</a></li> 
      </ul>
    </div>
  </div>
</nav>


<div class="container-fluid " id="inicio">
	<div class="row banner">
		<div class="col-md-6 bannertext animated slideInRight">
			<h1>Aprende desarrollo web responsive, de manera rápida y sencilla</h1>
		</div>
		<div class="col-md-6 boton animated slideInRight">
		<br><br>
			<a href="#info"><button class="button3">Ver más</button></a>
		</div>
	</div>

<script type="text/javascript">
// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
          };
        });
      }
    }
  });
</script>

		<div class="row cont1">
			<div class="col-md-6">
				<img class="imgthumb animated slideInLeft" src="images/html.jpg">
			</div>	
			<div class="col-md-6 animated slideInRight">
				<br>
				<h1>Aprende desde HTML básico, a CSS y diseño responsive con bootstrap</h1>
				<h3>Si no sabes nada en lo absoluto sobre desarrollo web, no te preocupes, aprenderás todo lo necesario para poder realizar páginas web modernas, con diseño adaptable y livianas.</h3>
			</div>
		</div>
	<div class="row cont2" id="contenido">
	<h1 style="">¿Que aprenderás en el curso?</h1>
	<br><br>
		<div class="col-md-4">
				<i class="material-icons md-48 ">language</i>
				<h2>HTML básico</h2>
				<h3>Aprende a crear una página web desde 0 haciendo uso de HTML5, aprendiendo la estuctura base, uso de etiquetas de texto, divs, listas, enlaces, imágenes y otros.</h3>
		</div>
		<div class="col-md-4">
			<i class="material-icons md-48">palette</i>
			<h2>Uso de CSS</h2>
			<h3>Aprende como estilizar tu página, cambiando propiedades como tamaño, color, fondo, y entre otros. Permitiendo agregar detalles y mejorarla a tu gusto.</h3>
		</div>
		<div class="col-md-4">
			<i class="material-icons md-48">devices</i>
			<h2>Diseño responsive</h2>
			<h3>Aprende a cambiar los elementos a medida que la resolución cambia, esto te ayudará a que se vea bien en telefonos, tablets, televisores, PCs y otros.</h3>
		</div>
	</div>
	<div class="row cont2">
		<div class="col-md-4">
			<i class="material-icons md-48">create</i>
			<h2>Crear páginas web con Bootstrap</h2>
			<h3>Crea páginas web responsive de manera rápida con bootstrap, que te permitirá hacer sitios responsive y estilizados en poco tiempo.</h3>
		</div>
		<div class="col-md-4">
			<i class="material-icons md-48">web</i>
			<h2>Crea tu propia página durante el curso</h2>
			<h3>Durante el curso, crea tu propia página web sobre lo que desees, esta página te pertenecerá y demostará los conocimientos que adquiriste.</h3>
		</div>
		<div class="col-md-4">
			<i class="material-icons md-48">storage</i>
			<h2>Gestionar los archivos y componentes</h2>
			<h3>Aprende a gestionar los archivos de tu página para que esta cargue rápidamente y sea liviana, y así asegurar una experiencia buena en usuarios.</h3>
		</div>
	</div>

  <div class="row cont1" id="info">
    <div class="col-md-12">
    <h1>Información detallada del curso</h1>
    <h2>Este curso se divide en diferentes módulos, en los cuales aprenderás progresivamente.</h2>
      <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><h3>Modulo 1 / HTML Básico<h3></a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
        <ul class="custom-bullet">
        <h4>
        <li> Introducción </li> 
        <li> Qué es HTML </li>  
        <li> Evolución de HTML </li> 
        <li> Composición básica de un documento HTML </li>
        <li> Etiquetas de texto </li>
        <li> Meta etiquetas </li>
        <li> Imágenes </li>
        <li> Listas </li> 
        <li> Divs </li>
        <li> Botones </li>
        <li> Otros </li>
        </h4>
        </ul>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><h3>Modulo 2 / CSS<h3></a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
        <ul class="custom-bullet">
        <h4>
        <li>Introduccion</li>
        <li>Que es CSS</li>
        <li>Tipos de CSS</li>
        <li>Las bases de CSS</li>
        <li>Propiedades</li>
        <li>Fuentes</li>
        <li>Backgrounds</li>
        <li>Botones</li>
        <li>Imágenes</li>
        <li>Animaciones con CSS3</li>
        <li>Glyphicons y otros</li>
        </h4>
        </ul>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><h3>Modulo 2 / Responsive<h3></a>
        </h4>

      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
        <ul class="custom-bullet">
        <h4>
        <li>Introduccion</li>
        <li>Que son las paginas Responsive</li>
        <li>Introduccion a Media Querys</li>
        <li>Uso de Media Querys</li>
        <li>Introduccion a bootstrap 3.3.7</li>
        <li>Sintaxis base de bootstrap</li>
        <li>Distribucion de espacio</li>
        <li>Componentes de bootstrap</li>
        <li>Funcionalidades extras</li>
        <li>Creando paginas enteras con bootstrap</li>
        <li>Minificacion de archivos</li>
        </h4>
        </ul>
        </div>
      </div>
    </div>
  </div> 
</div>
</div>


	<div class="row cont2" id="acerca">
			<div class="col-md-6">
				<img class="imgthumb" src="images/EdgarPerez.png">
			</div>	
			<div class="col-md-6" style="text-align: left;">
				<br>
				<h1>Acerca del mentor</h1>
				<h3>Edgar Pérez (Codedgar) <br> Desarrollador en iCrea.xyz <br> Yo seré quien te enseñe durante este curso el desarrollo de tu propia pagina web. <br> He trabajado en diferentes sitios webs, entre esos, el mas destacable, iCrea.xyz y Comunicate.com.ve </h3><a href="https://www.facebook.com/codedgar" class="fa fa-facebook"></a><a href="#" class="fa fa-instagram"></a>

			</div>
		</div>

  <div class="row footer">
    <div class="col-md-12">
      <h5> Esta pagina se realizo con la finalidad de demostrar lo que el estudiante podra realizar al finalizar el curso.
      </h5>
    </div>
  </div>

</div>


</body>
</html>
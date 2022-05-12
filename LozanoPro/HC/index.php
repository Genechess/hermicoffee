<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="Estilos.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="hc.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<title>Hermicoffee</title>
</head>

<?php
include_once ("FuncionesPhp.php");
require_once 'header.php';
?>
	<center>
		Haz tu pedido!
		<a href="tel:5569429076">5569429076</a>
		<a href="mailto:hola@hermicoffee.com?Subject=Quiero%20más%20información">hola@hermicoffee.com</a>
  </center>
	<div id="Pedidos" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#Pedidos" data-slide-to="0" class="active"></li>
	    <li data-target="#Pedidos" data-slide-to="1"></li>
	    <li data-target="#Pedidos" data-slide-to="2"></li>
			<li data-target="#Pedidos" data-slide-to="3"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="Imagenes/Imagen01.jpg" alt="Foto 01">
				<div class="carousel-caption d-md-block">
					<p>Box Lunch</p>
				</div>
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="Imagenes/Imagen03.jpg" alt="Foto 03">
				<div class="carousel-caption d-md-block">
					<p>Alimentos preparados</p>
				</div>
			</div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="Imagenes/Imagen05.jpg" alt="Foto 05">
				<div class="carousel-caption d-md-block">
					<p>Servicios de Café</p>
				</div>
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="Imagenes/Imagen06.jpg" alt="Foto 06">
				<div class="carousel-caption d-md-block">
					<p>Alimentos preparados</p>
				</div>
			</div>
	  </div>
	  <a class="carousel-control-prev" href="#Pedidos" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#Pedidos" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<br><br>
	<hr>
	<br><br>
	<?php
		if ($_POST)
		{
			$Error = 0;
			if(isset( $_POST['nombre']))   $nombre = quitar($_POST['nombre']);
			if(isset( $_POST['email']))    $email = quitar($_POST['email']);
			if(isset( $_POST['mensaje']))  $mensaje = quitar($_POST['mensaje']);
			if(isset( $_POST['telefono'])) $telefono = quitar($_POST['telefono']);
			$mensaje = "Teléfono:".$telefono."\n".$mensaje;

			if ($email=="" && $telefono =="")
			{
				$Error = 1;
				?>
				<SCRIPT LANGUAGE="javascript">
					window.alert("Necesitas incluir un correo o un teléfono!");
				</SCRIPT>
				<?php
			}

			if ($Error == 0)
			{
				if ($email=="") $email = "nopusomail@nimodo.com";
				if ($nombre=="") $nombre = "No puso su nombre";
				$content="From: $nombre \n Email: $email \n Message: $mensaje";
				$recipient = "hola@hermicoffee.com";
				$mailheader = "From: $email \r\n";
				mail($recipient, "Info desde la página", $content, $mailheader) or die("Error:".$content);
				?>
				<SCRIPT LANGUAGE="javascript">
					window.alert("Información enviada correctamente.");
				</SCRIPT>
				<?php
			}
		}

	?>

	<section class="mb-4">

	    <!--Section heading-->
	    <h5 class="h3-responsive font-weight-bold text-center my-4">Permítenos contactarte</h5>
	    <!--Section description-->
	    <p class="text-center w-responsive mx-auto mb-5">Puedes dejar tus datos para que te contactemos, o preguntar lo que desees.</p>

	    <div class="row">

	        <!--Grid column-->
	        <div class="col-md-9 mb-md-0 mb-5">
	            <form id="contact-form" name="contact-form" action="index.php" method="POST">

	                <!--Grid row-->
	                <div class="row">

	                    <!--Grid column-->
	                    <div class="col-md-6">
	                        <div class="md-form mb-0">
															<label for="nombre" class="">Nombre</label>
	                            <input type="text" id="nombre" name="nombre" class="form-control">
	                        </div>
	                    </div>
	                    <!--Grid column-->

	                    <!--Grid column-->
	                    <div class="col-md-6">
	                        <div class="md-form mb-0">
															<label for="email" class="">Correo electrónico</label>
	                            <input type="text" id="email" name="email" class="form-control">

	                        </div>
	                    </div>
	                    <!--Grid column-->

	                </div>
	                <!--Grid row-->

	                <!--Grid row-->
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="md-form mb-0">
															<label for="telefono" class="">Teléfono</label>
	                            <input type="number" id="telefono" name="telefono" class="form-control">

	                        </div>
	                    </div>
	                </div>
	                <!--Grid row-->

	                <!--Grid row-->
	                <div class="row">

	                    <!--Grid column-->
	                    <div class="col-md-12">

	                        <div class="md-form">
															<label for="mensaje">Tu mensaje</label>
	                            <textarea type="text" id="mensaje" name="mensaje" rows="2" class="form-control md-textarea"></textarea>

	                        </div>

	                    </div>
	                </div>
	                <!--Grid row-->
									<!--Grid column-->
					        <div class="col-md-3 text-center">

					        </div>
					        <!--Grid column-->


	            </form>
							<br>
	            <div class="text-center text-md-left">
	                 <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Enviar</a>
	            </div>
	            <div class="status"></div>
	        </div>
	        <!--Grid column-->

	    </div>

	</section>
	<hr>
	<div class="fb-like" data-href="www.facebook.com/Hermi-Coffee" data-width="100" data-layout="standard" data-action="like" data-size="large" data-share="true"></div>


</body>
</html>

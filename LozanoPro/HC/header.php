<body>

	<div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0" nonce="izL7Q8C4"></script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<?php
include_once("FuncionesPhp.php");
	$Ano = date("Y");
	$Mes = date("m");
	?>
	<nav class="navbar navbar-dark" style="background-color: #196F3D;">
	  <a class="navbar-brand" href="index.php">
			<img src="logo.jpg" width="55" height="45" class="d-inline-block align-top" alt="">
			Hermicoffee</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav">
				<li class="nav-item dropdown" aria-labelledby="navbarDropdownMenuLink">
	      	<a class="dropdown-item" href="Servicios.php">Nuestros Servicios</a>
	      </li>
				<li class="nav-item dropdown" aria-labelledby="navbarDropdownMenuLink">
	      	<a class="dropdown-item" href="Galeria.php">Galería</a>
				<li class="nav-item dropdown" aria-labelledby="navbarDropdownMenuLink">
		      	<a class="dropdown-item" href="Privacidad.php">Aviso de Privacidad</a>
		    </li>
				<li class="nav-item dropdown" aria-labelledby="navbarDropdownMenuLink">
		      	<a class="dropdown-item" href="Contacto.php">Contáctanos</a>
	      </li>
				<li class="nav-item dropdown" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="Facturación.php">Facturación</a>
				</li>
	    </ul>
	  </div>
	</nav>
<?php ?>

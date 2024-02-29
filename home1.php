<?php
session_start();
if (!isset($_SESSION["usuario"])) {
	header("Location: index.php");
	exit();
}
?>

<!doctype html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="./style/estilos.css">
	<link rel="shortcut icon" href="./image/logo pirncipal con letras.png" type="image/x-icon">
	<title>A.H.Ocamp Inventory Software</title>
</head>

<body>




<audio id="loginSound" autoplay preload="auto">
  <source src="intro.mp3" type="audio/mpeg">
  <script>
window.onload = function() {
  // Obtén el elemento de audio por su ID
  var sound = document.getElementById("loginSound");

  // Reproduce el sonido
  sound.play();
};

</script>
  <!-- Si deseas, puedes agregar más etiquetas 'source' para proporcionar diferentes formatos de archivo -->
</audio>

	<div class="contain">
		<div id="row-1" class="row-12">
			<nav class="navbar">
				<div class="container-fluid">
					<img class="logo" src="./image/logo sin letras.png" alt="logo_sin">
					<a href="inventory.php">
						<h1 class="navbar-brand">A.H.Ocamp Inventory Software</h1>
					</a>
					<form class="d-flex">
				
						<a href="sesionDestroy.php" class="log-out"><button class="btn1" type="button"> LOG-OUT</button></a>
					
					</form>
				</div>
			</nav>
		</div>
		<div class="row">
			<div class="col-1"></div>
			<div class="col-10">
				<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
							class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
							aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
							aria-label="Slide 3"></button>
					</div>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="./image/portada logo .png" class="d-block w-100" alt="foto 1">
						</div>
						<div class="carousel-item">
							<img src="./image/portada escudo .png" class="d-block w-100" alt="foto 2">
						</div>
						<div class="carousel-item">
							<img src="./image/portada logo 2.png" class="d-block w-100" alt="foto 3">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
						data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
						data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
			<div class="col-1"></div>
			<div class="col-12">
				<h2 class="titulo_texto">A.H.Ocamp un Software para la institución</h2>
				<p class="Bienvenida"> Bienvenidos a la página dedicada al software de inventario
					<span>A.H.Ocamp</span>. Este software ha
					sido diseñado para
					ayudar a la institución educativa a gestionar de manera efectiva y eficiente los bienes
					que posee, desde el seguimiento de la ubicación hasta el control del estado de los bienes y la
					asignación del encargado responsable. Con <span>A.H.Ocamp</span>, el colegio puede ahorrar tiempo y
					dinero al
					tener una mejor visibilidad y control sobre su inventario, lo que permite una mejor toma decisiones
					sobre las compras y una mayor eficiencia en la gestión del inventario. En esta página,
					exploraremos las características clave del software.
				<p class="Bienvenida">
					Además de lo mencionado anteriormente, esta página también proporcionará una descripción detallada
					de las diferentes características que ofrece el software de inventario <span>A.H.Ocamp</span>, como
					la capacidad
					de realizar un seguimiento de los bienes del colegio en tiempo real, así como la posibilidad de
					asignar responsabilidades y tareas específicas a diferentes miembros del personal. También
					explicaremos cómo <span>A.H.Ocamp</span> puede ayudar al colegio a mejorar la seguridad de sus
					bienes, ya que
					puede proporcionar información precisa sobre su ubicación y estado actual.

					A través de esta página, usted descubrirá cómo el software de inventario <span>A.H.Ocamp</span>
					puede ayudar a su
					colegio a mejorar la gestión de sus bienes de una manera fácil y eficiente. También proporcionaremos
					información detallada sobre cómo obtener y utilizar el software en su institución educativa. Si
					desea obtener más información sobre cómo <span>A.H.Ocamp</span> puede ayudar a su colegio, sigue
					nuestras redes.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
			<div class="col-12 col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class="card1" style="width: 18rem;">
					<img src="./image/img carta.png" class="card-img-top" alt="...">
					<div class="card-body">
						<p class="card-text">software desarrollado por estudiantes de la institución educativa con la
							intención de cambiar el sistema que se tiene del inventario.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class="card2" style="width: 18rem;">
					<img src="./image/img carta2.png" class="card-img-top" alt="...">
					<div class="card-body">
						<p class="card-text">programado con el fin de mejorar el entorno administrativo y el modo de
							gestionar los bienes propios, municipales ó donaciones.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
	</div>
	<div id="row12" class="row12">
		<footer class="bg-transparent text-center text-black">
			<!-- Grid container -->
			<div class="container p-4 pb-0">
				<!-- Section: Social media -->
				<section class="mb-4">
					<!-- Facebook -->
					<a class="btn btn-outline-warning btn-floating m-1" href="#!" role="button"><i
							class="fab fa-facebook-f">
							<img class="logos" src="./image/logo-facebook.png" alt="Facebook">
						</i></a>

					<!-- Instagram -->
					<a class="btn btn-outline-warning btn-floating m-1" href="#!" role="button"><i
							class="fab fa-instagram">
							<img class="logos" src="./image/logo-instagram.png" alt="Instagram">
						</i></a>

					<!-- whatsapp -->
					<a class="btn btn-outline-warning btn-floating m-1" href="#!" role="button"><i
							class="fab fa-linkedin-in">
							<img class="logos" src="./image/logo-whatsapp.png" alt="whatsapp">
						</i></a>
				</section>
				<!-- Section: Social media -->
			</div>
			<!-- Grid container -->

			<!-- Copyright -->
			<div class="text-center p-3" style="background-color: #87000006">
				© 2020 Copyright:
				<a class="text-white" href="https://autonoma.edu.co/" target="_blank">autonoma.edu.co</a>
			</div>
			<!-- Copyright -->
		</footer>
	</div>
	</div>
	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	-->
</body>

</html>
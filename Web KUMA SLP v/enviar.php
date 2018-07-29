<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Clientes - KUMA SLP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.html">KUMA SLP</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Inicio</a></li>
					<li><a href="nosotros.html">Nosotros</a></li>
					<li><a href="servicios.html">Servicios</a></li>
					<li><a href="clientes.html">Clientes</a></li>
					<li><a href="contactanos.html">Contáctanos</a></li>
				</ul>
			</nav>

		<!-- Heading -->
			<div id="heading" >
				<h1>contactanos</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">

					<!-- Elements -->
						<div class="row">
							<div class="col-6 col-12-medium">

								<!-- Text -->
									<h3>contactanos</h3>
									<p>Se parte del equipo KUMA!!</p>
									<img src="images/pic08.png" width=120% height=50%>
									
									<?php 
$myemail = '10laragurmendi@gmail.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>
									
									<form action="enviar.php" method="post">
										<div>
											<label for="nombre">Nombre:</label>
											<input type="text" name="nombre" />
										</div>
										<div>
											<label for="email">E-mail:</label>
											<input type="email" name="email" />
										</div>
										<div>
											<label for="mensaje">Mensaje:</label>
											<textarea type="txt" name="mensaje"></textarea>
										</div>
										<div>
										     <label></label>
											 <input type="submit" value="ENVIAR" >
										</div>

									</form> 
							
							</div>
						</div>
					</div>
				</div>
			</section>
		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="content">
						<section>
							<h3>KUMA SLP</h3>
							<p>

				 Es una nueva empresa que promueve el cumplimiento de la normativa legal vigente en materia de “Salud y Seguridad en el Trabajo
						</p>
						</section>
						<section>
							<h4>Contáctanos</h4>
							<ul class="alt">
								<li><a href="#">Celular: 992 595 996</a></li>
								<li><a href="#">Correo electrónico: kumaslpperu@gmail.com </a></li>
							</ul>
						</section>
						<section>
							<h4>REDES SOCIALES</h4>
							<ul class="plain">
							<!--	<li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>  -->
								<li><a href="https://www.facebook.com/kumaslp/"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
								<li><a href="https://www.instagram.com/kumaslpperu/"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
								<!--
								<li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li> -->
							</ul>
						</section>
					</div>
					<div class="copyright">
						&copy; 2018 KUMA SLP Todos los derechos reservados </a>
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
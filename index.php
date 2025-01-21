<?php
session_start();

$_SESSION['theme'] = 'light';

$client_details = [];
$client_details['ip'] = $_SERVER['REMOTE_ADDR'];
$client_details['address'] = 'resolve it from the ip';
$client_details['visited_pages'] = array();
array_push($client_details['visited_pages'], 'index.php');
?>
<!doctype html>
<html lang="en">

<head>
	<?php require_once('header.php'); ?>
	<?php require_once('globals/bootstrapCSS.php'); ?>
	<link rel="stylesheet" href="styles/partner_slider.css">
	<link rel="stylesheet" href="styles/div_slider.css">
	<link rel="stylesheet" href="globals/static/output.css">
	<link rel="stylesheet" href="styles/index.css">
	<title>Laki 131</title>
	<link rel="icon" type="image/png" href="resources/logo.png">
</head>

<body>

	<?php require_once('components/navbar/navbar.php'); ?>


	<div class="image-slider">
		<div class="slide">
			<img src="resources/pic1.jpg" alt="Picture 1">
			<div class="slide-text">Text for Picture 1</div>
		</div>
		<div class="slide">
			<img src="resources/pic2.jpg" alt="Picture 2">
			<div class="slide-text">Text for Picture 2</div>
		</div>
		<div class="slide">
			<img src="resources/pic3.jpg" alt="Picture 3">
			<div class="slide-text">Text for Picture 3</div>
		</div>
		<button class="arrow left"></button>
		<button class="arrow right"></button>
	</div>

	<!--DIVIDER-->
	<?php require('components/divider/divider.php'); ?>

	<?php require_once('components/index_components/introduction/introduction.php'); ?>

	<!--DIVIDER-->
	<?php require('components/divider/divider.php'); ?>

	<!--Our Services-->
	<section class="container py-5">
		<h2 class="text-center fw-bold mb-4">Our Services</h2>

		<div class="row g-4">
			<!-- Card 1 -->
			<div class="col-md-4">
				<div class="card shadow">
					<img src="resources/Service1.jpg/300" class="card-img-top" alt="Service 1">
					<div class="card-body text-center">
						<h5 class="card-title">Service One</h5>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</div>
			</div>

			<!-- Card 2 -->
			<div class="col-md-4">
				<div class="card shadow">
					<img src="resources/Service2.jpg/300" class="card-img-top" alt="Service 2">
					<div class="card-body text-center">
						<h5 class="card-title">Service Two</h5>
						<p class="card-text">Suspendisse potenti. Pellentesque habitant morbi tristique senectus.</p>
					</div>
				</div>
			</div>

			<!-- Card 3 -->
			<div class="col-md-4">
				<div class="card shadow">
					<img src="resources/Service1.jpg/300" class="card-img-top" alt="Service 3">
					<div class="card-body text-center">
						<h5 class="card-title">Service Three</h5>
						<p class="card-text">Curabitur vel quam et turpis tincidunt molestie.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--LEARN MORE BUTTON-->
	<div class="row justify-content-center">
		<a class="btn btn-default col-2 m-4" style="background-color: orange;">Learn More</a>
	</div>
	</div>

	<!--DIVIDER-->
	<?php require('components/divider/divider.php'); ?>

	<?php require_once('components/index_components/machine_park/machine_park.php'); ?>

	<!--DIVIDER-->
	<?php require('components/divider/divider.php'); ?>


	<!--Clients-->

	<div class="row justify-content-center w-100">
		<div class="row justify-content-center">
			<div class="col-7">
				<br>
				<h1 class="fw-bold m-4" style="text-align: center;">Our Partners/ Our Clients</h2>

					<br>
					<br>
					<p style="text-align: justify;">
						We work with many big international companies, including Schneider Electric, a global leader in energy management and automation, and Lenze Operations GmbH, a pioneer in propulsion technology and automation. We also partner with Atlas Copco, a world-leading industrial group, and ATB Austria Antriebstechnik AG, a leading global supplier of electric drive systems.
					</p>

					<p style="text-align: justify;">
						Our client base spans multiple industries, including automotive, machine building, and LED lighting, with notable clients such as Husqvarna Group, LEDVANCE (OSRAM), and Festo. We are proud to support their growth and success through our reliable and innovative solutions.
					</p>

					<br>
					<br>
					<section class="customer-logos slider">
						<div class="slide1"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
						<div class="slide1"><img src="http://www.webcoderskull.com/img/logo.png"></div>
						<div class="slide1"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
						<div class="slide1"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
						<div class="slide1"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
						<div class="slide1"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
						<div class="slide1"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
						<div class="slide1"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
						<div class="slide1"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
					</section>
					<br>
					<br>
					<br>
			</div>
		</div>

		<div class="row justify-content-center">
			<a class="btn btn-default col-2 m-4" style="background-color: orange;">Learn More</a>
		</div>
	</div>

	<!--DIVIDER-->
	<?php require('components/divider/divider.php'); ?>

	<!--CERTIFICATES-->
	<?php require_once('components/index_components/certificates/certificate.php'); ?>

	<!--DIVIDER-->
	<?php require('components/divider/divider.php'); ?>

	<!--FIND US-->
	

	<!--DIVIDER-->
	

	<div class="row justify-content-center w-100 mb-5">
		<!--TEXT CONTENT-->
		<div class="row justify-content-center">
			<h1 class="m-4 fw-bold" style="text-align: center;">We Care About the Earth</h1>
		</div>
		<div class="row justify-content-center">
			<div class="col-3">
				<p style="text-align: justify;">
					We employ modern methods of clean prodction, having plans to become <b>Carbon Neutral</b> by <b>2026</b>.
				</p>
			</div>
			<!--CHART-->
			<div class="col-4">
				<canvas id="myChart" style="width:100%;max-width:600px"></canvas>
			</div>
		</div>
	</div>

	<!--CHART JS-->
	<?php require('components/charts/chart-js.php'); ?>


	<!--DIVIDER-->
	<?php require('components/divider/divider.php'); ?>

	<!--FOOTER-->
	<div class="mt-5">
		<?php require('components/footer/footer.php'); ?>
	</div>
	

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

	<script src="scripts/partner_slider.js"></script>

	<!-- Include the JavaScript file -->
	<script src="scripts/div_slider.js"></script>

	<?php require_once('globals/bootstrapJS.php'); ?>
</body>

</html>
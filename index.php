<?php
session_start();

$_SESSION['theme']='light';

$client_details = [];
$client_details['ip'] = $_SERVER['REMOTE_ADDR'];
$client_details['address'] = 'resolve it from the ip';
$client_details['visited_pages'] = array();
array_push($client_details['visited_pages'],'index.php');
?>
<!doctype html>
<html lang="en">
	<head>
		<?php require_once('header.php');?>
		<?php require_once('globals/bootstrapCSS.php');?>
		<link rel="stylesheet" href="styles/partner_slider.css">
		<link rel="stylesheet" href="styles/div_slider.css">
		<title>Laki 131</title>
		<link rel="icon" type="image/png" href="resources/logo.png">
	</head>
	<body>

		<?php require_once('components/navbar/navbar.php');?>


       <div class="image-slider">
       		<div class="slide">
       			<img src="resources/pic1.jpg" alt="Picture 1">
       		</div>
       		<div class="slide">
       			<img src="resources/pic2.jpg" alt="Picture 2">
       		</div>
       		<div class="slide">
       			<img src="resources/pic3.jpg" alt="Picture 3">
       		</div>
			   <button class="arrow left"></button>
			   <button class="arrow right"></button>
       	</div>

			<!--DIVIDER-->
			<?php require('components/divider/divider.php');?>

			<!--WHO ARE WE BOX-->
			<div class="row justify-content-center w-100">
				<!--TEXT CONTENT-->
				<div class="row justify-content-center">
					<div class="col-7">
						<h1 class="m-4 fw-bold" style="text-align: center;">Who are We</h1>
						<p style="text-align: justify;">
							Welcome to Laki 131 Ltd., a leading manufacturer of high-quality aluminum alloy castings produced under high pressure. With a rich history dating back to 1991, our company has evolved to become a trusted partner for industries worldwide, including automotive, machine building, construction, and LED lighting. ISO 9001:2008 certified, we pride ourselves on our commitment to excellence, innovation, and customer satisfaction. Our state-of-the-art facilities, equipped with cutting-edge machinery and a team of skilled professionals, enable us to deliver over 1200 tons of aluminum castings per year. At Laki 131, we strive to meet the evolving needs of our customers, driving growth and expansion into new markets with innovative products and technologies. With a strong focus on quality, reliability, and environmental responsibility, we aim to build long-lasting relationships with our clients and contribute to the success of their businesses. You can find out more at our <a href="https://www.youtube.com/@emilruskov7485" target="_blank">YouTube Channle</a>.
						</p>
					</div>
				</div>

				<!--LEARN MORE BUTTON-->
				<div class="row justify-content-center">
					<a class="btn btn-default col-2 m-4" style="background-color: orange;">Learn More</a>
				</div>
			</div>

			<!--DIVIDER-->
			<?php require('components/divider/divider.php');?>

			<!--SERVICES WE OFFER-->
			<div class="row justify-content-center w-100">
				<!--TEXT CONTENT-->
				<div class="row justify-content-center">
					<div class="col-7">
						<h1 class="m-4 fw-bold" style="text-align: center;">Services We Offer</h1>
						<p style="text-align: justify;">
						At Laki 131, we offer a range of services designed to meet the diverse needs of our clients. Our two main areas of expertise are:
						</p>
						<ul>
							<li>
							<p>
							Aluminum Casting: We utilize modern technologies and state-of-the-art equipment to produce high-quality aluminum castings. Our facilities are equipped with advanced machinery, including cold chamber casting machines, allowing us to deliver precision-crafted parts with exceptional accuracy and consistency.
							</p>
							</li>
							<li>
							<p>
							Powder Coating: We also provide a powder coating service, using the latest technologies to apply a durable and corrosion-resistant finish to our clients' products. Our powder coating process ensures a high-quality, long-lasting finish that meets the most stringent standards.
							</p>
							</li>
						</ul>
					</div>
				</div>

				<!--LEARN MORE BUTTON-->
				<div class="row justify-content-center">
					<a class="btn btn-default col-2 m-4" style="background-color: orange;">Learn More</a>
				</div>
			</div>

			<!--DIVIDER-->
			<?php require('components/divider/divider.php');?>

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
			<?php require('components/charts/chart-js.php');?>

			<!--DIVIDER-->
			<?php require('components/divider/divider.php');?>


			<!--CERTIFICATES-->
			<div class="row justify-content-center w-100">
				<div class="row justify-content-center">
					<div class="col-7">
						<h1 class="m-4 fw-bold" style="text-align: center;">Our Certificates</h1>
						<p style="text-align: justify;">
							Our company is certified to ISO 9001:2000 since October 2005 and re-registered with an ISO 9001:2015 certificate in October 2016 by the certification body "TUV-NORD - Bulgaria". We hold the following certifications: ISO 9001:2015 for Quality Management System, ISO 14001:2015 for Environmental Management System, and ISO 50001:2018 for Energy Management System. These certifications demonstrate our commitment to maintaining high standards of quality, environmental responsibility, and energy efficiency in our operations.
						</p>
					</div>
				</div>
				<div class="row justify-content-center align-items-end" style="padding-bottom: 50px;">
					<div style="width: 16px; margin-right: 50px ;margin-bottom: 80px;">
						<button type="button" class="btn btn-default" style="background-color: orange;">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"></path>
							</svg>
						</button>
					</div>

					<div style="width: 200px; height: 200px; border: 3px solid black; border-radius: 10px; overflow: hidden; padding: 0px; margin: 10px;">
						<img src="cert2.jpg" style="width: 200px;"></img>
					</div>

					<div style="width: 300px; height: 300px; border: 3px solid black; border-radius: 10px; overflow: hidden; padding: 0px; margin: 10px;">
						<img src="cert1.jpg" style="width: 300px;"></img>
					</div>

					<div style="width: 200px; height: 200px; border: 3px solid black; border-radius: 10px; overflow: hidden; padding: 0px; margin: 10px;">
						<img src="cert1.jpg" style="width: 200px;"></img>
					</div>

					<div style="width: 16px; margin-left: 10px ;margin-bottom: 80px;">
						<button type="button" class="btn btn-default" style="background-color: orange;">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"></path>
							</svg>
						</button>
					</div>
				</div>
			</div>

			<?php require('components/divider/divider.php');?>

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
			<?php require('components/divider/divider.php');?>

			<!--SERVICES WE OFFER-->
			<div class="row justify-content-center w-100 mb-5" style="">
				<div class="row justify-content-center mb-5">
					<h1 class="fw-bold m-4" style="text-align: center;">Where Can You Find Us?</h2>
				</div>
				<div class="row justify-content-center">
					<div class="col-3">
						<p>We are situated in the beautiful city of Plovdiv, Bulgaria. So on, so on, so on, so on, so on, so on, so on, so on, so on.</p>
					</div>
					<div class="col-4">
						<?php require('components/maps/map.php');?>
					</div>
				</div>
			</div>

			<!--DIVIDER-->
			<?php require('components/divider/divider.php');?>

			<!--SERVICES WE OFFER-->
			<div class="row justify-content-center w-100 mb-5" style="">
				<div class="row justify-content-center mb-5">
					<h1 class="fw-bold m-4" style="text-align: center;">Machine Park</h2>
				</div>
				<div class="row justify-content-center">
					<div class="col-3">
						<p>We are equipped with moder machinary, helping us to provide high precision and ecological production. Yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada yada</p>
					</div>
					<div class="col-4">
						<div style="height: 600px; background-color: black; border-radius: 20px;">
						</div>
					</div>
				</div>
				<!--LEARN MORE BUTTON-->
				<div class="row justify-content-center mb-2">
					<a class="btn btn-default col-2 m-4" style="background-color: orange;">Learn More</a>
				</div>
			</div>


			<!--DIVIDER-->
			<?php require('components/divider/divider.php');?>

			<?php require('components/footer/footer.php');?>
		</div>

		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

		<script src="scripts/partner_slider.js"></script>

		<!-- Include the JavaScript file -->
    	<script src="scripts/div_slider.js"></script>

		<?php require_once('globals/bootstrapJS.php');?>
	</body>
</html>

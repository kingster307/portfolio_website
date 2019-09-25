<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>The King's Portfolio</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- main css -->
	<link rel="stylesheet" href="css/main.css">
	<!-- bootstrap 4  -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- fontawesome -->
	<script src="https://kit.fontawesome.com/829adc92fd.js"></script>
	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,500|Oswald:400,700&display=swap"
		rel="stylesheet">

		

</head>


<body>

<h1>it works</h1>
	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-11 p-0 p-lg-2 b-0 blueBackground min-vh-100 overflow-hidden" id="backgroundColorChecker">

				<div class="m-lg-5 pl-lg-3 mt-5 ml-sm-5 ml-2">

					<!-- firstContainer -->
					<div>
						<div class="ml-0 ml-sm-1 mt-5 pt-5 panel">
							<i class="fas fa-sort-up cutomArrowIcon d-xs-block d-lg-none"></i>
							<div class="panel-heading">
								<h2 class="hoverTitleText headingText" data-toggle="collapse" href="#collOne"
									role="button" aria-expanded="false" aria-controls="collOne">Designer.</h2>
							</div>
							<div class="collapse" id="collOne">

								<p class="dropdownText">With a minor in graphic design, I have the 
									background & creativity to craft magnificent UI/UX interfaces as 
									well as hands on experience with a plethora of graphic software 
									including, but not limited to, Adobe Creative Suites, Adobe XD, 
									Webflow, & Moqups. </p>

							</div>
						</div>
					</div>

					<!-- secondContainer -->
					<div>
						<div class="ml-0 ml-sm-5 pt-5 mt-5 panel">
							<i class="fas fa-sort-up cutomArrowIcon d-xs-block d-lg-none"></i>
							<div class="panel-heading">
								<h2 class="hoverTitleText headingText" data-toggle="collapse" href="#collTwo"
									role="button" aria-expanded="false" aria-controls="collTwo">Developer.</h2>
							</div>
							<div class="collapse" id="collTwo">
								<p class="dropdownText">With a B.S. in Computer Science I have the 
									background to be able to learn new systems, frameworks, 
									languages, and libraries with relative ease. Throughout my college 
									career, I have been spending my free time taking courses  on Udemy, 
									and freelancing to help me get practical, hands on experience in all 
									things web. </p>

							</div>
						</div>
					</div>

					<!-- thirdContainer -->
					<div>
						<div class="ml-0 ml-sm-5 pl-sm-5 pt-5 mt-5 panel">
							<i class="fas fa-sort-up cutomArrowIcon d-xs-block d-lg-none"></i>
							<div class="panel-heading">
								<h2 class="hoverTitleText headingText" data-toggle="collapse" href="#collThree"
									role="button" aria-expanded="false" aria-controls="collThree">Innovator.</h2>
							</div>
							<div class="collapse" id="collThree">

								<p class="dropdownText">Navigating the dynamic industry of digital 
									technology, and services, I bring new life in products and services. 
									Through my entrepreneurial delivery of real life solutions</p>

							</div>
						</div>
					</div>

				</div>

				<!-- flyingUFOContainer -->
				<div id="ufoImageContainer">
					<img class="ufoImage" src="img/ufo-2.svg">
				</div>

				<!-- hamburger responsive nav -->
				<div id="nav-icon2" class="d-xs-block d-lg-none">
					<span class=""></span>
					<span class=""></span>
					<span class=""></span>
					<span class=""></span>
					<span class=""></span>
					<span class=""></span>
				</div>


			</div>




			<!-- include the nav via php -->
			<?php include 'navBar.php';?>

		</div>
	</div>

	


	<!-- need to file to load from local if cdn fails -->

	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

	<!--<script src="https://theapicompany.com/deviceAPI.js"></script>-->

	<!-- customScript -->
	<script src="js/main.js"></script>

	<!-- home message -->
 	<!-- <script>
// 		$('.panel').ready(function () {
// 			alert("responsiveness for 5k & content still in progress.")
// 		});
 	</script>-->

	<!-- bootstrap 4  -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>

</body>

</html>

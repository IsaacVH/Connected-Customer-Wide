<!DOCTYPE html>
<html>
	<head>
		<title>529-Savings</title>
		<?php require("page-pieces/imports.php"); ?>
		<link href="../css/howTo.css" rel="stylesheet">
		<link href="../css/related-section.css" rel="stylesheet">
	</head>
	<style>
		#title{
				font-family:helvetica;
				font-weight:900;
				font-size: 40px !important; 
				color: #198A3E;
				text-align: center;
				width:700px;
				padding:20px;
				margin:0 auto;
				background-color:white;
				position:relative;
				top:30px;
				box-shadow: 0px 0px 3px rgba(2, 2, 2, 0.1) , 0px 0px 3px rgba(2, 2, 2, 0.1);
			}
	</style>
	<body>

		<!-- Google Analytics -->
		<?php include("google-analytics.php"); ?>
		<!-- END GA -->
	
		<div data-role="page" id="home">

			<!-- BEGIN Header -->
			<?php require("page-pieces/header.php"); ?>

			<div id="fractal">

			
				<h1 id="title">529 COLLEGE SAVINGS PLAN</h1>
			
			<!-- END Header -->

			<!-- BEGIN Main Content -->
			
					<div class="game-container">
						<div id="game"><img src="../assets/529Display-o.png" /></div>
					</div>
					
					<div class="cta-container">
						<div class="cta">
							<div id="email"></i> EMAIL TO SELF</div>
							<div id="banker"></i> DISCUSS WITH BANKER</div>
						</div>
					</div>
			<!-- END Main Content -->

			<!-- BEGIN Footer -->
				<div class="related-container">
					<div class="related-object">
						<h1 id="relatedTitle2">RELATED PRODUCTS & SERVICES</h1>
						<div class="object1">
							<img src="../assets/related1-o.png" />
							<h2 id="objectTitle">TEACH KIDS<br>ABOUT CREDIT</h2>
						</div>
						<div class="object2">
							<img src="../assets/related4-o.png" />
							<h2 id="objectTitle">PAYING OFF<br>STUDENT LOANS</h2>	
						</div>
						<div class="object3">
							<img src="../assets/related3-o.png" />
							<h2 id="objectTitle">NEED vs. WANT<br>BUDGET APP</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- END Footer -->
		</div>
	</body>
</html>
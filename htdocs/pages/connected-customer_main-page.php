<!DOCTYPE html>
<html>
	<head>
		<title>Connected Customer</title>
		<?php require("page-pieces/imports.php"); ?>
		<style>
			#title{
				font-family:helvetica;
				font-weight:900;
				font-size: 40px !important; 
				color: #198A3E;
				text-align: center;
				width:580px;
				padding:20px;
				margin:0 auto;
				background-color:white;
				position:relative;
				top:30px;
			}
			.titHow{
				width:880px;
				margin:0 auto;
			}
			
		</style>
	</head>
	<body>

		<!-- Google Analytics -->
		<?php include("google-analytics.php"); ?>
		<!-- END GA -->

		<div data-role="page" id="home">

			<!-- BEGIN Header -->
			<?php require("page-pieces/header.php"); ?>

			
			<!-- END Header -->

			<!-- BEGIN Main Content -->
			<!-- <?php // require("page-pieces/carousel-sub.php"); ?> -->
			<div id="fractal">

				<div class="titHow">
				<!-- <div id="square1"></div> -->
					<h1 id="title">HOW CAN WE HELP YOU?</h1>
					<!-- <div id="square2"></div> -->
				</div>

			<?php 
				$carouselsrc = "carousel-pages/main-pages.php";
				require("page-pieces/carousel.php"); 
			?>
			</div>
			<!-- END Main Content -->

			<!-- BEGIN Footer -->
			
			<!-- END Footer -->
		</div>
	</body>
</html>



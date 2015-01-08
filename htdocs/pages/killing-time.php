<!DOCTYPE html>
<html>
	<head>
		<title>Game</title>
		<?php require("page-pieces/imports.php"); ?>
		<script type="text/javascript" src="../js/killing-time.js"></script>
	</head>
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
				box-shadow: 0px 0px 7px rgba(9, 9, 9, 0.1) , 0px 0px 7px rgba(9, 9, 9, 0.1);
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
				<h1 id="title">KILLING TIME</h1>
			
			<!-- END Header -->

			<!-- BEGIN Main Content -->
			<?php require("page-pieces/single-page.php"); ?>
			<!-- END Main Content -->

			<!-- BEGIN Footer -->
			<!-- END Footer -->
			</div>
		</div>
	</body>
</html>
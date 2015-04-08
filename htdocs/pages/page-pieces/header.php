<script src="../js/header.js" type="text/javascript"></script>
<script> $(function() { set_clock(); setInterval(function(){set_clock();}, 1000); setRelatedShow(); }); </script>
<link rel="stylesheet" href="../css/header.css">

<div id="header">
	
	<div class="menu-button" onclick="menu_button()">
		<span class="white-line-container">
			<div class="white-line"></div>
			<div class="white-line"></div>
			<div class="white-line"></div>
		</span>
	</div>
	<div class="menu">
		<div class="nav-dropdown">
			<ul>
				<a href="/htdocs/pages/send-mail.php"><li>EMAIL&nbsp;</li></a>
				<a href="/htdocs/pages/banking-101.php"><li>BANKING 101&nbsp;</li></a>
				<a href="/htdocs/pages/creating-portfolio.php"><li>CREATING A PORTFOLIO&nbsp;</li></a>
				<a href="/htdocs/pages/teaching-children.php"><li>TEACHING CHILDREN SAVINGS&nbsp;</li></a>
				<a href="/htdocs/pages/529-savings.php"><li>529 SAVINGS PLAN&nbsp;</li></a>
				<a href="/htdocs/pages/killing-time.php"><li>KILLING TIME&nbsp;</li></a>
				<a href="/htdocs/pages/interesting-facts.php"><li>INTERESTING FACTS&nbsp;</li></a>
				<a href="/htdocs/pages/game-page.php"><li>GAMES&nbsp;</li></a>
				<a href="/htdocs/pages/ticTacToe.php"><li>TIC TAC TOE&nbsp;</li></a>
				<a href="/htdocs/pages/local-attractions.php"><li>LOCAL ATTRACTIONS&nbsp;</li></a>
				<a href="/htdocs/pages/view-image.php?image=/htdocs/assets/interact2_large.jpg"><li>FIDELITY&nbsp;</li></a>
			</ul>
		</div>
	</div>

	<a href="#" onclick="backClicked()"><div class="b-button"><i class="fa fa-arrow-left"></i></div></a>

	<div id="clock">
		<span class="date"></span>
		<span class="time">
			<span id="hourmin">0:00</span>
			<span id="am_pm">am</span>
		</span>
		<span class="dayofweek"></span>
	</div>
	
	<a href="#" onclick="enter()"><div class="h-button"><i class="fa fa-university"></i></div></a>

</div>

<div id="coverall" onclick="menu_button()"></div>

<div class="button-pull-up" onclick="show_related()"><i class="fa fa-arrow-up"></i> Related Content</div>

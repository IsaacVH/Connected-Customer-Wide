<script src="../js/header.js" type="text/javascript"></script>
<script> $(function() { set_clock(); setInterval(function(){set_clock();}, 1000); }); </script>
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
				<li>TRANSACTION&nbsp</li>
				<li>MEET WITH A BANKER&nbsp</li>
				<li>ACCOUNT INFO&nbsp</li>
				<li>LOAN INFO&nbsp</li>
				<li>CREDIT CARD&nbsp</li>
				<li>PROBLEM RESOLUTION&nbsp</li>
				<li>FINANCIAL ADVICE&nbsp</li>
				<li>FINANCIAL HOW-TO'S&nbsp</li>
				<li>SAFETY DEPOSIT BOX&nbsp</li>
				<li>LOCAL EVENT&nbsp</li>
				<li>PLAY A GAME&nbsp</li>
				<li>FUN FACT&nbsp</li>
			</ul>
		</div>
	</div>

	<div id="clock">
		<span class="date"></span>
		<span class="time">
			<span id="hourmin">0:00</span>
			<span id="am_pm">am</span>
		</span>
		<span class="dayofweek"></span>
		
		<a href="#" onclick="enter()"><div class="h-button"><i class="fa fa-university"></i></div></a>
	</div>

</div>
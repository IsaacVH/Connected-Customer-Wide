<script src="../js/header.js" type="text/javascript"></script>
<script> $(function() { set_clock(); setInterval(function(){set_clock();}, 1000); }); </script>
<link rel="stylesheet" href="../css/header.css">
<script>
	function backClicked() {
		history.go(-1);
	}

	function enter() {
		document.location.href=home;
	}
	var home = "connected-customer_main-page.php";
</script>

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
				<a href="#"><li>TRANSACTION&nbsp</li></a>
				<a href="#"><li>MEET WITH A BANKER&nbsp</li></a>
				<a href="#"><li>ACCOUNT INFO&nbsp</li></a>
				<a href="#"><li>LOAN INFO&nbsp</li></a>
				<a href="#"><li>CREDIT CARD&nbsp</li></a>
				<a href="#"><li>PROBLEM RESOLUTION&nbsp</li></a>
				<a href="#"><li>FINANCIAL ADVICE&nbsp</li></a>
				<a href="#"><li>FINANCIAL HOW-TO'S&nbsp</li></a>
				<a href="#"><li>SAFETY DEPOSIT BOX&nbsp</li></a>
				<a href="#"><li>LOCAL EVENT&nbsp</li></a>
				<a href="#"><li>PLAY A GAME&nbsp</li></a>
				<a href="#"><li>FUN FACT&nbsp</li></a>
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
	</div>
	
	<a href="#" onclick="enter()"><div class="h-button"><i class="fa fa-university"></i></div></a>

</div>

<div id="coverall" onclick="menu_button()"></div>

<script src="../js/header.js" type="text/javascript"></script>
<script> $(function() { set_clock(); setInterval(function(){set_clock();}, 1000); }); </script>
<link rel="stylesheet" href="../css/header.css">
<div id="header">
	

	<div id="clock">
	<div class="menu-button" onclick="menu_button()">
		<span class="white-line-container">
			<div class="white-line"></div>
			<div class="white-line"></div>
			<div class="white-line"></div>
		</span>
	</div>

		<span class="date"></span>
		<span class="time">
			<span id="hourmin">0:00</span>
			<span id="am_pm">am</span>
		</span>
		<span class="dayofweek"></span>
	</div>

</div>
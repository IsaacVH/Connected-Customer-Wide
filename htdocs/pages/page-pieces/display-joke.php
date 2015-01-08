<style>
#factHolder{
}

.fact{
	display:none;
}


.display-area{
	width:700px;
	height:600px;
	position:relative;
	border-radius:8px;
	background-color:white;
	box-shadow: 0px 0px 7px rgba(9, 9, 9, 0.1) , 0px 0px 7px rgba(9, 9, 9, 0.1);
	margin:90px auto 0px auto;
}

.did-you-know{
	text-align:center;
	display:block;
	font-family:helvetica;
	font-weight:900;
	font-size:30px;
	color:#6d6e70;
	position:absolute;
	margin:0 auto;
	top:30px;
	margin-left:220px;
}

#line {
	background-color:#D1D2D4;
	width:680px;
	height:2px;
	position:absolute;
	margin-top:80px;
	margin-left:10px;
	
}

.showFact{
	position:absolute;
	margin-top:110px;
	padding:0px 30px 0px 30px;
	display:block;
	font-family:helvetica;
	font-weight: 900;
	color:#ee3d3b;
	font-size:45px;

}


#random {
	margin:15px auto 0px auto;
	border-radius: 8px;
	color:white;
	width:250px;
	height:60px;
	background-color:#ee3d3b;
	cursor:pointer;
	text-align:center;
	line-height:7px;
	padding-top:1px;
}

#random h1{
	color:white;
	font-size:25px;
	font-weight:900;
	margin-bottom:17px;
}

#random:hover{
	background-color:#ef4b4c;
}

.blink{
    -webkit-animation: blink 600ms infinite alternate;
    -moz-animation: blink 600ms infinite alternate;
    -o-animation: blink 600ms infinite alternate;
    animation: blink 600ms infinite alternate;
}
@-webkit-keyframes blink {
	from { opacity:1; }
	to { opacity:0; }
}
@-o-keyframes blink {
	from { opacity:1; }
	to { opacity:0; }
}
@-moz-keyframes blink {
	from { opacity:1; }
	to { opacity:0; }
}
@keyframes blink {
	from { opacity:1; }
	to { opacity:0; }
};


</style>

<script type="text/javascript" src="../js/display-fact.js"></script>



	<div class="display-area">

	<div class="did-you-know">
	HAVE A LAUGH
	</div>
	<div id="line"></div>
	<div id="factsHolder">
		<?php
			$json = file_get_contents("../json/jokes.json");
			$facts = json_decode($json, true);

		
			foreach ($facts as $value) {
				echo "<div class='fact'>$value</div>";
			}
			// echo $facts[$val];
		?>
	</div>
	</div>


<div id="random" onclick="generateRand()"><div class="blink"><h1>NEW JOKE</h1>(TAP HERE)</div></div>
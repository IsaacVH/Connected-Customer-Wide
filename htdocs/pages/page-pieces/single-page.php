<link href="../css/carousel-single-page.css" rel="stylesheet">
<script>
	/*
	$(function() {			
		$(".carousel").swipe({
		  	swipe:function(event, direction, distance, duration, fingerCount) {

			  	if(direction == "right"){
			  		moveLeft2();
			  	} else if(direction == "left") {
			  		moveRight2();
			  	}
			  	// alert("You swiped " + direction);
			    // $(this).text("You swiped " + direction );
		  	}
		});
	});
	*/
</script>
<div class="carousel">

	<div class="container-list">
		<div class="container" name="page1">
		<?php 
			$carouselpage = "../json/killing-time1.json";
			include("six-block-menu.php"); 
		?>
		</div>
	
</div>

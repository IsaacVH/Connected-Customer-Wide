

function setRelatedShow() {
	if($(".related-container").length > 0){ 
		$(".button-pull-up").css("display", "block"); 
	}
}

function show_related() {
	if($(".related-container").hasClass("show")) {
		$(".related-container").removeClass("show");
		$(".button-pull-up").removeClass("show");
	} else {
		$(".related-container").addClass("show");
		$(".button-pull-up").addClass("show");
	}
}

function backClicked() {
	var QueryString = function () {
	  // This function is anonymous, is executed immediately and 
	  // the return value is assigned to QueryString!
	  var query_string = {};
	  var query = window.location.search.substring(1);
	  var vars = query.split("&");
	  for (var i=0;i<vars.length;i++) {
	    var pair = vars[i].split("=");
	        // If first entry with this name
	    if (typeof query_string[pair[0]] === "undefined") {
	      query_string[pair[0]] = pair[1];
	        // If second entry with this name
	    } else if (typeof query_string[pair[0]] === "string") {
	      var arr = [ query_string[pair[0]], pair[1] ];
	      query_string[pair[0]] = arr;
	        // If third or later entry with this name
	    } else {
	      query_string[pair[0]].push(pair[1]);
	    }
	  } 
	    return query_string;
	} ();

	if(typeof QueryString.lp === 'undefined' || QueryString.lp == null || QueryString.lp == "") {
		if(window.location.pathname == "/htdocs/pages/connected-customer_main-page.php") {
			document.location.href = "/index.php";
		} else {
			document.location.href = "/htdocs/pages/connected-customer_main-page.php";
		}
	} else {
		document.location.href = decodeURI(QueryString.lp);
	}
	//history.go(-1);
}

function enter() {
	document.location.href="/htdocs/pages/connected-customer_main-page.php?lp=" + window.location.pathname;
}

// This function controls the clock in the header.
function set_clock() {
	/*	
	if($("#colon").text() == ":"){
		$("#colon").text(" ");
	} else {
		$("#colon").text(":");
	}
	*/

	var currentTime = new Date();

	var hour = currentTime.getHours();
	var min = currentTime.getMinutes();
	if(min < 10){
		min = "0" + min;
	}

	var am_pm = "";
	if((hour / 12) < 1) am_pm = "am"
	else am_pm = "pm"

	hour = hour % 12;

	if(hour == 0){
		hour = 12;
	}

	var date = currentTime.getDate();
	var month = currentTime.getMonth()+1;
	var year = currentTime.getFullYear()%100;

	$(".date").text(month+"/"+date+"/"+year);
	$("#hourmin").text(hour+":"+min);
	$("#am_pm").text(am_pm);

	var daynum = currentTime.getDay();
	var day = "";
	switch(daynum){

		case 0: day = "Sunday"; break;
		case 1: day = "Monday"; break;
		case 2: day = "Tuesday"; break;
		case 3: day = "Wednesday"; break;
		case 4: day = "Thursday"; break;
		case 5: day = "Friday"; break;
		case 6: day = "Saturday"; break;

	}

	$(".dayofweek").text(day);
}
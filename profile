<!DOCTYPE html>
<html>
<head>
<title>Commuter App</title>
<meta id="extViewportMeta" name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black" />

<link rel="stylesheet"
	href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
<link rel="stylesheet" href="css/main.css" />


<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script
	src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3&sensor=false&language=en"></script> 
<script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>

<script>
	$(document).ready(function() {
		
		//get time and apply a message
		var now = new Date();
		var hours = now.getHours();
		var msg;
		if (hours < 12)
			msg = "morning!";
		else if (hours < 18)
			msg = "afternoon!";
		else
			msg = "evening!";
		document.getElementById('messageBasedOnTime').innerHTML = msg;

		//No corners for the Menu button
		$('#button').buttonMarkup({
			corners : false
		});
		
		$('#Profile').click(function() {
			$('#pagePivot').load("profile.html", function(){
				$('#content').trigger('create');
				document.getElementById('messageBasedOnTime2').innerHTML = msg;
			});
			$("#mypanel").panel("close");
			$('#content').trigger('create');
		});
		
		$('#get').click(function() {
			$('#pagePivot').load("get.html", function(){
				$('#content').trigger('create');
				document.getElementById('messageBasedOnTime2').innerHTML = msg;
			});
			$("#mypanel").panel("close");
			$('#content').trigger('create');
		});
		
		$('#give').click(function() {
			$('#pagePivot').load("give.html", function(){
				$('#content').trigger('create');
				document.getElementById('messageBasedOnTime2').innerHTML = msg;
			});
			$("#mypanel").panel("close");
			$('#content').trigger('create');
		});
		
		$("#mypanel").panel("close");
		});
	});
</script>
</head>
<body id="body">

	<div data-role="page" id="content" data-add-back-btn="true">
		<div data-role="panel" id="mypanel" data-position="left" data-display="reveal">
			<h1>Menu</h1>
			<ul data-role="listview">
				<li data-icon="false" id="Profile"><a>Profile</a></li>
				<li data-icon="false" id="Get"><a>Get a ride</a></li>
				<li data-icon="false" id="Give"><a>Give a ride</a></li>
				<li data-icon="false" id="How"><a>How to's</a></li>

			</ul>
			<p></p>
			<a data-role="button" id="toff" data-icon="delete">Turn OFF Swipe</a>
		</div>
		<div data-role="header" id="tryHeader">
			<a href="#mypanel" id="button">Menu</a>
			<h1></h1>
		</div>
		<div data-role="content" id="pagePivot">
			<img src="images/libertymutual.png" alt="logo">
			<div style="float: right;">
				<a id="good">good</a>
				<p style="margin-top: -5px; margin-right: 0px;">
					<a id="messageBasedOnTime"></a>
				</p>
			</div>
          </div>           
		</div>	
	</div>	
	<script type='text/javascript'>
		$(document).on('pageinit', function() {
			$("#content").bind("swiperight", function() {
				$("#mypanel").panel("open");
			});
			$("#content").bind("swipeleft", function() {
				$("#mypanel").panel("close");
			});
			 
		});
	</script>
</body>
</html>
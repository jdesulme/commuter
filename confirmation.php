<!DOCTYPE html>
<html>
<head>
<title>Commuter App</title>
<meta id="extViewportMeta" name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black" />

<link rel="stylesheet" href="css/jquery.mobile.icons.min.css" />
<link rel="stylesheet" type="text/css" href="css/lm.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile.structure-1.4.0.min.css" /> 
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script> 
<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
<style>
a {
    text-decoration: none !important;
    margin: 0 auto;"WebContent/WEB-INF/lib"
}
</style>
</head>

<body id="body">
    <?php
		$to = "talhouar.loic@gmail.com";
		$subject = "You've got a ride!";
		$message = '
        <html>
        <body>
        <h1>Congrats, you have a ride!</h1>
        <p></p>
        <h1>Details:</h1>
        <p></p>
        <h3>Distance:</h3>within 5 miles 
        <h3>Smoking:</h3> NO 
        <h3>Phone Number:</h3> 4123036542
        </body></html>
        ';
		$from = "noreply@ridematch.com";
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:" . $from;
		mail($to,$subject,$message,$headers);
		?>
	<div style="text-align:center;">
		<h2>Ride Accepted</h2>

		<h4>The driver has been notified</h4>
		<h4>A confirmation email will arrive in your inbox</h4>
		
		
		<a href="tel:+4123036542" style="text-decoration:none"><button>Call Driver</button></a>
		<a href="mailto:jressey@gmail.com" style="text-decoration:none"><button>Email Driver</button></a>
		<p></p>
		<p></p>
		<p></p>
		<p></p>
		<p></p>
		<p></p>
		<a href="profile.html" rel="external" style="text-decoration:none"><button>Home</button></a>
	</div> 

	
</body>
</html>
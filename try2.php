<!DOCTYPE html>
<html>
<head>
<title>Commuter App</title>
<meta id="extViewportMeta" name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<link rel="stylesheet" href="css/lm.css" />
<link rel="stylesheet" href="css/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile.structure-1.4.0.min.css" /> 
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script> 
<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script> 
<script>
<?php
$con=mysqli_connect("locahost","root","123456","lolo");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 if (isset($_POST['submit'])) { 
mysqli_close($con);
?>



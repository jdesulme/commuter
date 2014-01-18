<?php
    echo "My first PHP script!";
	?> 
    <?php
    // Create connection
    $con=mysqli_connect("192.168.5.118:3306","root","root","commuter");

    // Check connection
    if (mysqli_connect_errno())
    { 
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	echo "worked";
    mysqli_close($con);
	?>
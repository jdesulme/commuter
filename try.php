        <?php
		$to = "talhouar.loic@gmail.com";
		$subject = "You've got a ride!";
		$message = "Congrats you got a ride, within 5 miles. Non smoking. Driver's phone number: 4123036542";
		$from = "RideMatch@gmail.com";
		$headers = "From:" . $from;
		mail($to,$subject,$message,$headers);
		echo "Mail Sent.";
		?>
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
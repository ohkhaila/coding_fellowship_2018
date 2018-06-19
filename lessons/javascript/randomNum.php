
<html>
	<head>
		<script src = '/lessons/javascript/jquery.js'></script>
		<link rel = "stylesheet" href ='/lessons/javascript/js.css'/>
	</head>
	<body>
			<form action '' method = 'post'>
				Min:
				<input type = 'text' name = 'min' id='min' />
				Max:
				<input type = 'text' name = 'max' id='max' />
				<input type = 'button' onclick= 'getRandomNumber()' name = 'randomNumberGenerator' value = 'submit'/>
			</form>
		<script type = 'text/javascript'>
			function getRandomNumber(){
				var min = $('#min').val();
		//	console.log(min); //allows to see in console
 				var max = $('#max').val();
			 var answer =	Math.floor(Math.random() *(max - min) + min); 								//Math.floor rounds up
		 $('#result').html(answer);
		 //select the p tag and insert html with the value of answer
		 //$ selects any html on the page
		 //.html allows you to change html after the page has been loaded

			}
</script>
<p id = 'result'> </p>

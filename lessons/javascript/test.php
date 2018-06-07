
<html>
	<head>
		<script src='/lessons/javascript/jquery.js'></script>
	</head>
	<body>
		<div class = 'fade' style = 'color: red;'>
			<script type = 'text/javascript'>

				function hideDiv(){
					$('.firstDiv').fadeOut();
				}

				function fadePage(){
					 $('body').hide().fadeIn('2000');
				}
				fadePage();
			</script>


			 <a href = '#' onclick = 'fadePage()'>Test Link</a>
			<!-- //# means don't treload the page -->
			<div class = 'firstDiv' style = 'background-color: blue'>
				 text tex
			</div>
			<div style = 'background-color: green'>
				text tex
			</div>
	</div>
</body>

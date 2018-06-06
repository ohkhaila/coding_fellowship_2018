<?php
//start the session
session_start();
 ?>

 <html>
 	<body>
		<?php
			$_SESSION['favColor'] = 'green';
			$_SESSION['favAnimal'] = 'dog';
			echo "Session variables are set.";

		 	?>

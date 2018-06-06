<?php
session_start();
 ?>

<html>
	<body>
		<?php
			echo "Her favorite color is " . $_SESSION['favColor'] . ".<br/>";
			echo "My favorite animal is " . $_SESSION['favAnimal'] . ".";

		 ?>

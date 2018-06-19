<?php
session_start();
?>
	<form action = '' name = 'noteLogin' method = 'post'>
			Email: 		<input type = 'text' name = 'email'/><br/>
			Password: <input type = 'text' name = 'password'/><br/>
								<input type = 'submit' name = 'submitNoteLogin' value = 'login'/>
	</form>

 <?php
 		$email = $_REQUEST['email'];
		$_SESSION['userId']= $email;
  ?>

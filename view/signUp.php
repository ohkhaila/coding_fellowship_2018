<?php
include('init.php');

if(isset($_REQUEST['submitSignUp'])){
	userSignUp($_REQUEST['firstName'], $_REQUEST['firstName'],$_REQUEST['email'], $_REQUEST['password']);
	echo "You're all signed up!";
}
 ?>
<h1> Yay A Sign up Page </h1>
<form action = '' method = 'post' name = 'login'>
	First Name: <input type = 'text' name = 'firstName'/><br/>
	Last Name: 	<input type = 'text' name = 'lastName'/><br/>
	Email: 		<input type = 'text' name = 'email'/><br/>
	Password: 	<input type = 'text' name = 'password'/><br/>
				<input type = 'submit' name = 'submitSignUp' value = 'Sign Up'/>
</form>

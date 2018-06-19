<?php
include('init.php');

if(isset($_REQUEST['submitLogin'])){
	$errors = array();
	if(!$_REQUEST['email']){
		$errors['email'] = "Email is required";
	}
	if(!$_REQUEST['password']){
		$errors['password'] = "Password is required";
	}
	if(sizeof($errors) == 0){
		echo verifyLogin($_REQUEST['email'], $_REQUEST['password']);
		exit;
	}
}
var_dump($_REQUEST);

 ?>

<form action = '' method = 'post' name = 'login'>
	Email: 		<input type = 'text' name = 'email'/><br/>
	Password: 	<input type = 'text' name = 'password'/><br/>
				<input type = 'submit' name = 'submitLogin' value = 'login'/>
</form>
<a href = '/view/signUp.php'>Sign Up Here!</a>

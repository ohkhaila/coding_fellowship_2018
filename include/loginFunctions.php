<?php
//start the session
session_start();

$email = isset($_REQUEST['email']);
$password = isset($_REQUEST['password']);

function getSpecificUser($email){
	return $user = dbQuery("
	SELECT *
	FROM users
	WHERE email = :email
	",
	array(
		"email" => $email
	)) -> fetch(); //only need the row that gets selected
}

function verifyLogin($email, $password){
	$user = getSpecificUser($email);
	$userEmail = $user['email'];
	$userPassword = $user['password'];
	$userID = $user['userID'];
	dbQuery("
		SELECT *
		FROM users
		WHERE email = :email
		AND password = :password
		",
		array(
			"email" => $email,
			"password" => $password,
 		)
	);
	if ($userEmail == $email && $userPassword == $password){
		$_SESSION['userID'] = $userID;
		echo "Login successful! <br />
		<a href = '/admin/index.php'> Click here to go to theadmin section! </a>";
	}
	else if($userEmail == $email && $userPassword != $password){
		echo "Failed to log in due to incorrect password!
		<a href = '/view/login.php'>Click here to try logging in again! </a>";
	}
	else if($userEmail != $email && $userPassword == $password){
		echo "Failed to log in due to incorrect email!
		<a href = '/view/login.php'>Click here to try logging in again! </a>";
	}
	else{
		echo "log in failed. <br />
		<a href = '/view/login.php'>Click here to try logging in again! </a>";
	}
}
function verifyUserIsLoggedIn(){
	$loggedIn  = false;
	if(isset($_SESSION['userID'])){
		$loggedIn = true;
	}
	if(!$loggedIn){
		header('Location:/view/login.php');
		exit;
	}
}

function userSignUp($firstName, $lastName, $email, $password){
	$firstName = $_REQUEST['firstName'];
	$lastName = $_REQUEST['lastName'];
	$email =  $_REQUEST['email'];
	$password = $_REQUEST['password'];
	dbQuery("
	INSERT INTO users (firstname, lastName, email, password)
	VALUES (:firstName, :lastName, :email, :password)",
	array(
		'firstname' => $firstName,
		'lastName' => $lastName,
		'email' => $email,
		'password' => $password
	)
);
	echo "You're all signed up! <br />
	<a href = '/admin/index.php'>Click here to go to the admin section </a>";
}
?>

<?php

?>

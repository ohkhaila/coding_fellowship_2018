<?php
//page that user wants access to
//page that says if the user is not logged in don't let them proceed..
//if they are logged in send the values to the database get the info and grant access
session_start();


/*echo $_SESSION['name']; */
//we have two pages because... you already know how to set a variable at the top og a page and call it at the bottom
//now anytime session_start is at the beginning of the page you can call session

if (isset($_SESSION['userID'])){
	die("You're not logged in. <a href='test1.php'>Go to the login page</a>");
}
//make a function called verify()... or something that does this ^
//if i put this if statement at the top I can assume that everything below this is private... only people with a userID(loggedin) can see it

echo "You're logged in as user ". $_SESSION['userID']."
<br/><br/>
<a href = 'test3.php'>log out</a>";

//how do you make a function that gets data out of a database?
//you need a parameter to take in what userID you wants//something like getNotes(pass userID)
//function thats getNotes($userID){
//pass into the query.... WHERE userID = :userID
//}
/*
facebook has a bunch of sessions with userID's and they do queries to pull the information that they want
*/

//logging out means removing the userID from the SESSION
 ?>

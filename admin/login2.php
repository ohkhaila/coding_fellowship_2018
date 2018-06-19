<?php
session_start();
echo $_SESSION;
echo "You are logged in as user". $_SESSION['userID']."
<br /> <br />
<a href = 'logout.php'>log out</a>";

?>

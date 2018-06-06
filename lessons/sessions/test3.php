<?php
session_start();
//logging someone out which means unsetting their session
unset($_SESSION['userID']);

 ?>

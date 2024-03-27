<?php
	include "config.php";
	session_start();
	if(isset($_SESSION['unm']))
	{
		header("location:home.php");
	}
?>
<h1> Welcome to geetanjali college </h1>
<a href="logout.php">Logout</a>
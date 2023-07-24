<?php

	include_once "includes/connection.php";
	include_once "includes/functions.php";
	include_once "includes/header.php";
	include_once "includes/menu.php";
		
	if(isset($_GET['id']))	
		include_once "includes/offer.php";
	else
		include_once "includes/home.php";
	include_once "includes/footer.php";
?>

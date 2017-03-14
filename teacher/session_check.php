<?php
	if(session_id() == '')
	{
		session_start();
	}
	if(empty($_SESSION['user_fname']) || empty($_SESSION['user_lname']) || $_SESSION['category']!='Teacher')
	{
		header("Location:../index.php");
	}
?>
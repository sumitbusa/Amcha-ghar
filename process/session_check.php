<?php
	if(!isset($_SESSION['user_name']) || !isset($_SESSION['user_id'])) 
	{
		header("Location:index.php");
	}
?>
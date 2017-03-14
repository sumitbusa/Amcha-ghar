<?php
session_start();
	include("config.php");
	
	$from = $_SESSION['user_id'];
	$name = $_POST['event_name'];
	$subject = $_POST['event_subject'];
	$details = $_POST['event_details'];
	$address = $_POST['event_place'];
	
	date_default_timezone_set('Asia/Calcutta');
	$date = date("Y-m-d");
	$time = date("H:i:s");
	
	$s_date = $_POST['start_date'];
	$S_time = $_POST['start_time'];
	$e_date = $_POST['end_time'];
	$e_time = $_POST['end_date'];
	if(isset($_POST['admin']))
	{
		$admin = $_POST['admin'];
	}
	else
	{
		$admin = "";
	}
	if(isset($_POST['hod']))
	{
		$hod = $_POST['hod'];
	}
	else
	{
		$hod = "";
	}
	if(isset($_POST['teacher']))
	{
		$teacher = $_POST['teacher'];
	}
	else
	{
		$teacher = "";
	}
	if(isset($_POST['it_student']))
	{
		$it_student = $_POST['it_student'];
	}
	else
	{
		$it_student = "";
	}
	if(isset($_POST['cse_student']))
	{
		$cse_student = $_POST['cse_student'];
	}
	else
	{
		$cse_student = "";
	}
	if(isset($_POST['upload_btn']))
	{
		$filename = $_FILES['upload_btn']['name'];
		$filesize = $_FILES['upload_btn']['size']/1024;
		$filetype = $_FILES['upload_btn']['type'];
		$filetemp = $_FILES['upload_btn']['tmp_name'];
		$typeallowed = array("image/jpg","image/jpeg","image/png");
   		
		if(!in_array($filetype,$typeallowed))
		{
			$_SESSION['alert']="file type not support...";
			//header("Location: ../hod/create_event.php");
		}
		else
		{
			$random = rand(111111,999999);
			$renamefilename = $random.$filename;
			$path = '../images/Event Pic';
    
			if(move_uploaded_file($filetemp,"$path/$renamefilename"))
			{
				$_SESSION['alert']="Profile Picture uploaded successfully...";
				//header("Location: ../hod/create_event.php");
			}
			else
			{
				$_SESSION['alert']="Profile Picture not  uploaded successfully due to some reason...";
				//header("Location: ../hod/create_event.php");
			}
		}
	}
	
	echo "$from";
?>
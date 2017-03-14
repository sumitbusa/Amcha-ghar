<?php
session_start();
include ("config.php");
$username = $_POST['email_id'];
$password = $_POST['password'];

if(empty($username))
{
    header("Location: ../re_enter.php");
//	$_SESSION['error']="Please enter your email address in the format someone@example.com.";
}
if(empty($password))
{
    header("Location: ../re_enter.php");
//	$_SESSION['error']="please enter your password.";
}

$query = "select * from login_table where email_id='$username' and password='$password'";
$query_run = mysql_query($query);
$array = mysql_fetch_array($query_run);

//print_r($array);

//echo $array['password'];

if(mysql_num_rows($query_run) == 0)
{
    echo "Invalid Usrname and Password..";
    header("location:../re_enter.php");
}
else
{
	
	$_SESSION['login_id'] = $array['no'];
	$_SESSION['email_id'] = $array['email_id'];
	$_SESSION['user_fname'] = $array['fname'];
	$_SESSION['user_lname'] = $array['lname'];
	$_SESSION['category'] = $array['category'];
	$_SESSION['user_id'] = $array['college_id'];
	if($array['signin_counter'] == NULL)
	{
		$signin_counter = 0;
	}
	else
	{
		$signin_counter = $array['signin_counter'];
	}
	
	date_default_timezone_set('Asia/Calcutta');
	$signin_date= date("Y-m-d");
	$signin_time= date("H:i:s");
	$signin_counter = $signin_counter+1;
	
	$query_update = "update login_table set signin_counter = '$signin_counter', last_signin_date = '$signin_date', last_signin_time = '$signin_time'  where email_id='$username'";
	$query_update_run = mysql_query($query_update);
	if($_SESSION['category']=='Admin')
	{
		
		header("Location: ../admin/admin_home.php");
	}
	else if($_SESSION['category']=="HOD")
	{
		header("Location: ../hod/hod_home.php");
	}
	else if($_SESSION['category']=="Teacher")
	{
		header("Location: ../teacher/teacher_home.php");
	}
	else if($_SESSION['category']=="Student")
	{
		header("Location:../student/student_home.php");
	}
	else
	{
		header("Loaction: ../index.php");
	}
	// echo "record found...";
}


?>
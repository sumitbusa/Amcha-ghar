<?php
session_start();
include ("config.php");
$email_id=$_SESSION['email_id'];
$password=$_POST['r_password'];
$c_password = $_POST['rc_password'];
if($password==$c_password)
{
	$query = "update login_table set password='$password' where email_id='$email_id'";
	$query_run = mysql_query($query);
	if(!empty($query_run))
	{  
		echo "<script type='text/javascript'>alert('Password Updated successfully....');</script>";
		session_destroy();
		header("Location: ../index.php");
	}
	else
	{
		echo "<script type='text/javascript'>alert('Password not Updated successfully due to some reason...');</script>";
		session_destroy();
		header("Location: ../index.php");
	}
}
else
{
	echo "<script type='text/javascript'>alert('password is does not match.');</script>";
    header("Location: ../reset_password.php");
}
?>

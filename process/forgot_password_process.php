<?php
session_start();
include ("config.php");
$user_email_id = $_POST['email_id'];
if(empty($user_email_id))
{
    header("Location: ../forgot_password.php");
}
$query = "select * from login_table where email_id='$user_email_id'";
$query_run = mysql_query($query);
$array = mysql_fetch_array($query_run);
//print_r($array);
//echo $array['password'];
if(mysql_num_rows($query_run) == 0)
{
	echo "record does not found...";
    $_SESSION['display_error']="Your Email ID does't Exist ,Please try again with different account";
	//echo  $_SESSION['display_error'];
   header("location:../forgot_password.php");
}
else
{
	$_SESSION['email_id']=$user_email_id;
	$_SESSION['confirmation_code']=rand(100000,999999);
	header("Location:email_sending_process.php");
}
?>

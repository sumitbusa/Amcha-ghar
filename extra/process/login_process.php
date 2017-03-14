<?php
session_start();
include ("config.php");
$username = $_POST['email_id'];
$password = $_POST['password'];

if(empty($username))
{
    header("Location: ../index.php");
}
if(empty($password))
{
    header("Location: ../index.php");
}

$query = "select * from student_info where email_id='$username' and password='$password'";
$query_run = mysql_query($query);
$array = mysql_fetch_array($query_run);

//print_r($array);

//echo $array['password'];

if(mysql_num_rows($query_run) == 0)
{
    echo "Invalid Usrname and Password..";
    header("location:../index.php");
}
else
{
    $_SESSION['email_id'] = $username;
    $_SESSION['user_id'] = $array['id'];
	$_SESSION['user_fname'] = $array['fname'];
	$_SESSION['user_lname'] = $array['lname'];
	
    header("Location: ../home.php");
    //echo "record found...";
}


?>
<?php
session_start();
include ("config.php");
$cnfrm_code = $_POST['confirmation_code'];
if(empty($cnfrm_code))
{
	$_SESSION['display_error']= "Please enter a confirmation code.";
    header("Location: ../confirmation_code.php");
}
else if($cnfrm_code==$_SESSION['confirmation_code'])
{
	header("location:../reset_password.php");
	$_SESSION['confirmation_code']=null;
}
else
{
	$_SESSION['display_error']="Invalid code, Please try again...";
    header("Location: ../confirmation_code.php");
}
?>

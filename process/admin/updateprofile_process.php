<?php
	session_start();
	include ("../config.php");
	
	$user_id = $_SESSION['login_id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email_id = $_POST['emailid'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$college_id = $_POST['college_id_no'];
	$gender = $_POST['gender'];
	$contactno = $_POST['contact_no'];
	$dob=$_POST['dob'];
	
	if(!ctype_alpha(fname))
	{
		$_SESSION['alert']="The fill first name does not consist of all letters";
		header("Location: ../student_signup_form.php");
	}
	if(!ctype_alpha(lname))
	{
		$_SESSION['alert']="The fill last name does not consist of all letters";
		header("Location: ../student_signup_form.php");
	}
	if (!ctype_alnum($password))
	{
		$_SESSION['alert']="The password fill does not consist of all letters or digits";
		header("Location: ../student_signup_form.php");
	}
	if (!ctype_alnum($cpassword))
	{
		$_SESSION['alert']="The re-enter password fill does not consist of all letters or digits";
		header("Location: ../student_signup_form.php");
	}
	if(!ctype_digit($college_id))
	{
		$_SESSION['alert']="The fill college id does not consist of all digits";
		header("Location: ../student_signup_form.php");
	}
	if(!ctype_digit($contactno))
	{
		$_SESSION['alert']="The fill contact no does not consist of all digits";
		header("Location: ../student_signup_form.php");
	}
	
	$fname = ucfirst($fname);
	$lname = ucfirst($lname);
	$gender = ucfirst($gender);
	$email_id = strtolower($email_id);
	
	if($password == $cpassword)
	{
		$_SESSION['alert']="Password does not match...";
		header("Location: ../student_signup_form.php");
	}
	
	$contactno="+91".$contactno;
	$query = "update login_table set email_id='$email_id',password='$password',college_id='$college_id',fname='$fname',lname='$lname',gender='$gender' ,dob='$dob',contact_no='$contactno' where no='$user_id'";
	$query_run = mysql_query($query);
	if(!empty($query_run))
	{
		$_SESSION['alert']="Profile Updated Successfully...";
	}
	else
	{
		$_SESSION['alert']="Profile not Updated successfully due to some resion...";
		echo "";
	}
	
	
	header("Location: ../../admin/edit_profile.php");
?>
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
	$contact_no = $_POST['contact_no'];
	$dob = $_POST['dob'];
	$department = $_POST['department'];
	$qualification = $_POST['qualification'];
	$designation = $_POST['designation'];
	$skills = $_POST['skills'];
	$address = $_POST['address'];
	
	if(!ctype_alpha(fname))
	{
		$_SESSION['alert']="The fill first name does not consist of all letters";
		header("Location: ../teacher/edit_profile.php.php");
	}
	if(!ctype_alpha(lname))
	{
		$_SESSION['alert']="The fill last name does not consist of all letters";
		header("Location: ../../teacher/edit_profile.php");
	}
	if (!ctype_alnum($password))
	{
		$_SESSION['alert']="The password fill does not consist of all letters or digits";
		header("Location: ../../teacher/edit_profile.php");
	}
	if (!ctype_alnum($cpassword))
	{
		$_SESSION['alert']="The re-enter password fill does not consist of all letters or digits";
		header("Location: ../../teacher/edit_profile.php");
	}
	if(!ctype_digit($college_id))
	{
		$_SESSION['alert']="The fill college id does not consist of all digits";
		header("Location: ../../teacher/edit_profile.php");
	}
	if(!ctype_digit($contactno))
	{
		$_SESSION['alert']="The fill contact no does not consist of all digits";
		header("Location: ../../teacher/edit_profile.php");
	}
	
	$fname = ucfirst($fname);
	$lname = ucfirst($lname);
	$gender = ucfirst($gender);
	$email_id = strtolower($email_id);
	
	if($password == $cpassword)
	{
		$_SESSION['alert']="Password does not match...";
		header("Location: ../../teacher/edit_profile.php");
	}
	
	$contact_no="+91".$contact_no;
	
	if(isset($_POST['file_name']))
	{
		$filename = $_FILES['uploadBtn']['name'];
		$filesize = $_FILES['uploadBtn']['size']/1024;
		$filetype = $_FILES['uploadBtn']['type'];
		$filetemp = $_FILES['uploadBtn']['tmp_name'];
		$typeallowed = array("image/jpg","image/jpeg","image/png");
   		
		if(!in_array($filetype,$typeallowed))
		{
			$_SESSION['alert']="file type not support...";
			header("Location: ../../teacher/edit_profile.php");
		}
		else
		{
			$random = rand(111111,999999);
			$renamefilename = $random.$filename;
			$path = '../../images/Profile Pic';
    
			if(move_uploaded_file($filetemp,"$path/$renamefilename"))
			{
				$_SESSION['alert']="Profile Picture uploaded successfully...";
				header("Location: ../../teacher/edit_profile.php");
			}
			else
			{
				$_SESSION['alert']="Profile Picture not  uploaded successfully due to some reason...";
				header("Location: ../../teacher/edit_profile.php");
			}
		}
	}
	$userid=$_SESSION['user_id'];
	$query_no="select no from teacher_info where college_id='$userid'";
	$query_no_run = mysql_query($query_no);
	
	$query_no_run_result=mysql_fetch_array($query_no_run);
	$userid = $query_no_run_result['no'];
	if(isset($filename))
	{
		$_SESSION['alert']="im in profile pic query";
		header("Location: ../../teacher/edit_profile.php");
		$query_info = "update teacher_info set college_id='$college_id',department='$department',address='$address',designation='$designation',qualification=$qualification,skills='$skills',profile_pic='$renamefilename' ,actual_pic='$filename' where no='$userid'";
		
	}
	else
	{
		$query_info = "update teacher_info set college_id='$college_id',department='$department',address='$address',designation='$designation',qualification='$qualification',skills='$skills'  where no='$userid'";
	}
	$query_info_run = mysql_query($query_info);
	
	$query = "update login_table set email_id='$email_id',password='$password',college_id='$college_id',fname='$fname',lname='$lname',gender='$gender' ,dob='$dob',contact_no='$contact_no' where no='$user_id'";
	$query_run = mysql_query($query);
	if(!empty($query_run) && !empty($query_info_run))
	{
		$_SESSION['alert']="Profile Updated Successfully...";
		
		$_SESSION['email_id'] = $email_id;
		$_SESSION['user_fname'] = $fname;
		$_SESSION['user_lname'] = $lname;
		$_SESSION['user_id'] = $college_id;
	}
	else
	{
		$msg=mysqli_error();
		$_SESSION['alert']="Profile not Updated successfully due to some reason...".$msg;
		header("Location: ../../teacher/edit_profile.php");
	}
	
	header("Location: ../../teacher/edit_profile.php");
?>
<?php 
	session_start();
	include ("config.php");
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email_id = $_POST['semail_id'];
	$password = $_POST['spassword'];
	$cpassword = $_POST['sc_password'];
	$college_id = $_POST['college_id_no'];
	$birthday = $_POST['birthday'];
	$birthmonth = $_POST['birthmonth'];
	$birthyear = $_POST['birthyear'];
	$gender = $_POST['gender'];
	$contactno = $_POST['contact_no'];
	$security_code = $_POST['security_code'];
	$terms = $_POST['terms'];
	$category = $_POST['category'];
	$dob=$birthyear."-".$birthmonth."-".$birthday;
	
	date_default_timezone_set('Asia/Calcutta');
	$signup_date= date("Y-m-d");
	$signup_time= date("H:i:s");

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
	if (!ctype_alnum($security_code))
	{
		$_SESSION['alert']="The security code fill does not consist of all letters or digits";
		header("Location: ../student_signup_form.php");
	} 
	
	$fname = ucfirst($fname);
	$lname = ucfirst($lname);
	$gender = ucfirst($gender);
	$category = ucfirst($category);
	$email_id = strtolower($email_id);
	
	if($password == $cpassword)
	{
		$_SESSION['alert']="Password does not match...";
		header("Location: ../student_signup_form.php");
	}
	if(!empty($category))
	{
		$category = $_POST['category'];  
	}
	
	$column_name = $category."_code";
	$query = "select ".$column_name." from signup_code";
    $query_run = mysql_query($query);
	$info = mysql_fetch_array($query_run);
	$security_no = $info[$column_name];
	
	if($category == "Student")
	{
		$prefix="573";
		$prefix_year=substr($college_id,0,2);
		$prefix_num=substr($college_id,2,2);
		$short_roll_no=substr($college_id,-3);
		$sapno=$prefix."".$prefix_num."".$prefix_year."0".$short_roll_no;
	}
	
	if($security_code == $security_no)
	{
		$contactno="+91".$contactno;
		$query = "insert into login_table (email_id,password,college_id,fname,lname,gender,category,dob,contact_no,signup_date,signup_time) values ('$email_id','$password','$college_id','$fname','$lname','$gender','$category','$dob','$contactno','$signup_date','$signup_time')";
		$query_run = mysql_query($query);
		
		if($category == "Student")
		{
			$query_info = "insert into student_info (college_id,sap_no,actual_pic,profile_pic) values ('$college_id','$sapno','avatar.png','avatar.png')";
		}
		else if($category == "HOD")
		{
			$query_info = "insert into hod_info (college_id,actual_pic,profile_pic) values ('$college_id','avatar.png','avatar.png')";
		}
		else if($category == "Teacher")
		{
			$query_info = "insert into teacher_info (college_id,actual_pic,profile_pic) values ('$college_id','avatar.png','avatar.png')";
		}
		$query_run_info = mysql_query($query_info);
		if(!empty($query_run) && !empty($query_run_info))
		{
			$_SESSION['alert']="Signup successfully....";
		}
		else
		{
			$delete_query = "delete from login_table where college_id='college_id'";
			$delete_query_run=mysql_query($delete_query);
		
			if($category == "Student")
			{
				$delete_query_info = "delete from student_info where college_id='college_id'";
			}
			else if($category == "HOD")
			{
				$delete_query_info = "delete from hod_info where college_id='college_id'";
			}
			else if($category == "Teacher")
			{
				$delete_query_info = "delete from teacher_info where college_id='college_id'";
			}
			$delete_query_info_run=mysql_query($delete_query_info);
			
			$_SESSION['alert']="You are not signup due to some reason";
			header("Location: ../student_signup_form.php");
		}
	}
	else
	{
		$_SESSION['alert']="Please enter valid security code...";
	}
	
	$_SESSION['alert']="Signup Successfully...";
	header("Location: ../student_signup_form.php"); 
?>
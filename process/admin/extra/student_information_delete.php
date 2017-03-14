<?php
	session_start();
	include("config.php")
	$submit_btn=$_POST['submit'];
	if($submit_btn == "delete")
	{
		if(!empty($_POST['check_box'])) 
		{
			$checked_count = count($_POST['check_box']);
			foreach($_POST['check_box'] as $selected) 
			{
				$college_id=$selected;
				include ("../process/config.php");

				$sql = "delete from  login_table where college_id='$college_id'";
				$sql_1 = "delete from student_info where college_id='$college_id'";
				mysql_query($sql);
				mysql_query($sql_1);
			}
			$_SESSION['alert']="Selected ".$checked_count." records are deleted..."
		}
		else
		{
			$_SESSION["Selected_Error"]=1;
			$_SESSION['alert']="Selected records are not deleted due to some reason..."
		}
		header("Location: ../../admin/student_information.php");
	}
	else
?>
<!DOCTYPE html>
<html>
<title>ToDoIst</title>
<head>
	<link rel="stylesheet" type="text/css" href="../css/home_header_layout.css" />
	<link rel="shortcut icon" href="../images/favicon.ico" /> 
	<script language="Javascript" type="text/javascript" src="../js/home_header.js"></script>
</head>
<body>
	<?php
	if(session_id() == '')
	{
		session_start();
	}
	include("../process/config.php");
	if(isset($_SESSION['category']))
	{
		if($_SESSION['category']=='Admin')
		{
			$a_link="admin_home.php";
		}
		else if($_SESSION['category']=="HOD")
		{
			$a_link="hod_home.php";
		}
		else if($_SESSION['category']=="Teacher")
		{
			$a_link="teacher_home.php";
		}
		else if($_SESSION['category']=="Student")
		{
			$a_link="student_home.php";
		}
	}
	if(isset($_SESSION['category']) && $_SESSION['category']!='Admin')
		{
			$college_id = $_SESSION['user_id'];
			if($_SESSION['category']=="HOD")
			{
				$query_info = "select profile_pic from hod_info where college_id = '$college_id'";
			}
			else if($_SESSION['category']=="Teacher")
			{
				$query_info = "select profile_pic from teacher_info where college_id = '$college_id'";
			}
			else if($_SESSION['category']=="Student")
			{
				$query_info = "select profile_pic from student_info where college_id = '$college_id'";
			}
			$query_run = mysql_query($query_info);
			$query_run_result = mysql_fetch_array($query_run);
		}
	?>
	<div id="home_header">
		<div id="home_heading" onclick="hide_signout()";>
			<div id="home_blank_left"></div>
			<a href="<?php echo $a_link; ?>">
				<div id="home_logo">
					<img src="../images/index/todoist-logo.png" height="99%" width="100%" align="left" />
				</div>
			</a>
			<div id="home_heading_name"><font color="#00A9FF">To</font>Do<font color="#00A9FF">Ist</font></div>
		</div>
		<div id="user_short_info"  onmouseover="showNavigationBlock()" onmouseout="showNavigationNone()" >
			<div id="user_prof_pic" onclick="gotosignout()">
				<?php
					if(isset($query_run_result['profile_pic']) && $_SESSION['category'] != "Admin" && $query_run_result['profile_pic'] != "")
					{
				?>
						<img src="../images/Profile Pic/<?php echo $query_run_result['profile_pic'] ?>" height="100%" width="100%" />
				<?php
					}
					else
					{
				?>
						<img src="../images/avatar.png" height="100%" width="100%" />
				<?php 
					}
				?>
			</div>
			<div id="user_prof_name" onclick="gotosignout()">
				<?php
					echo $_SESSION['user_fname']."  ".$_SESSION['user_lname']." (".$_SESSION['category'].")";
				?>
			</div>
			<div id="signoutOption">
				<div id="signout_prof_pic">
					<?php
						if(isset($query_run_result['profile_pic']) && $_SESSION['category'] != "Admin" && $query_run_result['profile_pic'] != "")
						{
					?>
						<img src="../images/Profile Pic/<?php echo $query_run_result['profile_pic'] ?>" height="100%" width="100%" />
					<?php
						}
						else
						{
					?>
					<img src="../images/avatar.png" height="100%" width="100%" />
					<?php 
						}
					?>
				</div>
				<div id="mouseClickOptionDiv">
					<a href="edit_profile.php" class="anch"><div id="editbtnDiv" onclick="gotosignout()">&nbsp&nbsp&nbsp&nbsp Edit Profile</div></a>
					<a href="../process/logout_process.php" class="anch"><div id="signoutbtnDiv" onclick="gotosignout()">&nbsp&nbsp&nbsp&nbsp Sign out</div></a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
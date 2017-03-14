<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/admin/admin_home_layout.css">
</head>
<body>
	<?php
		if(session_id() == "")
		{
			session_start();
		}
		include("../process/config.php");
		require("session_check.php");
		if(isset($_SESSION['category']))
		{
			$college_id = $_SESSION['user_id'];
			if($_SESSION['category']=='Admin')
			{
				$query_info="";
			}
			else if($_SESSION['category']=="HOD")
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
	<script>
		function hide_signout()
		{
			signoutOption.style.display="none";
		}
		function  toggle_function()
		{
			if (document.getElementById('slidebartoggleCHECK').checked)
			{
				toggleBTN.style.color="#fff";
				centeredmenu.style.left="0px";
				toggleBTN.style.left="175px";
				right_contents.style.margin="0px 0px 0px 200px";
				right_contents.style.transform="scale(1,1)";
			}
			else
			{
				toggleBTN.style.color="#333";
				centeredmenu.style.left="-200px";
				toggleBTN.style.left="10px";
				right_contents.style.margin="0px 0px 0px 0px";
				right_contents.style.transform="scale(1.1,1.1)";
			
			}
		}
	</script>
	<input type="checkbox" id="slidebartoggleCHECK"  class="slidebartoggleCHECK" onchange="toggle_function()" name="toggle_slidebar" checked />
	<label for="slidebartoggleCHECK" class="toggleBTN" id="toggleBTN" onmouseover="musOverBtn()" onmouseout="musOutBtn()"><b>☰</b></label>
	<div id="centeredmenu">
		<div id="profile_space">
			<center>
				<div id="Profile_div">
					<?php
						if(isset($query_run_result['profile_pic']))
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
				<div id="user_id_no">
					<?php echo $_SESSION['user_id'];?>
				</div>
			</center>
		</div>	
		<ul>
			<li><a href="student_home.php">Home</a></li>
			<li><a href="#">Profile</a>
				<ul>
					<li><a href="edit_profile.php">Edit Profile</a></li>
					<li><a href="view_profile.php">View Profile</a></li>
				</ul>
			</li>
			<li><a href="#">Events</a>
				<ul>
					<li><a href="#">Create Event</a></li>
					<li><a href="#">Edit Event</a></li>
					<li><a href="#">View Event</a></li>
					<li><a href="#">Delete Event</a></li>
				</ul>
			</li>
			<li><a href="#">Notifications</a></li>
			<li><a href="#">Feedack form</a></li>
			<li><a href="#">timetable</a></li>
			<li><a href="#">registration form</a></li>
		</ul>
	</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/admin/admin_home_layout.css">
</head>
<body>
	<?php
		require("session_check.php");
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
					<img src="../images/avatar.png" height="100%" width="100%" />
				</div>
				<div id="user_id_no">
					<?php echo $_SESSION['user_id'];?>
				</div>
			</center>
		</div>	
		<ul>
			<li><a href="admin_home.php">Home</a></li>
			<li><a href="#">Profile</a>
				<ul>
					<li><a href="edit_profile.php">Edit Profile</a></li>
					<li><a href="view_profile.php">View Profile</a></li>
				</ul>
			</li>
			<li><a href="#">Events</a>
				<ul>
					
					<li><a href="create_event.php">Create Event</a></li>
					<li><a href="create_personal_event.php">Personal Event</a></li>
					<li><a href="View_event.php">View Event</a></li>
					<li><a href="update_event.php">Edit Event</a></li>
					<li><a href="delete_event.php">Delete Event</a></li>
				</ul>
			</li>
			<li><a href="#">Notification</a></li>
			<li><a href="#">Information</a>
				<ul>
					<li><a href="hod_information.php">HOD Information</a></li>
					<li><a href="teacher_information.php">Teacher Information</a></li>
					<li><a href="student_information.php">Student Information</a></li>
				</ul>
			</li>
			<li><a href="#">Feedack form</a>
				<ul>
					<li><a href="#">Student form</a></li>
					<li><a href="#">Teacher form</a></li>
				</ul>
			</li>
			<li><a href="#">Signup code</a></li>
			<li><a href="#">timetable</a>
				<ul>
					<li><a href="#">It</a></li>
					<li><a href="#">CSE</a></li>
				</ul>
			</li>
			<li><a href="#">registration form</a></li>
		</ul>
	</div>
</body>
</html>



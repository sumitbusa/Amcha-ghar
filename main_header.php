<!DOCTYPE html>
<html>
	<title>ToDoIst - S.B.M. Polytechnic</title>
	<header>
		<link rel="stylesheet" type="text/css" href="css/header_layout.css" />
		<link rel="shortcut icon" href="images/favicon.ico" /> 
	</header>
	<body>
		<?php
			if(session_id() == '')
			{
				session_start();
			}
			if(isset($_SESSION['category']))
			{
				if($_SESSION['category']=='Admin')
				{
					header("Location: admin/admin_home.php");
				}
				else if($_SESSION['category']=="HOD")
				{
					header("Location: hod/hod_home.php");
				}
				else if($_SESSION['category']=="Teacher")
				{
					header("Location: teacher/teacher_home.php");
				}
				else if($_SESSION['category']=="Student")
				{
					header("Location: student/student_home.php");
				}
			}
		?>
		<form method="post" name="login_form" action="process/login_process.php">
			<div id="header">
				<div id="heading">
					<div id="blank_left"></div>
					<a href="index.php"><div id="logo"><img src="images/index/todoist-logo.png" height="100%" width="100%" align="left"></img></div></a>
					<div id="heading_name"><font color="#00A9FF">To</font>Do<font color="#00A9FF">Ist</font></div>
				</div>
				<div id="blank_middle"></div>
				<div id="login_part_name">
					<div id="email_id">Email ID:</div>
					<div id="email_id">
						<input type="email" name="email_id" placeholder="enter your email id" size="20" id="inputbg" tabindex="1" required />
					</div>
					
				</div>
				<div id="login_part_boxes">
					
					<div id="password">Password:</div>
					<div id="password">
						<input type="password" name="password"  placeholder="enter your password" id="inputbg" size="20" tabindex="2" required />
					</div>
					<div id="button_part" style="margin-top:1px;">
						<a href="forgot_password.php" align="center"  class="anchr" tabindex="4">Forgotten password?</a>
					</div>
				</div>	
				<div style="margin-top:1%; margin-left: 2%; float:left;">
						<input type="submit" class="lbutton"name="submit" value="Login" tabindex="3">
				</div>	
			</div>
		</form>
	</body>
</html>
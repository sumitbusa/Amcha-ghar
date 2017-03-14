<!DOCTYPE html>
<html>
	<head>
		<script language="Javascript" type="text/javascript" src="js/reset_password_validation.js"></script>
		<link rel="stylesheet" type="text/css" href="css/reset_password_layout.css">
	</head>
	<body>
		<?php
			session_start();
			if(empty($_SESSION['email_id']))
			{
				header("Location:forgot_password.php");
			}
			include("main_header.php"); 
			include("navigation.php");
		?>
	<form method="post" name="reset_password_form" action="process/reset_password_process.php">
		<div id="index_header">
		</div>
		<div id="reset_password_content">
			<div id="reset_password">
				<div style="padding: 15px 15px 15px 15px; z-index:1; color:#000; font-size:200%;">Choose a new password</div>
				<hr id="hrstyle"/>
				<div id="reset_password_body">
					<div style="height:23%; width:90%; font-size:14px; margin-top:1%; margin-left:5%;">
						<font color="black">A strong password is a combination of letters and punctuation marks. It must be at least 6 characters long.</font>
					</div>
					<div id="reset_password_text_box_body">
						<div id="password_text_box">
							<div style="float:left; height:100%; width:30%; color:black;">
								Create Password:
							</div>
							<div style="float:left; height:100%; width:70%;">
								<input type="password" id="r_password" name="r_password" placeholder="Enter your Password here" size="30" maxlength="30"  autofocus onkeypress="return alphanumeric(event,this);" required onkeyup="password_strength()" />
							</div>
						</div>
						<div style="height:25%; margin-left:35%; margin-top:5px; width:60%;  float:left; font-size:15px;" id="error_password"></div>
						<div id="password_text_box">
							<div style="float:left; height:100%; width:30%; color:black;">
								Re-enter Password:
							</div>
							<div style="float:left; height:100%; width:70%;">
								<input type="password" id="rc_password" name="rc_password" placeholder="Enter Confirm Password here" size="30" maxlength="30" onkeyup="passwordmatch()" onkeypress="return alphanumeric(event,this);" required />
							</div>
						</div>
						<div style="height:25%; margin-left:35%; margin-top:5px; width:60%;  float:left; font-size:15px;" id="reerror_repassword"></div>
					</div>					
				</div>
				<div id="bottom_reset_password">
					<div style="margin-right:5%; padding:2px;; height:80%; width:35%; float:right;">
						<input type="submit" class="mybutton" value=" Continue " />
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<a href="index.php" ><input type="button" class="mybutton" value=" Cancel "></a>
					</div>
				</div>
			</div>
		</div>
	</form>
	<?php
		include("IndexFooter.php");
	?>
</body>
</html>
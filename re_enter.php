
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/reenter_password_layout.css">
	</head>
	<body>
		<?php
			include("main_header.php"); 
			include("navigation.php");
		?>
		<form method="post" name="reset_password_form" action="process/login_process.php">
		<div id="index_header">
		</div>
		<div id="reenter_password_content">
			<div id="re_enter_password">
				<div style="padding: 15px 15px 15px 15px; z-index:1; color:#000; font-size:200%;">Re enter Password and Email ID</div>
				<hr id="hrstyle"/>
				<div id="reenter_password_body">
					<div style="height:45px; width:85%; font-size:14px; margin-left:5%; margin-top:10px; margin-bottom:40px;">
						<div style="height:100%; color:red; width:100%; padding-left:40px; padding-top:15px; background-color:#ffebe8; border:1px solid #dd3c10;">
							<b>The password and user name you entered is incorrect. 
							</br> Please try again.</b>
						</div>
					</div>
					<div id="reenter_password_text_box_body">
						<div id="password_text_box">
							<div style="float:left; height:100%; width:30%; color:black;">
								Email ID:
							</div>
							<div style="float:left; height:100%; width:70%;">
								<input type="email" id="reenter_email_id" name="email_id" placeholder="Enter your Password here" size="30" maxlength="30"  required	autofocus">
							</div>
						</div>
						<div style="height:25px; width:100%;  float:left;"></div>
						<div id="password_text_box">
							<div style="float:left; height:100%; width:30%; color:black;">
								Password:
							</div>
							<div style="float:left; height:100%; width:70%;">
								<input type="password" id="reenter_password" name="password" placeholder="Enter Confirm Password here" size="30" maxlength="30" required">
							</div>
						</div>
						<div style="height:10%; width:100%; float:left;"></div>
					</div>					
				</div>
				<div id="bottom_reenter_password">
					<div style="margin-right:5%; padding:2px;; height:80%; width:35%; float:right;">
						<input type="submit" class="mybutton" value="  Login  " />
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<a href="index.php" ><input type="button" class="mybutton" value=" Signup "></a>
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
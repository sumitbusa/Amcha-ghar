<!DOCTYPE html>
<html>
	<title>Forgot Password</title>
	<head>
		<link rel="stylesheet" type="text/css" href="css/forgot_password_layout.css">
	</head>
	<body>
		<?php
			session_start();
			include("main_header.php"); 
			include("navigation.php");
		?>
		<form method="post" name="forgot_password_form" action="process/forgot_password_process.php">				
			<div id="index_header">
			</div>
			<div id="forgot_password_content">
				<div id="find_account">
					<div style="padding: 15px 15px 15px 15px; z-index:1; color:#000; font-size:200%;">Find your Account</div>
					<hr id="hrstyle">
					<div id="forgot_password_body">
						<?php
							if(!empty($_SESSION['display_error']))
							{  
						?>
								<div style="height:40%; width:100%; font-size:14px;">
									<div style="height:80%; width:85%; padding-left:15px; background-color:#ffebe8; border:1px solid #dd3c10; margin-bottom:30px; margin-left:43px;">
										<font size="5px" color="red">No Result find</font><br>
										<font color="red">
											<?php 
												echo $_SESSION['display_error']."...";
											?>
										</font>
									</div>
								</div>
						<?php
								$_SESSION['display_error']=null;
							}
							else
							{
						?>
								<div style="height:40px; width:100%"></div>
						<?php
							}
						?>
						<div id="mail_icon">
							<div style=" float:left; margin-left:18%; height:100%; background-color:#0f0; border-radius:10px; width:7%;">
								<img src="images/index/11.png" height="100%" width="100%" />
							</div>
							<div id="text_box">
								<input type="email" id="inputforgot" name="email_id" placeholder="Enter your Email ID here" maxlength="30" autofocus required>
							</div>
						</div>
					</div>
					<div id="bottom_forgot">
						<div style="margin-right:5%; padding:5px; height:100%; width:35%; float:right;">
							<input type="submit" class="mybutton" value=" Search " />
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
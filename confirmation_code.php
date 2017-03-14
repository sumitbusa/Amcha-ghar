<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/confirmation_code_layout.css">
	</head>
	<body>
		<?php
			session_start();
				if(empty($_SESSION['confirmation_code']))
				{
					header("Location:forgot_password.php");
				}
			include("main_header.php"); 
			include("navigation.php")
		?>
		<form method="post" name="confirmation_code_form" action="process/confirmation_code_process.php">
		<div id="index_header">
		</div>
		<div id="confirmation_code_content">
			<div id="confirmation_code">
				<div style="padding: 15px 15px 15px 15px; z-index:1; color:#000; font-size:200%;">Check your Email Account</div>
				<hr id="hrstyle">
				<div id="confirmation_code_body">
					<?php
						if(!empty($_SESSION['display_error']))
						{   
					?>
					<div style="height:23px; color:red; width:90%; padding:3px 15px 3px 15px; background-color:#ffebe8; border:1px solid #dd3c10; margin-left:2.7%;">
						<?php 
							echo $_SESSION['display_error']."...";
							$_SESSION['display_error']=null;
						?>
					</div>
					<?php
						}
						else
						{
					?>
						<div style=" height:15px; width:100%;"></div>
					<?php
						}
					?>
					<div style="height:23%; width:90%; font-size:14px; margin-top:1%; margin-left:5%;">
						<p><font color="black" size="2.5px">Check your email account - we sent you a email with a six-digit confirmation code. Enter it below to continue to reset your password.</font></p>
					</div>
					<div id="confirmation_code_text_box_body">
						<div id="confirmation_code_text_box">
							<input type="text" id="input_confirmation_code" name="confirmation_code" placeholder="# # # # # #" size="50" maxlength="6" autofocus required>
						</div>
						<div style="float:left; height:100%; font-size:22px; width:55%; margin-left:4%; ">
							<p><font color="white" size="4px">Enter your Confirmation code here.</font>	</p>
						</div>	
					</div>					
				</div>
				<div id="bottom_confirmation_code">
					<div style="margin-right:5%; padding:3px; height:80%; width:35%; float:right;">
						<input type="submit" class="mybutton" value=" continue " />
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
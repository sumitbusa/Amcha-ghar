<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/admin/admin_home_layout.css" />
	<link rel="stylesheet" type="text/css" href="../css/admin/edit_profile_layout.css" />
	<title>ToDoIst - View Profile</title>
	<style>
		#content td
		{
			padding:10px 0px;
		}
	</style>
</head>
<body>
	<?php
		require("session_check.php");
		include("../home_header.php");
	?>
	<div id="index_header"></div>
	<div id="home_body" onclick="hide_signout();">
		<?php
			include("side_bar.php");
		?>
		<center>
			<div id="right_contents">
				<div id="right_middle_content" >
					<?php
						include ("../process/config.php");
						$login_id=$_SESSION['login_id'];
						$query = "select * from login_table where no=$login_id" ;
						$query_run = mysql_query($query);
						$query_run_result = mysql_fetch_array($query_run);
					?>
					<div id="middle_content_header">
						View Profile
					</div>
					<hr>
					<form method="post" name="updating_form" action="process/updateprofile_process.php" enctype="multipart/form-data">
						<div id="content" align="left" style="font-size:20px;">
							<table border="0">
								<tr >
									<td><lable class="view_profile_lable">First Name</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td><?php echo $query_run_result['fname'];?></td>
								</tr>
								<tr>
									<td><lable class="view_profile_lable">Last Name</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td><?php echo $query_run_result['lname'];?></td>
								</tr>
								<tr>
									<td><lable class="view_profile_lable">Email ID</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td><?php echo $query_run_result['email_id'];?></td>
								</tr>
								<tr>
									<td><lable class="view_profile_lable">College ID No</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td><?php echo $query_run_result['college_id'];?></td>
								</tr>
								<tr>
									<td><lable class="view_profile_lable">Gender</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td><?php echo $query_run_result['gender'];?></td>
									</td>
								</tr>
								<tr>
									<td><lable class="view_profile_lable">Contact No</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td><?php echo $query_run_result['contact_no'];?></td>
								</tr>
								<tr>
									<td><lable class="view_profile_lable">D-O-B</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
										<?php
											$dob = strtotime($query_run_result['dob']);
											$day   = date('d',$dob);
											$month = date('m',$dob);
											$year  = date('Y',$dob);
											$dob = $day."-".$month."-".$year;
										?>
									<td><?php echo $dob;?></td>
								</tr>
								<input type="hidden" name="userid" id="userid" value="<?php echo $userid;?>">
							</table>
						</div>
					</form>
				</div>
				<div id="footer_content">
					<div id="footer_part">
						<div id="footer_subcontent"><a href="about.php"  align="left" class="fanchr">About</a></div>
						<div id="footer_subcontent"><a href="terms.php"  align="center" class="fanchr">Terms</a></div>
						<div id="footer_subcontent"><a href="privacy.php"  align="center" class="fanchr">Privacy</a></div>
						<div id="footer_subcontent"><a href="feedback.php"  align="center" class="fanchr">Feedback</a></div>
						<div id="footer_subcontent"><a href="help.php"  align="center" class="fanchr">Help</a></div>
					</div>
					<div id="footer_bottom_part">&#169;2015 ToDoIst</div>
				</div>
			</div>
		</center>
	</div>
</body>
</html>
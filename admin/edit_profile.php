<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/admin/admin_home_layout.css" />
	<link rel="stylesheet" type="text/css" href="../css/admin/edit_profile_layout.css" />
	<script language="Javascript" type="text/javascript" src="../js/updating_form_validation.js"></script>
	<title>ToDoIst - Update Profile</title>
</head>
<body>
	<?php
		session_start();
		require("session_check.php");
		include("../home_header.php");
		include("side_bar.php");
	
		if(isset($_SESSION['alert']))
		{	
			$message=$_SESSION['alert'];
	?>
		<script>
			var msg= "<?php echo $message ?>";
			alert(msg);
		</script>
	<?php
		}
		$_SESSION['alert']=null;
	?>
	<div id="index_header"></div>
	<div id="home_body" onclick="hide_signout();">
		<center>
			<div id="right_contents">
				<div id="right_middle_content">
					<?php
						include ("../process/config.php");
						$login_id=$_SESSION['login_id'];
						$query = "select * from login_table where no=$login_id" ;
						$query_run = mysql_query($query);
						$query_run_result = mysql_fetch_array($query_run);
						$cntc_no=$query_run_result['contact_no'];
						$cntc_no=substr($cntc_no,3);
					?>
					<div id="middle_content_header">
						Update Profile
					</div>
					<hr>
					<form method="post" name="updating_form" action="../process/admin/updateprofile_process.php" onsubmit="return onformsubmit();">
						<div id="content" align="left">
							<table border="0">
								<tr >
									<td><lable class="edit_profile_lable">First Name</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td>
										<input type="text" name="fname" id="fname" value="<?php echo $query_run_result['fname'];?>" onkeypress="return onlyAlphabets(event,this);" maxlength="20" autofocus required />
									</td>
									<td></td>
								</tr>
								<tr>
									<td><lable class="edit_profile_lable">Last Name</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td>
										<input type="text" name="lname" id="lname" value="<?php echo $query_run_result['lname'];?>" required onkeypress="return onlyAlphabets(event,this);"  maxlength="20"  />
									</td>
									<td></td>
								</tr>
								<tr>
									<td><lable class="edit_profile_lable">Email ID</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td>
										<input type="email" name="emailid" id="emailid" value="<?php echo $query_run_result['email_id']; ?>" placeholder="someone@example.com"  maxlength="30"  required />
									</td>
									<td></td>
								</tr>
								<tr>
									<td><lable class="edit_profile_lable">Password</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td>
										<input type="password" name="password" id="password" value="<?php echo $query_run_result['password'];?>" onkeypress="return alphanumeric(event,this);" required onkeyup="password_strength()" maxlength="30" required />
									</td>
									<td>
										<div style="float:right; width:300px; padding:3px 10px 3px 10px; font-size:17px; height:auto;" id="error_password"></div>
									</td>
								</tr>
								<tr>
									<td><lable class="edit_profile_lable">Confirm Password</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td>
										<input type="password" name="cpassword" id="cpassword" value="<?php echo $query_run_result['password'];?>" onkeypress="return alphanumeric(event,this);" required onkeyup="return passwordmatch()"  maxlength="30" required />
									</td>
									<td>
										<div style="float:right; width:300px; padding:6px 5px 6px 5px; font-size:17px; height:auto;" id="error_repassword"></div>
									</td>
								</tr>
								<tr>
									<td><lable class="edit_profile_lable">college ID no</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td>
										<input type="text" name="college_id_no" id="college_id_no" value="<?php echo $query_run_result['college_id'];?>"    onkeypress="return onlyNos(event,this);" onkeyup="college_id_validate()" placeholder="1234567" maxlength="7" required />
									</td>
									<td>
										<div style="float:right; width:300px; padding:6px 5px 6px 5px; font-size:17px; height:auto;" id="error_idno"></div>
									</td>
								</tr>
								<tr>
									<td><lable class="edit_profile_lable">Gender</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td>
										<select id="gender" name="gender"required />
											<option value="">Select..</option>
											<option value="Male" <?php if($query_run_result['gender']=="Male"){echo "selected";} ?> >Male</option>
											<option value="Female" <?php if($query_run_result['gender']=="Female"){echo "selected";} ?> >Female</option>
											<option value="Undefined" <?php if($query_run_result['gender']=="Unedifned"){echo "selected";} ?> >Not specified</option>
										</select>
									</td>
									<td></td>
								</tr>
								<tr>
									<td><lable class="edit_profile_lable">Contact No</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td>
										<input type="text" name="contact_no" id="contact_no" value="<?php echo $cntc_no;?>" onkeypress="return onlyNos(event,this);" onkeyup="contactno_validate()" placeholder="1234567890" maxlength="10" required /></td>
									<td>
										<div style="float:right; width:300px; padding:6px 5px 6px 5px; font-size:17px; height:auto;" id="error_contactno"></div>
									</td>
								</tr>
								<tr>
									<td><lable class="edit_profile_lable">D-O-B</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td><input type="date" name="dob" id="dob" value="<?php echo $query_run_result['dob'];?>" placeholder="YYYY-MM-DD" required /></td>
								</tr>
								</tr>
								<tr>
									<td colspan="3" align="center">
										<input type="submit" id="edit_profile_btn" value="Update" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="reset" id="edit_profile_btn" value="  reset  " />
									</td>
									<input type="hidden" name="userid" id="userid" value="<?php echo $query_run_result['fname'];?>">
								</tr>
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
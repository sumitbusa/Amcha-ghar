<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ToDoIst - Update Profile</title>
	<link rel="stylesheet" type="text/css" href="../css/hod/hod_home_layout.css" />
	<link rel="stylesheet" type="text/css" href="../css/hod/hod_profile_layout.css" />
	<script language="Javascript" type="text/javascript" src="../js/updating_form_validation.js"></script>
	<script>
		function uploadBtnToText(e) 
		{			
			var a=updating_form.uploadBtn.value;
			document.getElementById("uploadFile").value =a;
		}
	</script>
</head>
<body>
	<?php
		if(session_id() ==  "")
		{
			session_start();
		}
		
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
						$college_id=$_SESSION['user_id'];
						
						$query = "select * from login_table where college_id='$college_id'";
						$query_run = mysql_query($query);
						$query_run_result = mysql_fetch_array($query_run);
						
						$cntc_no=$query_run_result['contact_no'];
						$cntc_no=substr($cntc_no,3);
								
						$query_info = "select * from hod_info where college_id = '$college_id'";
						$query_info_run = mysql_query($query_info);
						$query_info_run_result = mysql_fetch_array($query_info_run);
					?>
					<div id="middle_content_header">
						Update Profile
					</div>
					<hr>
					<form method="post" name="updating_form" action="../process/hod/updateprofile_process.php" onsubmit="return onformsubmit();">
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
										<input type="email" name="emailid" id="emailid" value="<?php echo $query_run_result['email_id']; ?>"  maxlength="30"  required />
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
									<td><lable class="edit_profile_lable">College ID no</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td>
										<input type="text" name="college_id_no" id="college_id_no" value="<?php echo $query_run_result['college_id'];?>"    onkeypress="return onlyNos(event,this);" onkeyup="college_id_validate()" maxlength="7" required />
									</td>
									<td>
										<div style="float:right; width:300px; padding:6px 5px 6px 5px; font-size:17px; height:auto;" id="error_idno"></div>
									</td>
								</tr>
								<tr>
									<td><lable class="edit_profile_lable">Gender</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td>
										<select id="gender" name="gender" required />
											<option value="">Select..</option>
											<option value="Male" <?php if($query_run_result['gender']=="Male"){echo "selected";} ?> >Male</option>
											<option value="Female" <?php if($query_run_result['gender']=="Female"){echo "selected";} ?> >Female</option>
											<option value="Undefined" <?php if($query_run_result['gender']=="Unedifned"){echo "selected";} ?> >Not specified</option>
										</select>
									</td>
									<td></td>
								</tr>
								<tr>
									<td><lable class="edit_profile_lable">D-O-B</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td><input type="date" name="dob" id="dob" value="<?php echo $query_run_result['dob'];?>" required /></td>
								</tr>
								<tr>
									<td><lable class="edit_profile_lable">Contact No</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td>
										<input type="text" name="contact_no" id="contact_no" value="<?php echo $cntc_no;?>" onkeypress="return onlyNos(event,this);" onkeyup="contactno_validate()" maxlength="10" required /></td>
									<td>
										<div style="float:right; width:300px; padding:6px 5px 6px 5px; font-size:17px; height:auto;" id="error_contactno"></div>
									</td>
								</tr>
								<tr>
									<td><lable class="edit_profile_lable">Department</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td>
										<select id="department" name="department" required />
											<option value="">Select..</option>
											<option value="IT" <?php if($query_info_run_result['department'] == "IT"){echo "selected";} ?> >IT</option>
											<option value="CSE" <?php if( $query_info_run_result['department'] == "CSE"){echo "selected";} ?> >CSE</option>
										</select>
									</td>
									<td></td>
								</tr>	
								<tr>
									<td><lable class="edit_profile_lable">Qualification</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td>
										<select id="qualification" name="qualification" required />
											<option value="">Select..</option>
											<option value="PHD" <?php if($query_info_run_result['qualification'] == "PHD"){echo "selected";} ?> >PHD</option>
											<option value="MTech" <?php if( $query_info_run_result['qualification'] == "MTech"){echo "selected";} ?> >MTech</option>
											<option value="ME" <?php if( $query_info_run_result['qualification'] == "ME"){echo "selected";} ?> >ME</option>
											<option value="BTech" <?php if( $query_info_run_result['qualification'] == "BTech"){echo "selected";} ?> >BTech</option>
											<option value="BE" <?php if($query_info_run_result['qualification'] == "BE"){echo "selected";} ?> >BE</option>
										</select>
									</td>
									<td></td>
								</tr>
								<tr>
									<td><lable class="edit_profile_lable">Designation</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td>
										<input type="text" name="designation" id="designation" value="<?php echo $query_info_run_result['designation'];?>" maxlength="100" required /></td>
									<td></td>
								</tr>
								<tr>
									<td><lable class="edit_profile_lable">Skills</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td>
										<input type="text" name="skills" id="skills" value="<?php echo $query_info_run_result['skills'];?>" maxlength="100" required /></td>
									<td></td>
								</tr>
								<tr>
									<td><lable class="edit_profile_lable">Address</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td rowspan="2">
										<textarea name="address" id="address" required value="" maxlength="150"><?php echo $query_info_run_result['address'];?></textarea>
									</td>
									<td></td>
								</tr>
								<tr>
									<td><br><br><br><br></td>
									<td></td>
								</tr>
								<tr>
									<td><lable class="edit_profile_lable">Profile Pic</lable></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td rowspan="2" >
										<?php 
											if(isset($query_info_run_result['profile_pic']))
											{
										?>
												<img src="../images/Profile Pic/<?php echo $query_info_run_result['profile_pic']; ?>" height="50px" width="50px" />		
										<?php 
											}
											else
											{
										?>
												<img src="../images/avatar.png" height="50px" width="50px" />
										<?php	
											}
										?>
									</td>
								</tr>	
								<tr>
										<td><br></td>
								</tr>
								<tr>
									<td>New Profie Pic</td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td>
										<div style="float:left; height:100%">
											<div style="float:left">
												<input id="uploadFile" placeholder="Choose File" name="file_name" disabled="disabled" />
											</div>
											<div class="fileUpload" style="float:left">
												<span>Upload</span>
												<input type="file" class="upload" id="uploadBtn" name="uploadBtn" onchange="uploadBtnToText(this)"/>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="3" align="center">
										<input type="submit" id="edit_profile_btn" value="Update" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="reset" id="edit_profile_btn" value="  reset  " />
									</td>
								</tr>
								<input type="hidden" name="userid" id="userid" value="<?php echo $userid;?>" />
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
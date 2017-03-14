<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/admin/admin_home_layout.css" />
	<title>ToDoIst - Create Event</title>
	<style>
		#content td
		{
			padding:2px 2px;
		}
		#event_name,#event_subject,#event_details,#event_place
		{
			font-size:17px;
			border: solid 1px #dcdcdc;
			color:black;
			font-weight:lighter;
			padding: 3px 10px 3px 10px;
			width:500px;
			background-color:white;
		}
		#start_date,#start_time,#end_time,#end_date
		{
			font-size:17px;
			border: solid 1px #dcdcdc;
			color:black;
			font-weight:lighter;
			padding: 3px 2px 3px 2px;
			background-color:white;
		}
		#cse_student,#it_student,#teacher,#hod
		{
			font-size:17px;
			border: solid 1px #dcdcdc;
			color:black;
			font-weight:lighter;
			padding: 10px 2px 3px 10px;
			background-color:white;
		}
		#event_details
		{
			max-width:500px;
			height:70px;
			padding: 3px 10px 3px 10px;
			font-size:17px;
			border: solid 1px #dcdcdc;
			color:black;
			font-weight:lighter;
			background-color:white;
			min-width:300px;
			min-height:200px;
		}
		#event_btn
		{
			background-color:#2E9AFE;
			border-radius:0px;
			font-size: 20px;
			padding: 3px 10px 3px 10px;
			box-shadow: 1px 1px 2px #4d4d4d;
			border:1px groove #2E9AFE;   
			cursor:pointer
		}
		#event_btn:hover
		{
			
			border-radius:2px;
		}
		#event_btn:active
		{
			background-color:#0080FF;
			border-radius:2px;
			
			position:relative;
		}
		#upload_btn
		{
			border-radius:0px;
			font-size: 20px;
			padding: 3px 10px 3px 0px;  
			cursor:pointer
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
						Create an Event
					</div>
					<hr>
					<div id="content" align="left" style="font-size:20px;">	
						<form method="post" action="../process/create_event_process.php" name="create_event">
						<table>
							<tr>
								<td>Event Pic</td>
								<td><input type="file" id="upload_btn" name="event_profile"/></td>
							</tr>
							<tr>
								<td>Name</td>
								<td><input type="text" id="event_name" name="event_name" maxlength="45" required /></td>
							</tr>
							<tr>
								<td>Short Detail</td>
								<td><input type="text" id="event_subject" name="event_subject" maxlength="80" required /></td>
							</tr>
							<tr>
								<td>Details<br><br><br><br><br><br><br></td>
								<td><textarea id="event_details" name="event_details" maxlength="450" required></textarea></td>
							</tr>
							<tr>
								<td>Where</td>
								<td><input type="text" id="event_place" name="event_place" maxlength="100" required /></td>
							</tr>
							<tr>
								<td>When </td>
								<td>
									<input type="date" id="start_date" name="start_date" placeholder="YYYY-MM-DD" required /> 
									<input type="time" id="start_time" name="start_time" placeholder="HH:MM:SS" required /> 
									To 
									<input type="time" id="end_time" name="end_time" placeholder="HH:MM:SS" required /> 
									<input type="date" id="end_date" name="end_date" placeholder="YYYY-MM-DD" required />
								</td>
							</tr>
							<tr>
								<td>Who</td>
								<td><select id="hod" name="hod">
										<option value="" >HOD</option>
										<option value="all">all</option>
										<option value="IT">IT</option>
										<option value="CSE">CSE</option>
									</select>
									<select id="teacher" name="teacher">
										<option value="">Teacher</option>
										<option value="all">all</option>
										<option value="IT">IT</option>
										<option value="CSE">CSE</option>
									</select>
									<select  name="it_student" id="it_student">
										<option value="">IT Student</option>
										<option value="all">all</option>
										<option value="I">I</option>
										<option value="II">II</option>
										<option value="III">III</option>
									</select>
									<select name="cse_student" id="cse_student">
										<option value="">CSE Student</option>
										<option value="all">all</option>
										<option value="I">I</option>
										<option value="II">II</option>
										<option value="III">III</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><br><br></td>
							</tr>
							<tr>
								<td></td>
								<td>
									<input type="submit" name="submit" id="event_btn" value="Create Event"/>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="reset" name="reset" id="event_btn" value="Reset" onclick="return confirm('Do you want to reset all filled');"/>
								</td>
							</tr>
						</table>
						</form>
					</div>
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
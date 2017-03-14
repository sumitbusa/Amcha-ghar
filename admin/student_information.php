<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/admin/admin_home_layout.css" />
	<title>ToDoIst - View Student Information</title>
	<style>
		#content td
		{
			padding:10px 0px;
		}
	</style>
	<script type="text/javascript">
		function altRows(id)
		{
			if(document.getElementsByTagName)
			{

				var table = document.getElementById(id);
				var rows = table.getElementsByTagName("tr");

				for(i = 0; i < rows.length; i++)
				{
					if(i % 2 == 0)
					{
						rows[i].className = "evenRowColor";
					}
					else
					{
						rows[i].className = "oddRowColor";
					}
				}
			}
		}
		window.onload=function()
		{
			altRows('alternatecolor');
		}
		function confirmvalid()
		{
			return confirm('Are you sure want to delete record...!');	
		}
		
	</script>
	<style type="text/css">
		table.myTableClass 
		{
			font-family: verdana,arial,sans-serif;
			font-size:15px;
			color:#333333;
			border-width: 12px;
			border-color: #a9c6c9;
			border-collapse: collapse;
		}
		table.myTableClass th 
		{
			border-width: 1px;
			padding: 8px;
			margin-left:5px;
			padding-left:opx;
			padding-left:0px;
			border-top: 1px solid #a9c6c9;
			border:1px solid a9c6c9;
		}
		table.myTableClass td 
		{
			border-width: 1px;
			padding: 5px;
			font-size:12px;
			border-top: 1px solid #a9c6c9;
			border:1px solid a9c6c9;
		}
		.oddRowColor
		{
			background-color:#ceffce;
		}
		.evenRowColor
		{
			background-color:#d2e3e2;
		}
		#alternatecolor td
		{
			padding:8px 5px;
			margin:0px;
		}
		#alternatecolor tr:hover
		{
			background-color:white;
		}
		#alternatecolor th
		{
			padding:8px 5px;
			margin:0px;
			background-color:#c1d3ff;
		}
		#alternatecolor th:hover
		{
			background-color:#c1d3ff;
		}
		
		#course,#semester,#result_btn,#view_info,#delete_btn
		{
			margin-left:5%;
			font-size:17px;
			border: solid 1px #dcdcdc;
			color:black;
			font-weight:lighter;
			padding: 3px 10px 3px 10px;
			background-color:white;
		}
		#course
		{
			margin-left:20%;
		}
		#result_btn,#view_info
		{
			background-color:#4F6CC4;
			cursor:pointer;
			color:white;
		}
		#view_info
		{
			padding: 2px 3px 2px 3px;
			margin:0px;
		}
		#view_info:hover
		{
			background-color:#4237A4;
			color:#fff;
		}
		#view_info:active
		{
			background-color:black;
			color:white;
		}
		#result_btn:hover
		{
			background-color:#4237A4;
			color:#fff;
		}
		#result_btn:active
		{
			background-color:black;
			color:white;
		}
		#delete_btn
		{
			background-color:#4F6CC4;
			cursor:pointer;
			color:white;
			padding: 5px 15px 5px 15px;
			margin:0px;
		}
		#delete_btn:hover
		{
			background-color:#4237A4;
			color:#fff;
		}
		#delete_btn:active
		{
			background-color:black;
			color:white;
		}
		#checkbox_multiple
		{
				cursor:pointer;
		}
		#alternatecolor
		{
			max-width:100%;
		}
		#content table
		{
			max-width:50%;
		}
	</style>
</head>
<body>
	<?php
		require("session_check.php");
		include("../home_header.php");
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
		<?php
			include("side_bar.php");
		?>
		<center>
			<div id="right_contents">
				<div id="right_middle_content" >
					<?php
						
						include ("../process/config.php");
						if(!empty($_GET["course"]) && !empty($_GET["semester"]))
						{
							$course = $_GET["course"];
							$semester = $_GET["semester"];
							if($course == "all" && $semester == "all")
							{
								$query_login = "select * from login_table l,student_info s where l.category ='Student' and l.college_id = s.college_id order by l.college_id";
							}
							elseif($course == "all" && $semester != "all")
							{
								$query_login = "select * from login_table l,student_info s where l.college_id = s.college_id and s.semester='$semester' order by l.college_id";
							}
							elseif($course != "all" && $semester == "all")
							{
									$query_login = "select * from login_table l,student_info s where l.college_id = s.college_id and s.course='$course' order by l.college_id";
							}
							elseif($course != "all" && $semester != "all")
							{
								$query_login = "select * from login_table l,student_info s where l.college_id = s.college_id and s.semester='$semester' and s.course='$course' order by l.college_id";
							}
						}
						else
						{
							$course = "all";
							$semester = "all";
							$query_login = "select * from login_table l,student_info s where l.category ='Student' and l.college_id = s.college_id order by l.college_id";
						}
						$query_login_run = mysql_query($query_login);
						$num = mysql_num_rows($query_login_run);
					?>
					<div id="middle_content_header">
						Student Information
					</div>
					<hr>
					<div id="content" align="left" style="font-size:20px;">	
						<div style="margin-top:-20px;"> 
							<form method="get" action="student_information.php" name="information_option">
								<select id="course" name="course" required>
									<option value="">Select..</option>
									<option value="all" <?php if($course == "all") { echo "selected"; } ?> >All</option>
									<option value="IT" <?php if($course == "IT") { echo "selected"; } ?> >IT</option>
									<option value="CSE" <?php if($course == "CSE") { echo "selected"; } ?> >CSE</option>
								</select>
								<select id="semester" name="semester" required>
									<option value="">Select..</option>
									<option value="all" <?php if($semester == "all") { echo "selected"; } ?> >All</option>
									<option value="I" <?php if($semester == "I") { echo "selected"; } ?> >I</option>
									<option value="II" <?php if($semester == "II") { echo "selected"; } ?> >II</option>
									<option value="III" <?php if($semester == "III") { echo "selected"; } ?> >III</option>
									<option value="IV" <?php if($semester == "IV") { echo "selected"; } ?> >IV</option>
									<option value="V" <?php if($semester == "V") { echo "selected"; } ?> >V</option>
									<option value="VI" <?php if($semester == "VI") { echo "selected"; } ?> >VI</option>
								</select>
								<input type="submit" id="result_btn" value="view Result" />
							</form>
						</div>
						<form method="get" action="student_information_process.php" name="information_content" enctype=""multipart/form-data">
							<div style="height:40px;widht:100%;"></div>
							<table class="myTableClass" id="alternatecolor" width="100%">	
								<thead>
									<tr>
										<th align="center">#</th>
										<th>No.</th>
										<th>Profile Pic</th>
										<th>Roll No.</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Email ID</th>
										<th>Course</th>
										<th>Sem</th>
										<th>Gender</th>
										<th>address</th>
										<th>Contact No</th>
										<th>View Profile</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$counter = 0;
										while($row=mysql_fetch_array($query_login_run))
										{
											$counter++;
									?>		
											<tr>
												<td><input type="checkbox" name="check_box[]" id="checkbox_multiple" value="<?php echo $row["college_id"]; ?>"/></td>
												<td><?php echo $counter?></td>
												<td >
													<?php
														if(isset($row['profile_pic']) && $row['profile_pic'] != "")
														{
													?>
														<img src="../images/Profile Pic/<?php echo $row['profile_pic']; ?>" height="50px" width="50px" />
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
												<td><?php echo $row["college_id"]; ?></td>
												<td><?php echo $row["fname"]; ?></td>
												<td><?php echo $row["lname"]; ?></td>
												<td><?php echo $row["email_id"]; ?></td>
												<td><?php echo $row["course"]; ?></td>
												<td><?php echo $row["semester"]; ?></td>
												<td><?php echo $row["gender"]; ?></td>
												<td><?php echo $row["address"]; ?></td>
												<td><?php echo $row["contact_no"]; ?></td>
												<td>
													<button type="submit" id="view_info" name="submit" value="<?php echo $row["college_id"]; ?>">view</button>
												</td>
											</tr>
									<?php	
										}
									?>
								</tbody>	
							</table>
							<div style= "font-size:14px; margin-top:5px;">
								<?php 
									if($num == 0)
									{
										echo "Records not found in database...";
									}
									elseif($num == 1)
									{
										echo $num." record is displayed...";
									}
									else
									{
										echo $num." records are displayed...";
									}
								?>
							</div>
							<div style="margin-top:60px; height:auto; width:100%;"> 
								<button type="submit" name="submit" id="delete_btn" value="delete" onclick="return confirm('Are you sure want to delete record?');">Delete</button>
							</div>
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
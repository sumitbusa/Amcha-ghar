<!DOCTYPE html>
<html>
	<title>Welcome to ToDoIst - Login</title>
	<head>
		<link rel="stylesheet" type="text/css" href="css/image_slider_layout.css" />
		<link rel="stylesheet" type="text/css" href="css/index_layout.css" />
		<script src="js/image-slider.js" type="text/javascript">
			imageSlider.thumbnailPreview(function (thumbIndex)
			{ 
				return "<img src='images/thumb" + (thumbIndex + 1) + ".jpg' style='width:80px;height:40px;' />";
			});
		</script>

	</head>
	<body>
	<?php
		include("main_header.php");
		include("navigation.php");
	?>
	<div id="index_header">
	</div>
	
	<div id="content_index">
		<div id="event">
			<div id="sliderFrame">
				<div id="slider">
					
					<img src="images/index/slider/Slider2.JPG" height="100%"  width="100%" alt="25th diploma convocation." />
					<img src="images/index/slider/Slider3.png" height="100%"  width="100%" alt="molding machines in Plasic Lab." />
					<img src="images/index/slider/Slider4.JPG" height="100%"  width="100%" alt="New Lecture Room opening" />
					<img src="images/index/slider/Slider5.jpg" height="100%" width="100%" alt="Bhoomi poojan" />
					<img src="images/index/slider/Slider6.jpg" height="100%"  width="100%" alt="Campus" />
					<img src="images/index/slider/Slider7.png" height="100%"  width="100%" alt="National conference on computing and information technology" />
					<img src="images/index/slider/Slider8.png" height="100%"  width="100%" alt="Industrial Visit" />
				</div>
			</div>
		</div>
		<div id="middle_header">
		</div>
		<div id="middle_content">
			<div  id="adrotator">
				<div id="ad"><span style="opacity:1;"><img src="images/index/todoist.jpg" height="100%" width="100%"></span></div> 
			</div>
			<div id="signup">
				<div id="blank_signup">
					<div style="height:70%; width:100%;"></div>
					<div style="height:30%; width:100%; padding-left:7%; font-size:40px; opacity:1; color:black;">Sign Up here</div>
				</div>
				<div id="content_signup">
					<div id="left_image_signup"><a href="hod_signup_form.php"><img src="images/index/hod.jpg"></img></a></div>
					<div id="middle_image_signup"><a href="teacher_signup_form.php"><img src="images/index/teacher.png"></img></a></div>
					<div id="right_image_signup"><a href="student_signup_form.php"><img src="images/index/stud.png"></img></a></div>
				</div>
				<div id="blank_signup"></div>
			</div>
		</div>
	</div>
	<?php include("IndexFooter.php"); ?>
	</body>
</html>
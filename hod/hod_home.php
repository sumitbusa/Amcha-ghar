<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/admin/admin_home_layout.css">
	<link rel="stylesheet" type="text/css" href="../css/admin/edit_profile_layout.css" />
	<script language="Javascript" type="text/javascript" src="../js/home_header.js"></script>
</head>
<body>
	<?php
		session_start();
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
				<div id="right_middle_content">
					<div id="middle_content_header">
						Update Profile
					</div>
					<hr>
					<div id="content" align="left">
						hiee
					</div>
				</div>
				<div id="footer_content">
					<div id="footer_part">
						<div id="footer_subcontent"><a href="../about.php"  align="left" class="fanchr">About</a></div>
						<div id="footer_subcontent"><a href="../terms.php"  align="center" class="fanchr">Terms</a></div>
						<div id="footer_subcontent"><a href="../privacy.php"  align="center" class="fanchr">Privacy</a></div>
						<div id="footer_subcontent"><a href="../feedback.php"  align="center" class="fanchr">Feedback</a></div>
						<div id="footer_subcontent"><a href="../help.php"  align="center" class="fanchr">Help</a></div>
					</div>
					<div id="footer_bottom_part">&#169;2015 ToDoIst</div>
				</div>
			</div>
		</center>
	</div>
</body>
</html>



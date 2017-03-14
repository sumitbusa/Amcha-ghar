<!DOCTYPE html>
<html>
<header>
	<link rel="stylesheet" type="text/css" href="css/navigation_layout.css" />
</header>
<body>
	<script>
		function homeImgNavBlock(x) 
			{	home_nav.style.display ="block";	}
		function homeImgNavNone(x) 
			{	home_nav.style.display ="none";	}
		function adImgNavBlock(x) 
			{	admission_nav.style.display ="block";	}
		function adImgNavNone(x) 
			{	admission_nav.style.display ="none";	}
		function manageImgNavBlock(x) 
			{	management_nav.style.display ="block";	}
		function manageImgNavNone(x) 
			{	management_nav.style.display ="none";	}
		function bgImgNavBlock(x) 
			{	background_nav.style.display ="block";	}
		function bgImgNavNone(x) 
			{	background_nav.style.display ="none";	}
		function aboutImgNavBlock(x) 
			{	about_nav.style.display ="block";	}
		function aboutImgNavNone(x) 
			{	about_nav.style.display ="none";	}
		function cntctImgNavBlock(x) 
			{	contact_nav.style.display ="block";	}
		function cntctImgNavNone(x) 
			{	contact_nav.style.display ="none";	}
	</script>
	<div style="height:500px; width:50px; margin-top:130px;position:fixed; width:50px; background-color:transparent; margin-left: -2px;  z-index:50;">
		<a href="index.php">
			<div id="left_transition" onmouseover="homeImgNavBlock(this)" onmouseout="homeImgNavNone(this)">
				<div style="float:left; height:50px; width:50px;"><img src="images/index/navigation/home.png" />	</div>
				<div id="home_nav" style="float:left; height:auto; width:auto; display:none; padding: 9px 20px 6px 20px;">Home</div>
			</div>
		</a>
		<a href="footer_admission.php">
			<div id="left_transition" style=" margin-top:70px;" onmouseover="adImgNavBlock(this)" onmouseout="adImgNavNone(this)">
				<div style="float:left; height:50px; width:50px;"><img src="images/index/navigation/admission.PNG" /></div>
				<div id="admission_nav" style="float:left; height:auto; width:auto; display:none; padding: 9px 20px 4px 20px;">Admission</div>
			</div>
		</a>
		<a href="footer_management.php">
			<div id="left_transition" style=" margin-top:140px;" onmouseover="manageImgNavBlock(this)" onmouseout="manageImgNavNone(this)">
				<div style="float:left; height:50px; width:50px;"><img src="images/index/navigation/management.png" /></div>
				<div id="management_nav" style="float:left; height:auto; width:auto; display:none; padding: 9px 20px 4px 20px;">Management</div>
			</div>
		</a>
		<a href="footer_background.php">
			<div id="left_transition" style=" margin-top:210px;" onmouseover="bgImgNavBlock(this)" onmouseout="bgImgNavNone(this)">
				<div style="float:left; height:50px; width:50px;"><img src="images/index/navigation/background.png" /></div>
				<div id="background_nav" style="float:left; height:auto; width:auto; display:none; padding: 9px 20px 4px 20px;">Background</div>
			</div>
		</a>
		<a href="footer_about_us.php">
			<div id="left_transition" style=" margin-top:280px;" onmouseover="aboutImgNavBlock(this)" onmouseout="aboutImgNavNone(this)">
				<div style="float:left; height:50px; width:50px;"><img src="images/index/navigation/about.PNG" /></div>
				<div id="about_nav" style="float:left; height:auto; width:auto; display:none; padding: 9px 20px 4px 20px;">About us</div>
			</div>
		</a>
		<a href="footer_contact_us.php">
			<div id="left_transition" style=" margin-top:350px;" onmouseover="cntctImgNavBlock(this)" onmouseout="cntctImgNavNone(this)">
				<div style="float:left; height:50px; width:50px;"><img src="images/index/navigation/contact.png" /></div>
				<div id="contact_nav" style="float:left; height:auto; width:auto; display:none; padding: 9px 20px 4px 20px;">Contact us</div>
			</div>
		</a>
	</div>
	</body>
	</html>
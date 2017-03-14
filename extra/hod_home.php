<!DOCTYPE html>
<html>
<head>
	<!--<link rel="stylesheet" type="text/css" href="css/admin/admin_home.css">-->
<style>
#index_header
{
	height:102px;
	width:99%;
	left:0px;
	background-color:transparent;
	
}
#header
{
	width:99%;
	height:70px;
	left:0px;
	background-color:rgba(255,255,255,0.1);
}
#contents
{
	width:14%;
	height:1200px;
	margin-left:-10px;
	float:left;
	background-color:#191919;
	opacity:0.98;
<!--	-webkit-filter: blur(1px);
  -moz-filter: blur(1px);
  -o-filter: blur(1px);
  -ms-filter: blur(1px);
  filter: blur(1px);
  -->

}
#sub_content
{
border-top: 1px solid #000;
border-bottom: 1px solid #000;
	float:left;
	height:50px;
	width:100%;s
	onmouseover="this.style.background
}
#sub_content:hover
{
	background-color:#530000;
}
body
{
	background-color:red;
}
#menu
{
	margin-left:-10px;
	height:40px;
	width:101.25%;
	background-color:red;
}
#menu_content
{
	float:left;
	height:99%;
	width:10%;
	background-color:green;
}
#menu_content:hover
{
	background-color:#36f;
}
#blank_footer
{
	float:left;
	height:50px;
	width:100%;
}
#blank_content
{
	background-color:#a1a1a1;
	float:left;
	height:10px;
	width:100%;
}
#profile
{
	background-color:#cccccc;
	float:left;
	height:200px;
	width:100%;
	-webkit-filter:contrast(80%);
	-moz-filter: contrast(80%);
	-o-filter: contrast(80%);
	-ms-filter:contrast(80%);
	filter: contrast(80%);
}
#profile:hover
{
	-webkit-filter:contrast(100%);
	-moz-filter: contrast(100%);
	-o-filter: contrast(100%);
	-ms-filter:contrast(100%);
	filter: contrast(100%);
}
</style>	
</head>
<body>
<?php
	include("home_header.php");
	session_start();
	if(empty($_SESSION['user_fname']) || empty($_SESSION['user_lname']) || $_SESSION['category']!='HOD')
	{
		header("Location:index.php");
	}
?>
<div id="index_header"></div>
<div id="menu">
	<div style="float:left; width:32px; height:100%;"></div>
	<a href="#"><div id="menu_content"></div></a>
	<div style="float:left; width:10px; height:100%;"></div>
	<a href="#"><div id="menu_content"></div></a>
	<div style="float:left; width:10px; height:100%;"></div>
	<a href="#"><div id="menu_content"></div></a>
	<div style="float:left; width:10px; height:100%;" ></div>
	<a href="#"><div id="menu_content"></div></a>
	<div style="float:left; width:10px; height:100%;"></div>
	<a href="#"><div id="menu_content"></div></a>
	<div style="float:left; width:10px; height:100%;"></div>
	<a href="#"><div id="menu_content"></div></a>
	<div style="float:left; width:10px; height:100%;"></div>
	<a href="#"><div id="menu_content"></div></a>
	<div style="float:left; width:10px; height:100%;"></div>
	<a href="#"><div id="menu_content"></div></a>
	<div style="float:left; width:10px; height:100%;"></div>
	<a href="#"><div id="menu_content"></div></a>
	<div style="float:left; width:10px; height:100%;"></div>
</div>
<div id="contents">
	<div id="blank_content">
	</div>
	<div id="profile">
	</div>
	<a href="#"><div id="sub_content"></div></a>
	<a href="#"><div id="sub_content"></div></a>
	<a href="#"><div id="sub_content"></div></a>
	<a href="#"><div id="sub_content"></div></a>
	<a href="#"><div id="sub_content"></div></a>
	<a href="#"><div id="sub_content"></div></a>
	<a href="#"><div id="sub_content"></div></a>
	<a href="#"><div id="sub_content"></div></a>
	<a href="#"><div id="sub_content"></div></a>
	<a href="#"><div id="sub_content"></div></a>
	<a href="#"><div id="sub_content"></div></a>
	<a href="#"><div id="sub_content"></div></a>
	<a href="#"><div id="sub_content"></div></a>
	<a href="#"><div id="sub_content"></div></a>
	<a href="#"><div id="sub_content"></div></a>
	<a href="#"><div id="sub_content"></div></a>
	<a href="#"><div id="sub_content"></div></a>
	<a href="#"><div id="sub_content"></div></a>
	<a href="#"><div id="sub_content"></div></a>
</div>
<div id="blank_footer">
</div>
<?php include("footer.php"); ?>
</body>
</html>


http://codepen.io/LFeh/pen/ICkwe
<!DOCTYPE html>
<html>
<title>ToDoIst</title>
<body>
<?php
?>
<div style="height:75px; width:100%;"></div>
<?php
include("home_header.html");


session_start();
echo "Welcome,   ".$_SESSION['user_fname']." ".$_SESSION['user_lname'] ;

?>
<br><br><br>
<a href="process/logout_process.php"> <input type="submit" name="submit" value="Logout"></a>
<?php

//include("process/logout_process.php");
?>
</body>
</html>
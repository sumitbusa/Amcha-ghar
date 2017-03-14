<?php
$con = mysql_connect("localhost","root","") or die("Connectivity fail...");
$db_name = mysql_select_db("project") or die("database not found...");
?>
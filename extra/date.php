<?php
date_default_timezone_set('Asia/Calcutta');
$date= date("y-m-d");
$date=date_create("2013-03-15");
echo date_format($date,"d-m-y");
$date= date("d-m-y");
$time= date("H:i:s");
echo $date."<br><br>";
date_default_timezone_set('Asia/Calcutta');
echo date("d-m-Y H:i:s")."<br/>"; //2012-12-18 12:12:12
echo strtotime(date("Y-m-d H:i:s",time()))."<br/>"; 
?>
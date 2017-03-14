<?php
	$rollno1=1198007;
	$rollno2=1280013;
	echo "roll no:  ".$rollno1."</br>";
	$prefix="573";
	echo "prefix:  ".$prefix."</br>";
	$prefix_year=substr($rollno1,0,2);
	echo "prefix_year:  ".$prefix_year."</br>";
	$prefix_num=substr($rollno1,2,2);
	echo "prefix_num:  ".$prefix_num."</br>";
	$short_roll_no=substr($rollno1,-3);
	echo "short_roll_no:  ".$short_roll_no."</br>";
	$sapno=$prefix."".$prefix_num."".$prefix_year."0".$short_roll_no;
	echo "sap no:  ".$sapno."</br></br>";
	echo "roll no:  ".$rollno2."</br>";
	$prefix="573";
	echo "prefix:  ".$prefix."</br>";
	$prefix_year=substr($rollno2,0,2);
	echo "prefix_year:  ".$prefix_year."</br>";
	$prefix_num=substr($rollno2,2,2);
	echo "prefix_num:  ".$prefix_num."</br>";
	$short_roll_no=substr($rollno2,-3);
	echo "short_roll_no:  ".$short_roll_no."</br>";
	$sapno=$prefix."".$prefix_num."".$prefix_year."0".$short_roll_no;
	echo "sap no:  ".$sapno;
?>
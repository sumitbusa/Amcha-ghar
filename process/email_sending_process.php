
<?php
	session_start();
	$to = $_SESSION['email_id'];
	$subject= "Somebody requested a new password for your ToDoIst account";
	$txt = "Hello,\nYour TodoIst account confirmation code is :  ".$_SESSION['confirmation_code'].".";
	$header = "From: todoistproject@gmail.com" . "\r\n" ."CC: todoistproject@ gmail.com";
	mail($to,$subject,$txt,$header);
	/*
?>
<!DOCTYPE html>
<html>
<body>
	<br><br><br>
	<?php echo "your mail was sent";?>
	<br><br><br><br><?php echo "To: ".$to; ?>
	<br><br><?php echo "Subject:  ".$subject;?>
	<br><br><?php echo "Body: ".$txt;?>	
	</body>
	</html>
<?php
	*/
	date_default_timezone_set('Asia/Calcutta');
	$code = $_SESSION['confirmation_code'];
	$filename ="ToDoIst_D".date("d_m_Y")."_T".date("H_i_s");
	$myfile = fopen("CnfrmCode/".$filename.".txt", "w") or die("Unable to open file!");
	$txt = "Hello,\nYour TodoIst account confirmation code is: ".$code;
	fwrite($myfile, $txt);
	fclose($myfile);
		
	header("Location: ../confirmation_code.php");
?>

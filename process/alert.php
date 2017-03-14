<?php
	echo "<script type='text/javascript'>alert('Password Updated successfully....');</script>";	
	echo strtolower("ASGFHGN");
	
	$str ="HBDSJHJASDHJ"; 
    if (!ctype_alnum($str))
	{
		 echo "The string $str does not consist of all letters or digits.\n";
        
    } 
	else {
       echo "The string $str consists of all letters or digits.\n";
    }
	if (preg_match('/^[a-z A-Z 0-9]+$/', $str))
	{
		echo "Everything ok!";
	}
	else
	{ 
		echo "Everything not ok!";
	}
	
	
?>
<form action="login.asp">
	<input type="email" />
	<input type="text" maxlength="6" />
	<input type="submit" /> 
</form>
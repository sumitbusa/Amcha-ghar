<?php
	include("config.php")
			if(!empty($_POST['check_box'])) 
				{
					$checked_count = count($_POST['check_box']);
						foreach($_POST['check_box'] as $selected) 
							{
								$college_id=$selected;
								include ("../process/config.php");
	
								$sql = "delete from  login_table where college_id='$college_id'";
								$sql_1 = "delete from student_info where college_id='$college_id'";
								mysql_query($sql);
								mysql_query($sql_1);
								$_SESSION["Selected_Error"] = 0;
							}
				}
			else
				{
						$_SESSION["Selected_Error"]=1;
			
				}
?>
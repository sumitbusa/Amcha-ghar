<?php
include("config.php");
echo $userid=$_GET['userid'];
echo $query = "delete from signup where id ='$userid'";
$query_run=mysql_query($query);
if(!empty($query_run))
{
    echo "Member Deleted successfully....";
}
else{
    echo "member not deleted successfully due to some resion...";
}


header("Location: ../viewmember.php");
?>
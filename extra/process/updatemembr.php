<?php
session_start();
include ("process/config.php");
include ("header.php");
$userid = $_GET['userid'];
if(!empty($userid))
{
  $userid = $_GET['userid'];
}
else
{
  echo "Userid is not passed";
  exit;
}


$query = "select * from signup where id='$userid'" ;
$query_run = mysql_query($query);
$query_run_result = mysql_fetch_array($query_run);

?>


  <form method="post" name="form" action="process/updatemember_process.php" enctype="multipart/form-data">
    <center><div>
        <div><h1 style="color: red;">UPDATE MEMBER</h1></div>
        <table border="0">
            <tr>
                <td>Username</td><td><input type="text" name="username" id="username" value="<?php echo $query_run_result['username'];?>"></td>
                <input type="hidden" name="userid" id="userid" value="<?php echo $userid;?>">
            </tr>
             <tr>
                <td>Password</td><td><input type="password" name="password" id="password" value="<?php echo $query_run_result['password'];?>"></td>
            </tr>
              <tr>
                <td>Email ID</td><td><input type="text" name="emailid" id="emailid" value="<?php echo $query_run_result['emailid'];?>"></td>
            </tr>
               <tr>
                <td>Contact number</td><td><input type="text" name="tel" id="tel" value="<?php echo $query_run_result['contact'];?>"></td>
            </tr>
                <tr>
                <td>Address</td><td><input type="text" name="address" id="address" value="<?php echo $query_run_result['address'];?>"></td>
            </tr>
                <tr>
                <td>Profile Pic</td><td><img src="masterfolder/<?php echo $query_run_result['actualpic'];?>" height="50px"></td>
                <tr>
                <td></td><td><input type="file" name="profile" id="profile"></td>
            </tr>
            </tr>
                  <tr>
                <td></td><td><input type="submit" name="submit" value="Update"> &nbsp;&nbsp;&nbsp;<input type="reset" name="reset"></td>
            </tr>
        </table>
    </div></center>
</form>

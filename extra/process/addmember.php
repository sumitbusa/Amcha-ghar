<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("Location: index.php");
}
include ('header.php');
?>

$_SESSION['username']


<form method="post" name="form" action="process/addmember_process.php" enctype="multipart/form-data">
    <center><div>
        <div><h1 style="color: red;">ADD MEMBER</h1></div>
        <table border="0">
            <tr>
                <td>Username</td><td><input type="text" name="username" id="username"></td>
            </tr>
             <tr>
                <td>Password</td><td><input type="password" name="password" id="password"></td>
            </tr>
              <tr>
                <td>Email ID</td><td><input type="text" name="emailid" id="emailid"></td>
            </tr>
               <tr>
                <td>Contact number</td><td><input type="text" name="tel" id="tel"></td>
            </tr>
                <tr>
                <td>Address</td><td><input type="text" name="address" id="address"></td>
            </tr>
                </tr>
                <tr>
                <td>Profle mage</td><td><input type="file" name="profile" id="profile"></td>
            </tr>
            <tr>
                <td></td><td><input type="submit" name="submit" value="Add"> &nbsp;&nbsp;&nbsp;<input type="reset" name="reset"></td>
            </tr>
        </table>
    </div></center>
</form>


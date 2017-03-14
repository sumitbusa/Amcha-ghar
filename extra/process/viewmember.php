<?php
session_start();
include ("process/config.php");
include ("header.php");
?>


  <center><div>
        <div><h1 style="color: red;">VIEW MEMBER</h1></div>
        <table border="1">
          <tr>
            <th>ID</th>
            <th>Emailid</th>
            <th>Password</th>
            <th>Contact Number</th>
            <th>first name</th>
            <th>last name</th>
            <th>dob</th>
			<th>rollno</th>
			<th>gender</th>
			<th>mobile no</th>
			<th>course</th>
			<th>sem</th>
            <th>Delete</th>
          </tr>
          <?php
          $query = "select * from student_info";
          $query_run = mysql_query($query);
          //echo "<pre>";
          //print_r($info);
          //echo "</pre>";;
          while($info = mysql_fetch_array($query_run))
          {
            $userid = $info['id'];
            ?>
          <tr>
            <td> <?php echo $info['id'];?> </td>
            <td> <?php echo $info['username'];?> </td>
            <td> <?php echo $info['emailid'];?> </td>
            <td> <?php echo $info['contact'];?> </td>
            <td> <?php echo $info['address'];?> </td>
            <td> <img src="masterfolder/<?php echo $info['actualpic'];?>" height="50px"></td>
            <td> <a href="updatemembr.php?userid=<?php echo $userid;?>"> <input type="submit" value="Update"></a></td>
            <td> <a href="process/deletemember_process.php?userid=<?php echo $userid;?>" onclick='return confirm("Are you sure?")'; ><input type="submit" value="Delete"></a></td>
            </tr>
         <?php
         }
          ?>  
            
            
            
        </table>
    </div></center>
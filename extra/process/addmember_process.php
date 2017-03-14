<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$emailid = $_POST['emailid'];
$contact = $_POST['tel'];
$address = $_POST['address'];

if(!empty($username))
{
  $username = $_POST['username'];  
}
else{
  echo "Enter username...";
  exit;
}if(!empty($password))
{
  $password = $_POST['password'];
}
else{
  echo "Enter password...";
  exit;
}
if(!empty($emailid))
{
  $emailid = $_POST['emailid'];
}
else{
  echo "Enter emailid...";
  exit;
}
if(!empty($contact))
{
$contact = $_POST['tel'];
}
else{
  echo "Enter contact...";
  exit;
}
if(!empty($address))
{
 $address = $_POST['address'];  
}
else{
  echo "Enter address...";
  exit;
}

if(isset($_FILES['profile']))
{
   $filename = $_FILES['profile']['name'];
   $filesize = $_FILES['profile']['size']/1024;
   $filetype = $_FILES['profile']['type'];
   $filetemp = $_FILES['profile']['tmp_name'];
   $typeallowed = array("image/jpg","image/jpeg","image/png");
   
   
   if(!in_array($filetype,$typeallowed))
   {
    echo "file type not support...";
    exit;
   }
   else{
    $random = rand(111,999);
    $renamefilename = $random.$filename;
        $path = '../masterfolder';
    
    if(move_uploaded_file($filetemp,"$path/$renamefilename"))
    {
        //echo "File Uploaded Successfully...";
    }
    else
    {
        echo "Error...";
        exit;
    }
    
    
    
    
    
   }
   
}



$query = "insert into signup (username,password,emailid,contact,address,profile_pic,actualpic) values ('$username','$password','$emailid','$contact','$address','$filename','$renamefilename')";
$query_run = mysql_query($query);

if(!empty($query_run))
{
    echo "Member added successfully....";
}
else{
    echo "member not added successfully due to some resion...";
}



header("Location: ../addmember.php");
?>
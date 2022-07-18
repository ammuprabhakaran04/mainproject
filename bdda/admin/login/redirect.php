<?php
session_start();
include('../db/connectionI.php');
//$db_name="music"; // Database name 
$tbl_name="employee"; // Table name 
 
$myusername=$_POST['UserName']; 
 

if(isset($_POST['login']))
{
	$res = mysqli_query($con,"SELECT * FROM register Where email = '$myusername' ");
	if(mysqli_num_rows($res) > 0)
	{
		header("location:../dashboard/dashboard.php");
		$_SESSION['email'] = $myusername;
	}
	else
	header("location:login.php?a=1");
} 

?>
 
 




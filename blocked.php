<?php
$dbhost="localhost";
$user="root";
$pass="root";
$db="version";
$conn=mysqli_connect($dbhost,$user,$pass,$db);
$user=$_SESSION['username'];
$sql="SELECT username, reportedip from report where reportedip=reportingip and username='$user' ";
$result=mysqli_query($conn,$sql);
$loginip = $_SERVER["REMOTE_ADDR"];
if($loginip=={$row['reportedip']})
{
  header("location: blockeduser.php");
}

mysqli_close($conn);
?>

<?php
$dbhost="localhost";
$user="root";
$pass="root";
$db="version";
$conn=mysqli_connect($dbhost,$user,$pass,$db);
$username = $_SESSION['username'];
$sql="SELECT username, ipadd, logintime,logindate, timelogin, message from security where username='$username' ORDER BY logintime DESC ";
$result=mysqli_query($conn,$sql);
if(!$result)
{
echo "</br>"."Error: Nothing to show";
}
else
echo "</br>";

$page = $_SERVER['PHP_SELF'];
 $sec = "600";
 header("Refresh: $sec; url=$page");

while($row=mysqli_fetch_array($result))
{
  echo "<div class=\"uk-card uk-card-default uk-card-body\">";
  echo "<div align=\"center\">";
  echo "<h3>"."Your account was accessed on "."{$row['logindate']}"." at "."{$row['timelogin']}"."</h3>";
  echo "IP Address- "."{$row['ipadd']}"."</br>";
  echo "Timestamp- "."{$row['logintime']}"."</br>"."</br>";
  echo "Status: "."{$row['message']}"."</br>";
  echo "</div>";
  echo "</div>";
  echo "</br>";
}

mysqli_close($conn);
?>

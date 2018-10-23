<?php
$dbhost="localhost";
$user="root";
$pass="root";
$db="version";
$conn=mysqli_connect($dbhost,$user,$pass,$db);
$name = mysqli_real_escape_string($db, $_POST['user']);//mysqli_real_escape_string($db, $_POST['proname']);
$sql="SELECT username, name, email from user where username='$_POST['user']' ";//
$result=mysqli_query($conn,$sql);
if(!$result)
{
echo "</br>"."Error: Nothing to show";
}
else
echo "</br>";

echo {$row['username']};
while($row=mysqli_fetch_array($result))
{
  echo "<div class=\"uk-card uk-card-default uk-card-body\">";
  echo "<div align=\"center\">";
  echo "<h3>"."{$row['username']}"."</br>"."</h3>";
  echo "<div align=\"center\">";
  echo "Name : "."{$row['name']}"."</br>";
  echo "Email : "."{$row['email']}"."</br>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
  echo "</br>";
}

mysqli_close($conn);
?>

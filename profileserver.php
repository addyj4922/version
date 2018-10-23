<?php
$dbhost="localhost";
$user="root";
$pass="root";
$db="version";
$conn=mysqli_connect($dbhost,$user,$pass,$db);
$name = mysqli_real_escape_string($db, $_POST['proname']);//mysqli_real_escape_string($db, $_POST['proname']);
$sql="SELECT username, name, email, rollno from user ";//where username='$name'
$result=mysqli_query($conn,$sql);
if(!$result)
{
echo "</br>"."Error: Nothing to show";
}
else
echo "</br>";


while($row=mysqli_fetch_array($result))
{
  echo "<center>";
  echo "<div style=\"width:80%\">";
  echo "<div class=\"card text-center\">";
  echo "<div class=\"card-header\">";
  echo "{$row['username']}";
  echo "</div>";
  echo "<div class=\"card-body\">";
  echo "Name : "."{$row['name']}"."</br>";
  echo "Email : "."{$row['email']}"."</br>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
  echo "</center>";
    echo "</br>";
}

mysqli_close($conn);
?>

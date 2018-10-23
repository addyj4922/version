<?php
$dbhost="localhost";
$user="root";
$pass="root";
$db="version";
$conn=mysqli_connect($dbhost,$user,$pass,$db);

$sql="SELECT authorname, heading, post, postdate, posttime, timepost from authorpost ORDER BY posttime DESC";
$result=mysqli_query($conn,$sql);
if(!$result)
{
echo "</br>"."Error: Nothing to show";
}
else
echo "</br>";

$page = $_SERVER['PHP_SELF'];
 $sec = "60";
 header("Refresh: $sec; url=$page");

while($row=mysqli_fetch_array($result))
{
  echo "<div class=\"uk-card uk-card-default uk-card-body\">";
  echo "<div align=\"center\">";
  echo "<h3>"."{$row['heading']}"."</br>"."</h3>";
  echo "<sup>"."Published by- "."{$row['authorname']}"."</sup>"."</br>"."</br>"."<sup>"." Published on- "."{$row['postdate']}".", "." at- "."{$row['timepost']}"."</sup>"."</br>";
  echo "<hr>";
  echo "<div align=\"justify\">";
  echo "<h4>"."{$row['post']}"."</h4>"."</br>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
  echo "</br>";
}

mysqli_close($conn);
?>

<?php
$dbhost="localhost";
$user="root";
$pass="root";
$db="version";
$conn=mysqli_connect($dbhost,$user,$pass,$db);

$sql="SELECT username, heading, post, postdate, posttime, timepost, votes, postid from geek ORDER BY posttime DESC";
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
  echo "<center>";
  echo "<div style=\"width:80%\">";
  echo "<div class=\"card text-center\">";
  echo "<div class=\"card-header\">";
  echo "Published by- "."<b>"."{$row['username']}"."</b>".",  on- "."{$row['postdate']}".", "." at- "."{$row['timepost']}"."</br>";
  echo "</div>";
  echo "<div class=\"card-body\">";
  echo "<h2 class=\"card-title\">"."{$row['heading']}"."</br>"."</h2>";
  echo "<div align=\"justify\">";
  echo "<p class=\"card-text\">"."{$row['post']}"."</p>"."</br>";
  echo "</div>";
  echo "</div>";
  echo "<div class=\"card-footer\">";

  echo "<div  style=\"float: left\" align=\"left\">";
  echo "<button name=\"postid\" value=\"test\" type=\"button\" class=\"btn btn-dark\" >Post Id : "."{$row['postid']}</button>";
  echo "</div>";
  echo "<div align=\"right\">";
  echo "<a data-toggle=\"tooltip\" title=\"Generate post report against ".$row['username']." 's post \" href=\"reportpost.php\" class=\"btn btn-danger\">Report <span uk-icon=\"bookmark\"></span></a>";
  echo "</div>";

  echo "</div>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
  echo "</br>";
}

mysqli_close($conn);
?>

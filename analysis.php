<html>
<head>
  <title>Analysis</title>
  <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.8/css/uikit.min.css" />
    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.8/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.8/js/uikit-icons.min.js"></script>
</head>
<body>
<?php
$dbhost="localhost";
$user="root";
$pass="root";
$db="version";
$conn=mysqli_connect($dbhost,$user,$pass,$db);

$sql="SELECT mobile,computers from devicecounter where indexc= 'counter' ";
$result=mysqli_query($conn,$sql);
if(!$result)
{
echo "</br>"."Error: Nothing to show";
}
else
echo "</br>";

$page = $_SERVER['PHP_SELF'];
 $sec = "10";
 header("Refresh: $sec; url=$page");

while($row=mysqli_fetch_array($result))
{
  echo "<div class=\"uk-card uk-card-default uk-card-body\">";
  echo "<div align=\"center\">";
  echo "<table style=\"width:60%\">";
  echo "<tr style=\"background-color:#000000;\">";
  echo "<td>";
  echo "<center>";
  echo "<h3>"."<font color=\"#ffffff\">"."Mobile logins"."</font>"."</h3>";
  echo "</center>";
  echo "</td>";
  echo "<td>";
  echo "<center>";
  echo "<h3>"."<font color=\"#ffffff\">"." Computer logins"."</font>"."</h3>";
  echo "</center>";
  echo "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>";
  echo "<center>";
  echo "<h3>"."{$row['mobile']}"."</h3>";
  echo "</center>";
  echo "</td>";
  echo "<td>";
  echo "<center>";
  echo "<h3>"."{$row['computers']}"."</h3>";
  echo "</center>";
  echo "</td>";
  echo "</tr>";
  echo "</div>";
  echo "</div>";
  echo "</br>";
}

mysqli_close($conn);
?>
</body>
</html>

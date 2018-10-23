<?php
$username = "";
$name = "";
$email    = "";
$errors = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'version');
function isMobile()
  {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
  }
  if(isMobile())
    {
      $query = "UPDATE devicecounter SET mobile = mobile + 1";
      echo " ";
    }
  else
    {
      $query = "UPDATE devicecounter SET computers = computers + 1";
      echo "Weather: ";
    }
    mysqli_query($db, $query);
?>

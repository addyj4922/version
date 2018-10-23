<?php
  $ip=$_SERVER["REMOTE_ADDR"];

  if($ip =='::1')
  {
    echo ("Current IP Address: localhost");
  }
  else
  {
    echo ("Current IP Address: ".$_SERVER["REMOTE_ADDR"]);
  }
?>

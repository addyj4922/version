<?php
$username = "";
$name = "";
$email    = "";
$errors = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'version');
  if(isset("voteup"))
    {
      $query = "UPDATE geek SET votes = votes + 1";
      mysqli_query($db, $query);
    }
    mysqli_query($db, $query);
?>

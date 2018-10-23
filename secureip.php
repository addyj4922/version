<?php
session_start();

// initializing variables
$username = "";
$name = "";
$email    = "";

$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'version');
date_default_timezone_set('Asia/Calcutta');
//geekboardeditor
  // yaha par form se input ara hai
  $username = $_SESSION['username'];
  $ipsave = $_SERVER["REMOTE_ADDR"];
  $time = date('H:i:s');
  $date = date('d-m-Y');
  

      	$query = " INSERT into security (username,ipadd,logindate,timelogin) VALUES ('$username','$ipsave','$date','$time') ";
        mysqli_query($db, $query);
?>

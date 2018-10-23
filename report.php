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

if (isset($_POST['reportgenerator']))
{
  // yaha par form se input ara hai
  $username = $_SESSION['username'];
  $id = mysqli_real_escape_string($db, $_POST['postid']);
  $reason = mysqli_real_escape_string($db, $_POST['reason']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($id) || empty($reason)) { array_push($errors, "Fields cannot be left empty"); }

  // Finally, submit the post if there are no errors in the form
  if (count($errors) == 0)
  {
      	$query = "INSERT INTO reportpost (postid, username, reason)
  			VALUES(DEFAULT,'$id', '$username', '$reason')";
        mysqli_query($db, $query);
        header('location: redirect.php');
  }
}


?>

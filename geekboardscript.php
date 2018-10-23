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

if (isset($_POST['geekboardsubmit']))
{
  // yaha par form se input ara hai
  $username = $_SESSION['username'];
  $heading = mysqli_real_escape_string($db, $_POST['heading']);
  $post = mysqli_real_escape_string($db, $_POST['post']);
  $date = date("d-m-y");
  $time = date('H:i:s');

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($heading) || empty($post)) { array_push($errors, "Fields cannot be left empty"); }

  // Finally, submit the post if there are no errors in the form
  if (count($errors) == 0)
  {
      	$query = "INSERT INTO geek (username, heading, post, postdate,timepost, postid)
  			VALUES('$username', '$heading', '$post', '$date','$time',DEFAULT)";
        mysqli_query($db, $query);
        header('location: redirect.php');
  }
}


?>

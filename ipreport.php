<?php
session_start();

// initializing variables
$username = "";
$name = "";
$email    = "";

$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'version');
//geekboardeditor

if (isset($_POST['reportbutton']))
{
  // yaha par form se input ara hai
  $username = $_SESSION['username'];
  $reported = mysqli_real_escape_string($db, $_POST['reported']);
  $reporting = $_SERVER["REMOTE_ADDR"];

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($reported)) { array_push($errors, "An IP is required"); }

  // Finally, submit the post if there are no errors in the form
  if (count($errors) == 0)
  {
      	$query = "INSERT INTO report (username, reportedip, reportingip)
  			VALUES('$username', '$reported', '$reporting')";
        mysqli_query($db, $query);
        header('location: settings.php');
  }
}


?>

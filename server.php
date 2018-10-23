<?php
session_start();

// initializing variables
$username = "";
$name = "";
$email    = "";

$errors = array();
$randomvunqcode=rand(100000,999999);

// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'version');

// REGISTER USER
if (isset($_POST['version_signup'])) {
  // yaha par form se input ara hai
  $rollno = mysqli_real_escape_string($db, $_POST['rollno']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $signupip = $_SERVER["REMOTE_ADDR"];

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($rollno) || empty($name) || empty($username) || empty($email) || empty($password)) { array_push($errors, "Fields cannot be left empty"); }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE rollno='$rollno' OR username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['rollno'] === $rollno) {
      array_push($errors, "RollNo already exists");
    }
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }

  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password=md5($password);

  	$query = "INSERT INTO user (name, username, email, password, signupip, rollno)
  			  VALUES('$name', '$username', '$email', '$password', '$signupip', '$rollno')";
  	mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['vunqcode']=$randomvunqcode;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: user.php');
  }
}


// LOGIN USER
if (isset($_POST['version_login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username) || empty($password)) {
  	array_push($errors, "Fields cannot be left empty");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['vunqcode']=$randomvunqcode;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: user.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>

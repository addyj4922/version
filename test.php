<?php
session_start();
$_SESSION['username']='hacked!!!';
header('Location: user.php');
?>
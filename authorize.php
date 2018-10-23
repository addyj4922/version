<?php include 'server.php';
if(!isset($_SESSION['username']))
{
    // not logged in
    header('Location: index.php');
    exit();
}
if(!isset($_SESSION['vunqcode']))
{
    // not logged in
    header('Location: index.php');
    exit();
}
?>

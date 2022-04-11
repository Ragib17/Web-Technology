<?php

session_start(); 

 $message="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "&nbsp;Invalid user name and password";
}

if ($_POST['username']=="project" && $_POST['password']=="123456")
{

$_SESSION["username"] = $_POST['username'];
$_SESSION["password"] = $_POST['password'];

}
else
{
    $message = "Invalid user name and password";

}
 

}


?>
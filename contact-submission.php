<?php

// check for form submission - if it doesn't exist then send back to contact form
if (!isset($_POST["save"]) || $_POST["save"] != "contact") {
    header("Location: index.php"); exit;
}
	
// get the posted data
$name = $_POST["name"];
$lastName = $_POST["lastName"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$password_confirm = $_POST["password_confirm"];
	
// check that a name was entered
if (empty ($name))
    $error = "You must enter your first name(s).";
// check that a last name was entered
elseif (empty ($lastName))
    $error = "You must enter your last name.";
// check that a company name was entered
elseif (empty ($username))
    $error = "You must enter your username.";
// check that an email was entered
elseif (empty ($email))
    $error = "You must enter your email address.";	
// check for a valid email address
elseif (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email))
    $error = "You must enter a valid email address.";
// check that a password was entered
elseif (empty ($password))
    $error = "You must enter your password.";	
// check that a password_confirm was entered
elseif (empty ($password_confirm))
    $error = "You must enter your confirm password.";	
elseif($password != $password_confirm)	
	$error = "Your passwords must match";	
elseif($name && $lastName && $username && $email && $password && $password_confirm)
{		
	include("configure.php");	
	$query = mysql_query("INSERT INTO users VALUES('','$name','$lastName','$username','$email','$password')");
	}
// check if an error was found - if there was, send the user back to the form
if (isset($error)) {
    header("Location: index.php?e=".urlencode($error)); exit;
}
		

	
// send the user back to the form
header("Location: login.php?s=".urlencode("Thank you!!You can now login.")); exit;

?>

<?php
session_start();
$_SESSION['username'] = $myusername;

// username and password sent from form 
$myusername = addslashes($_POST['username']); 
$mypassword = addslashes($_POST['password']); 

	include("configure.php");

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{


		$sql="SELECT user_id FROM users WHERE username='$myusername' and password='$mypassword'";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);

		$count=mysql_num_rows($result);

		
		// If result matched $myusername and $mypassword, table row must be 1 row
		if($count==1)
		{
			$_SESSION['login_user']=$myusername;

			header("Location: secure.php");
		}
		else 		
		{
			$error="Your Login Name or Password is invalid";
		}
	}
		
	// check if an error was found - if there was, send the user back to the form
	if (isset($error)) {
	    header("Location: login.php?e=".urlencode($error)); exit;
	}
		
	// send the user back to the form
	header("Location: secure.php?s=".urlencode("You have successfully been logged in")); exit;
?>

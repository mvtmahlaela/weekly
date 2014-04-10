<?php

	//Connect to database
     $location = "localhost";
     $usernames = "root";
     $passwords = "";
     $database = "users";
	$conn=@mysql_connect("$location","$usernames","$passwords");
     if (!$conn) die ("Error: Could not connect to database server.");
     @mysql_select_db($database,$conn) or die ("Error: Could not open database.");
	 session_start();

?>
<?php
session_start();
 
$dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ
$dbname = "nisseojd_"; // the name of the database that you are going to use for this project
$dbuser = "niss"; // the username that you created, or were given, to access your database
$dbpass = "Sue257n_"; // the password that you created, or were given, to access your database
 
$link = mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());
?>
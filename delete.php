<?php

$id = $_GET['id'];

$dbhost = 'localhost';
$dbuser = 'root';
$dbpwrd = '';
$dbname = 'users';
$conn = mysqli_connect($dbhost, $dbuser, $dbpwrd, $dbname) or die('Mysql Connection Failed....' . mysqli_error());
if (!$conn)
{
	die("Connection failed: " . mysqli_error());
}

mysqli_query($conn,"DELETE FROM users WHERE id='$id'");
header("location: /viewmodule.php");
											
?>
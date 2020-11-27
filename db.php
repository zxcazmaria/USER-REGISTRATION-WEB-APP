<?php

$dbhost = 'us-cdbr-east-02.cleardb.com';
$dbuser = 'ba8f2043e97da8';
$dbpwrd = '1c94337d';
$dbname = 'heroku_04a3e22849092a0';
$conn = mysqli_connect($dbhost, $dbuser, $dbpwrd, $dbname) or die('Mysql Connection Failed....' . mysqli_error());
if (!$conn)
{
die("Connection failed: " . mysqli_error());
}

?>
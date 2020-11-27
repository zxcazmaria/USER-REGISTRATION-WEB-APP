<?php
$fname = $_POST['lastname'];
$lname = $_POST['firstname'];
$acesslevel = $_POST['acesslevel'];
$address = $_POST['address'];
$password = $_POST['password'];
$button = $_POST['save'];

if ($button == 'Save!')
{
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpwrd = '';
    $dbname = 'users';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpwrd, $dbname) or die('Mysql Connection Failed....' . mysqli_error());
    if (!$conn)
    {
        die("Connection failed: " . mysqli_error());
    }
    $sql = "INSERT INTO users(lname, fname, accesslevel, address, password) VALUES('$lname','$fname','$acesslevel','$address','$password')";
    mysqli_query($conn, $sql);
	header("location: /");
}

?>

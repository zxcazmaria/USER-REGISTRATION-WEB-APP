<?php
include 'db.php';
$fname = $_POST['lastname'];
$lname = $_POST['firstname'];
$acesslevel = $_POST['acesslevel'];
$address = $_POST['address'];
$password = $_POST['password'];
$button = $_POST['save'];

if ($button == 'Save!')
{
    $sql = "INSERT INTO users(lname, fname, accesslevel, address, password) VALUES('$lname','$fname','$acesslevel','$address','$password')";
    mysqli_query($conn, $sql);
	header("location: /");
}

?>

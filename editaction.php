<?php
include 'db.php';
$id = $_GET['id'];
$fname = $_POST['lastname'];
$lname = $_POST['firstname'];
$acesslevel = $_POST['acesslevel'];
$address = $_POST['address'];
$password = $_POST['password'];
$button = $_POST['edit'];

if ($button == 'Edit!')
{
    mysqli_query($conn,"Update users Set fname='$fname',lname='$lname',accesslevel='$acesslevel',address='$address',password='$password' where id=$id");
	header("location: /");
}

?>

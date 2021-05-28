<?php

session_start();

// database connection code

$con = mysqli_connect('localhost', 'root', '','test');

// get the post records
$Name = $_POST['Name'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];

// database insert SQL code

$sql = "INSERT INTO `signup` (`Name`, `pwd`, `email`) VALUES ('$Name', '$pwd', '$email')";

// insert in database

mysqli_query($con, $sql);
header('location:login.html');
?>
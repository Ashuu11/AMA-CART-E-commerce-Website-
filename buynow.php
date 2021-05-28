<?php

session_start();

// database connection code
$con = mysqli_connect('localhost', 'root', '','test');

// get the post records
$Name = $_POST['Name'];
$number = $_POST['number'];
$email = $_POST['email'];
$address = $_POST['address'];
$drs = $_POST['drs'];
// database insert SQL code

$sql = "INSERT INTO `buynow` (`Name`, `number`, `email` , `address` , `drs` ) VALUES ('$Name', '$number', '$email' , '$address' , '$drs')";

// insert in database

mysqli_query($con, $sql);
header('location:Challenging.html');
?>
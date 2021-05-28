<?php

session_start();

// database connection code
$con = mysqli_connect('localhost', 'root', '','test');

// get the post records
$Name = $_POST['Name'];
$number = $_POST['number'];
$email = $_POST['email'];
$query = $_POST['query'];

// database insert SQL code

$sql = "INSERT INTO `feedback2` (`Name`, `number`, `email`, `query`) VALUES ('$Name', '$number', '$email', '$query')";

// insert in database

mysqli_query($con, $sql);
header('location:Challenging.html');
?>
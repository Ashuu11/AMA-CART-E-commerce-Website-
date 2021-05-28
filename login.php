<?php

session_start();

$con  = mysqli_connect('localhost','root',''); 

mysqli_select_db($con,'test');

$Name= $_POST['Name'];
$pwd=$_POST['pwd'];
$email=$_POST['email'];
$s="select * from signup where Name='$Name' && pwd='$pwd'";
$result= mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1){
   header('location:Challenging.html');
}
else
{
   echo "Wrong Credentials";
   header('location:login.html');
}
?>
<?php
$con=mysqli_connect("localhost","root","","buspassdb");
if($_POST["btn"])
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$profile=$_POST['profile'];
	$idcard=$_POST['idcard'];
	$idno=$_POST['idno'];
	$sql="insert into user(fname,lname,email,mobile,image,idcard,cardno)values('$fname','$lname','$email','$phone','$profile','$idcard','$idno')";
	$result=mysqli_query($con,$sql) or die (mysqli_error($con));
	if($result)
 {
 header('location:index.php');
 }
 else
 {
 	
 }
 }
 ?>
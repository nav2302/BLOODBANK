	<?php

if($_POST)
{
$conn= new mysqli('localhost','root','','bloodbank');
if($conn->connect_error)
{
	die("connection failed:". $conn->connect_error);
}
//echo"db connected successfully";
//echo"\n db is selected as test successfully";
$fname=$_POST["fname"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$bg=$_POST["bg"];
$cname=$_POST["cname"];
$add=$_POST["add"];
$email=$_POST["email"];
$cno=$_POST["cno"];
$password=$_POST["password"];
$id=$_POST["id"];
$sql="INSERT INTO `acceptor`(`fname`, `age`, `gender`, `bg`, `cname`, `add1`, `email`, `cno`, `password`, `id`) VALUES ('$fname','$age','$gender','$bg','$cname','$add','$email','$cno','$password','$id')";
$xyz=$conn->query($sql);
if($xyz==TRUE)
{
	echo"<br>&nbsp  The details you Entered are :-----";
	echo"<br><br>Name-", $_POST["fname"];
	echo"<br>Age-", $_POST["age"];
	echo"<br>Gender-", $_POST["gender"];
	echo"<br>Blood group-", $_POST["bg"];
	echo"<br>Consultants name-", $_POST["cname"];
	echo"<br>Address-", $_POST["add"];
	echo"<br>Email-", $_POST["email"];
	echo"<br>Contact number-", $_POST["cno"];
	echo"<br>ID - ", $_POST["id"];
}
else{
	echo"error".$sql."<br>".$conn->error;
}
$conn->close();
}
?>
<?php
include "config.php";
    $name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$contact=$_REQUEST['contact'];
	$insert="INSERT INTO `reg`(`name`,`email`,`contact`)VALUES('$name','$email','$contact')";
    $result=mysqli_query($con,$insert);
    if($result==TRUE)
	{
			header("location:regform.php");
	}
	else
	{
			echo "not";
	}
?>

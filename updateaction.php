<?php
	include"config.php";
	$id=$_REQUEST['id'];
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$contact=$_REQUEST['contact'];
	$update="UPDATE `reg` SET 	`name`='$name',`email`='$email',`contact`='$contact' WHARE `id`='$id'";
	$result=mysqli_query($con,$update);
	header("loction:detail.php");
?>

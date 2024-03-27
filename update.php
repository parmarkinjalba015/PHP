<?php 
	include "config.php";
	$id=$_REQUEST['id'];
	$sql="select*from `reg` WHERE`id`='$id'";
	$result=mysqli_query($con,$sql);
	$data=mysqli_fetch_assoc($result);
?>
<html>
	<head>
	</head>
	<body>
	<form action="updateaction.php?id= <?php echo $data['id'];?>" method="POST">
	<div class="container">
	<h1> update details <h1>
	<hr>
	<label for="name"> <b> name </b> </label>
	<input type="text" name="name" value="<?php echo $data['name'];?>" required></br>
	<label for="email"> <b> email </b> </label>
    <input type="email" name="email" value="<?php echo $data['email'];?>" required></br> 
	<label for="contact"> <b> contact </b> </label>
	<input type="number" name="contact" value="<?php echo $data['contact'];?>" required></br>
	<button type="submit" class="registration"> ragister </button>
	</div>
   </form>
  </body>
 </html>
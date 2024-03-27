<?php
	include "config.php";
    if(isset($_POST['btnsubmit']))
	{
		$unm=$_POST['unm'];
		$pwd=$_POST['pwd'];
		$sql="select * from `login` WHERE `unm`='$unm' and `pwd`='$pwd'";
		$result=mysqli_query($con,$sql);
		$count=mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		if($count>0)
		{
			session_start();
	        $_SESSION['unm']=$unm;
			header("location:home.php");
		}
	}
	else
	{
		echo "<script>alert('check your username and password')</script>";
	}
?>
<html>
	<body>
	<form method="POST" action="login.php"><br>
		Username: <input type="text" name="unm"><br>
		password:<input type="password" name="pwd"><br>
		<input type="submit" name="btnsubmit" value="login">
       </form>
   </body>
</html>

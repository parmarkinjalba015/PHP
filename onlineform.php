<html>  
<head>   
<title>  Registration Page  </title>  
</head>  
<body bgcolor="pink">  
<br>  
<br>  
<form action="onlineform.php" method="post">
 Firstname: <input type="text" name="fnm" size="15"/> <br> <br>  
 Middlename: <input type="text" name="mnm" size="15"/> <br> <br>  
 Lastname:  <input type="text" name="lnm" size="15"/> <br> <br>  
Course : <select name="course"> 
<option value="    "></option>  
<option value="BCA">BCA</option>  
<option value="BBA">BBA</option>  
<option value="B.Tech">B.Tech</option>  
<option value="MBA">MBA</option>  
<option value="MCA">MCA</option>  
<option value="M.Tech">M.Tech</option>  
</select>  
  
<br>  
<br>   
Gender :  
<br>  
<input type="radio" name="rd1" value="Male"/> male<br>  
<input type="radio" name="rd1"value="Female"/> female <br>  
<input type="radio" name="rd1" value="other"/> other
<br>  
<br>   
Phone :     
<input type="text" name="ph1" size="10"/> <br> <br>  
Address  
<br>  
<textarea cols="80" rows="5" name="add" value="address">  
</textarea>  
<br> <br>  
Email:  
<input type="email" id="email" name="email"/> <br>    
<br> 
Password:  
<input type="Password" id="pass" name="pass"> <br>   
<br> 
<input type="submit" name="btnsubmit" value="get data">
</form>
</body>
</html>

<?php
if(isset($_POST['btnsubmit']))
{
	$a=$_REQUEST['fnm'];
    $b=$_REQUEST['mnm'];
	$c=$_REQUEST['lnm'];
	$d=$_REQUEST['course'];
	$e=$_REQUEST['rd1'];
	$f=$_REQUEST['ph1'];
	$g=$_REQUEST['add'];
	$h=$_REQUEST['email'];
	$i=$_REQUEST['pass'];
	
	
	echo $a;
	echo"<br>";
	echo $b;
	echo"<br>";
	echo $c;
	echo"<br>";
	echo $d;
	echo"<br>";
	echo $e;
	echo"<br>";
	echo $f;
	echo"<br>";
	echo $g;
	echo"<br>";
	echo $h;
	echo"<br>";
	echo $i;
	
}
	?>
	
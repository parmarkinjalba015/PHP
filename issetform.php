<html>  
    <head>   
      <title>  Registration Page  </title>  
</head>  
<body bgcolor="pink">  
<br>  
<br>
<form action="issetform.php" method="POST">  
Name:<input type="text" name="nm"><br>
Email:<input type="email" id="email" name="email"> <br>    
Contact:<input type="number" name="contact"><br>
Address:<br> <textarea cols="80" rows="5" name="add" value="address">  
</textarea>  <br> <br> 
City:<select name="city">
		    <option value="Rajkot">Rajkot </option>
			<option value="Jamnagar">Jamnagar </option>
			<option value="Mumbai">Mumbai </option>
			<option value="Ahemdabad">Ahemdabad </option>
			<option value="Delhi">Delhi </option>
			</select> <br>
Course : <select name="course"> 
<option value="    "></option>  
<option value="BbA">BBA</option>  
<option value="BcA">BcA</option>  
<option value="B.Tech">B.Tech</option>  
<option value="MBA">MBA</option>   
<option value="MCA">MCA</option>  
<option value="M.Tech">M.Tech</option>  
</select>  
<br> <br>   
Gender :<input type="radio" name="rd1" value="Male"> male
<input type="radio" name="rd1"value="Female"> female 
<input type="radio" name="rd1" value="other"> other<br>
<input type="submit" name="btnsubmit" value="Get data">
 <input type="reset" name="clear" value="clear">
 </form>
 </body>
 </html>
 
 
 <?php
if(isset($_POST['btnsubmit']))
{
	$a=$_REQUEST['nm'];
	$b=$_REQUEST['email'];
	$c=$_REQUEST['contact'];
	$d=$_REQUEST['add'];
	$e=$_REQUEST['city'];
	$f=$_REQUEST['course'];
	$g=$_REQUEST['rd1'];
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
	
}
	?>
	

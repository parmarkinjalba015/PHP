<?php
include "config.php";
	$sql="SELECT * FROM `reg`";
	$result=mysqli_query($con,$sql);
?>
<html>
	<body>
	<h2 align="center"> registration ditails </h2>
	<table align="center" border="1px solid">
	<tr>
	<th> Id </th>
    <th> Name </th>
	<th> Email </th>
	<th> Contact </th>
	<th> delete </th>
	<th> update </th>
	</tr>
<?php
while ($data=mysqli_fetch_assoc ($result))
{ 
?>
	<tr>
	<td> <?php echo $data['id'];?> </td>
	<td> <?php echo $data['name'];?> </td>
	<td> <?php echo $data['email'];?> </td>
	<td> <?php echo $data['contact'];?> </td>
	<td> <a href="update.php? id=<?php echo  $data['id'];?>"> update </a> </td>
	<td> <a href=".php? id=<?php echo  $data['id'];?>"> delete </a> </td>
	</tr>
<?php
}
?>
</table>
</body>
</html>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="">
	<table width="50%" border="1" cellspacing="0" cellpadding="8">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>dob</th>
			<th>qualification</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
<?php
mysql_connect("localhost","root","");
$db=mysql_select_db("mitra");
$sql="select * from test";
$result=mysql_query($sql);
 while ($mit=mysql_fetch_array($result))
  {

  		echo"<tr>";
  			echo"<td>".$mit['id']."</td>";
			echo"<td>".$mit['name']."</td>";
			echo"<td>".$mit['dob']."</td>";
			echo"<td>".$mit['qualification']."</td>";
			echo"<th><a href='edit.php'>Edit</a></th>";
			echo"<th><a href='delete.php'>Delete</a></th>";
		echo"</tr>";
 }




?>



	</table>
</form>

</body>
</html>
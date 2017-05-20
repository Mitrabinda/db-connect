<?php
mysql_connect("localhost","root","");
$db=mysql_select_db("mitra");

$name=$_POST['name'];
$dob=$_POST['dob'];
$qualification=$_POST['qualification'];

$sql="insert into test(name,dob,qualification) values('$name','$dob','$qualification')";

mysql_query($sql);
echo "inserted";
header('location:display.php');

?>
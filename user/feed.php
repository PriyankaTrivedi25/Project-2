<?php
include "connectin.php";
$nm=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$msg=$_POST['message'];
$q="insert into feedback values('$nm','$email',$contact,'$msg',null)";
$result=mysql_query($q);
if ($result) {
	echo "$result";
	header("location:index.php");
}
else
{
	echo "error";
}
?>
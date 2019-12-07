<?php
include "connectin.php";
$nm=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$msg=$_POST['message'];
$q="insert into contact_us values('$nm',$contact,'$email',null,'$msg')";
$result=mysql_query($q);
if ($result) {
	header("location:index.php");
}
else
{
	echo "error";
}
?>
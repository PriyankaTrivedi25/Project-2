<?php
session_start();
include"connectin.php";
$email=$_POST['eid'];


$res=mysql_query("SELECT * FROM user WHERE email= '$email'");
if(mysql_num_rows($res)>0)
{
	header('location:signup.php?flag=2');
}
else{
	
$pass=$_POST['pwd'];
$cpass=$_POST['cpwd'];
$name=$_POST['uname'];
$phone=$_POST['con'];
$g=$_POST['gender'];
$add=$_POST['add'];
$city=$_POST['city'];
if($pass!=$cpass)
{
	header('location:signup.php?flag=1');
}
else
{
	$q="INSERT INTO `user`(`uname`, `ucontact`, `gender`, `add`, `email`, `pswd`) VALUES ('$name','$phone','$g','$add','$email','$pass')";
$r=mysql_query($q);
echo "$r";

header("location:login.php");
}
}
mysql_close();
?>
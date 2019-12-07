<?php
session_start();
include"connectin.php";
$email=$_POST["email"];
$password=$_POST["pwd"];
$q="SELECT  `email` `pswd` FROM `user` WHERE email='$email' and pswd='$password'";
$r=mysql_query($q);
$num=mysql_num_rows($r);
if($num>=1)
{

		$arr=mysql_fetch_row($r);
		$_SESSION['user']=$arr[0];
			header("location:index.php");
}	

else
{
	$_SESSION["msg"]="Invalid USERNAME or PASSWORD ...";
	header("location:login.php");

}

?>

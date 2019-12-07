<?php
session_start();
include("connectin.php");
$pid=$_GET['ref'];
echo $pid;
if(isset($_SESSION['user']))
{
	$user=$_SESSION['user'];
	$sql="select* from user where email='$user'";
	
	$r=mysql_query($sql);
	$row=mysql_fetch_array($r);
	$uid=$row['uid'];
	 $sql2="INSERT INTO `order`(`pid`, `uid`, `bid`) VALUES ($pid,'$uid','')";
		$result2=mysql_query($sql2);
	echo "$result2";
	header("location:index.php");
	}
else {
	$_session['login'] ="plz login";
	header("location:login.php");
}
?>
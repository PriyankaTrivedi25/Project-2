<?php
session_start();
include("connectin.php");
$pid=$_GET['ref'];

if(isset($_SESSION['user']))
{
	$user=$_SESSION['user'];
	$sql="select* from user where email='$user'";
	$r=mysql_query($sql);
	$row=mysql_fetch_array($r);
	$uid=$row['uid'];
	$che_pid="select * from order where pid=$pid";
	echo "$che_pid";
	$res_pid=mysql_query($che_pid);
	if (isset($res_pid)) {
	$sql2="UPDATE `resident`.`order` SET `set_bid` = '1' WHERE `order`.`pid` = $pid";	
	}
	else
	{
		$sql2="INSERT INTO `resident`.`order` (`pid`, `uid`, `bid`, `set_bid`) VALUES ('$pid', '$uid', NULL, '1');";
	
	}
		echo "$sql2";
	$result2=mysql_query($sql2);

	echo "<br>$result2";
	header("location:index.php");
	}
else {
	$_session['login'] ="plz login";
	header("location:login.php");
}
?>
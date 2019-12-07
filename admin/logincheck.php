<?php

session_start();
include "connectin.php";
$name=$_POST['a_id'];
$password=$_POST['a_pwd'];
$q="select * from admin where name='$name' and password='$password'";
$r=mysql_query($q);
$num=mysql_num_rows($r);
if($num>=1)
{

		$arr=mysql_fetch_row($r);
		$_SESSION['admin']=$arr[0];  
	    header("location:index.php");
}	  
else
{

		$_SESSION["msg"]="Invalid USERNAME or PASSWORD ...";
		
	header("location:login.php");

	}
     ?>        
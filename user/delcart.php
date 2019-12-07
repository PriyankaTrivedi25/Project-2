<?php
include("connectin.php");
$id=$_GET['ref'];
$sql=" DELETE FROM `resident`.`order` WHERE `order`.`pid` =$id ";
$result=mysql_query($sql);
echo "$sql";
if ($result) {
	header("location:index.php");
}
else
{
	echo "error";
}
?>
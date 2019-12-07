<?php
include "connectin.php";
$fid=$_GET["fid"];
$q="delete from feedback where id=$fid";
echo $q;
mysql_query($q);
header("location:feed.php");
?>
<?php
include "connectin.php";
$cid=$_GET["cid"];
$q="delete from contact_us where contact_id=$cid";
echo $q;
mysql_query($q);
header("location:contact.php");
?>
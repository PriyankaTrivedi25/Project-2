<?php
include "connectin.php";
$rid=$_GET["rid"];
$q="DELETE FROM `resident`.`property` WHERE `property`.`pid` = '$rid'";
echo mysql_error();
mysql_query($q);
$q1="DELETE FROM `resident`.`specification` WHERE `specification`.`pid` = '$rid'";
mysql_query($q2);
header("location:room.php");
?>
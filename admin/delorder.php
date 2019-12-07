<?php
include "connectin.php";
$rid=$_GET["id"];
$q="DELETE FROM `resident`.`order` WHERE `order`.`pid` = '$rid'";
echo $q;
$result=mysql_query($q);
if ($result) {
header("location:booking.php");
}
else
{
	echo "erro";
}

?>
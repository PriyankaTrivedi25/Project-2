<?php
include("connectin.php");
$pid=$_POST['rno'];
$rate=$_POST['rt'];
$area=$_POST['area'];
$city=$_POST['city'];
$sqft=$_POST['sqrt'];
$bhk=$_POST['bhk'];
$br=$_POST['br'];
$contact=$_POST['conno'];
$name=$_POST['cnm'];
$type=$_POST['type'];
$fac=$_POST['facing'];
$lan=$_POST['lan'];
$fur=$_POST['furnished'];
$water=$_POST['water'];
$dec=$_POST['desciption'];
$path1="";
$path="";
			if(($_FILES["file1"]["type"]=="image/jpeg" )|| ($_FILES["file1"]["type"]=="image/png") && ($_FILES["file1"]["size"]<20000000)) 
									{
										if(($_FILES["file1"]["error"]==0))
											$temp=explode("/",$_FILES["file1"]["type"]);		
											$path ="../user/img/$pid.$temp[1]";
											move_uploaded_file($_FILES["file1"]["tmp_name"],$path);
								    }	
if(($_FILES["file"]["type"]=="image/jpeg" )|| ($_FILES["file"]["type"]=="image/png") && ($_FILES["file"]["size"]<20000000)) 
									{
										if(($_FILES["file"]["error"]==0))
											$temp=explode("/",$_FILES["file"]["type"]);		
											$path1 ="../user/img/$rno.$temp[1]";
											move_uploaded_file($_FILES["file"]["tmp_name"],$path1);
								    }	
				

$sql= "UPDATE property SET city='$city', area='$area',image='$path',sqft='$sqft',bhk='$bhk', buy_rent='$br', owner_contact=$contact, owner_name='$name', type='$type', rate='$rate' WHERE pid='$pid'";
$r=mysql_query($sql,$conn);
$sql2= "UPDATE `specification` SET `facing`='$fac',`landmark`='$lan',`furnishing`='$fur',`water`='$water',`img`='$path1',`dec`='$dec' WHERE pid='$pid'";
echo "$sql2";
$r=mysql_query($sql2,$conn);
echo "$r";
if ($r) {
  header("location:room.php");
}
else
{
    echo "no any data edited";
}

//header("location:room.php");

?>
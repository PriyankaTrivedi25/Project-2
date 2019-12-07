<?php
include "connectin.php";
$rno=$_POST['rno'];
$rate=$_POST['rt'];
$area=$_POST['area'];
$city=$_POST['city'];
$sqft=$_POST['sqrt'];
$bhk=$_POST['bhk'];
$br=$_POST['br'];
$onum=$_POST['conno'];
$oname=$_POST['cnm'];
$type=$_POST['type'];
$facing=$_POST['facing'];
$lan=$_POST['lan'];
$furnished=$_POST['furnished'];
$water=$_POST['water'];
$dec=$_POST['desciption'];
$path1="";
$path="";
			if(($_FILES["file1"]["type"]=="image/jpeg" )|| ($_FILES["file1"]["type"]=="image/png") && ($_FILES["file1"]["size"]<20000000)) 
									{
										if(($_FILES["file1"]["error"]==0))
											$temp=explode("/",$_FILES["file1"]["type"]);		
											$path ="../user/img/$rno.$temp[1]";
											move_uploaded_file($_FILES["file1"]["tmp_name"],$path);
								    }	
			if(($_FILES["file"]["type"]=="image/jpeg" )|| ($_FILES["file"]["type"]=="image/png") && ($_FILES["file"]["size"]<20000000)) 
									{
										if(($_FILES["file"]["error"]==0))
											$temp=explode("/",$_FILES["file"]["type"]);		
											$path1 ="../user/img/$rno.$temp[1]";
											move_uploaded_file($_FILES["file"]["tmp_name"],$path1);
								    }	
				
$q="insert into property values('$rno','$city','$area','$path','$sqft','$bhk','$br',$onum,'$oname','$type','$rate')";
$q2="INSERT INTO `specification` values('$rno','$facing', '$lan','$furnished', '$water', '$path1','$dec');";
echo "$q2";
$res=mysql_query($q);
$res2=mysql_query($q2);
echo "$res2";
//echo mysql_error();

if($res)
{
	header("location:room.php");
}
else
echo "unsussesful";
?>
<html>
<head>
	<link href="css2/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css2/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<?php 
include("connectin.php");
session_start();?>
<div class="search-page">
	<div class="container">	
			<div class="col-md-9 search-grid-right">

<?php
if (isset($_SESSION['user'])) {
	$user=$_SESSION['user'];
	$sql_user=mysql_query("select * from user where email='$user'");
	$row_user=mysql_fetch_array($sql_user);
 $uid=$row_user['uid'];
	$sql_pro_ord=mysql_query("SELECT * FROM `order` WHERE `uid` = $uid");

	if (mysql_num_rows($sql_pro_ord)>0) {
	$j=0;
	while ($row_pro_ord=mysql_fetch_array($sql_pro_ord)) {
		$arr_pro_ord[$j++]=$row_pro_ord['pid'];
	}
	foreach ($arr_pro_ord as $key => $value) {
		$sql_pro_sel=mysql_query("select * from property where pid='$value'");
		while ($row_pro_sel=mysql_fetch_array($sql_pro_sel)) {?>
			<div class="hotel-rooms">
					<div class="hotel-left">
                                <tr>
						<span class="glyphicon glyphicon-bed" aria-hidden="true"></span><td><?php echo $row_pro_sel[0];?></td>
						
						<div class="hotel-left-grids">
							<div class="hotel-left-one">
								<a href="single.php"><img src="<?php echo $row_pro_sel['image'];?>" height=150px width=300px /></a>
							</div>
							<div class="hotel-left-two">
								
								<a href="specification2.php?id=<?php echo $row_pro_sel[0];?>"><h3>Specification</h3></a><br>
								<span style="font-size: 16px;"><span style="color: #9A2D2D;">City</span></span>:
							<td><?php echo $row_pro_sel['city'];?></td><br>
								 <span style="font-size: 16px;"><span style="color: #9A2D2D;">Area:</span></span> 
							<td><?php echo $row_pro_sel['area'];?></td><br>
							<span style="font-size: 16px;"><span style="color: #9A2D2D;">BHK:</span></span> 
							<td><?php echo $row_pro_sel['bhk'];?></td><br>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="hotel-right text-right">
						<h4><?php echo $row_pro_sel['rate'];?>/-</h4>
						<p>Best price</p>
					

	
						<a href="specification2.php?id=<?php echo $row_pro_sel[0];?>">continue </a></br></br>
						<a href="delcart.php?ref=<?php echo $row_pro_sel[0];?>">Delete</a>
					
					</div>

					<div class="clearfix"></div>
					</tr>
				</div>
		<?php }
	}
	}
}
else{
	echo "set nthi thyu";
}
?>
</div>
</div>
</div>
</body>
</html>
<?php
include("connectin.php");
session_start();
?>
<!DOCTYPE HTML>
<!--
	Monochromed by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>

		<title>Monochromed by TEMPLATED</title>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style1.css" />

		</noscript>

<!-- for-mobile-apps -->
<!-- //for-mobile-apps -->
<link href="css2/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css2/style.css" rel="stylesheet" type="text/css" media="all" />
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>	<body class="homepage">

	<!-- Header -->
		<div id="header">

			<div class="container">
					
				<!-- Logo -->
					<div id="logo">
					<img src="logo\1.jpg" style="opacity:0.6; "></img>
						</div>
				</div>
				
				 
				
		</div>
	<!-- Header -->
		<!-- Nav -->
		<center>
						<nav id="nav">
						<ul>
							<li><a href="index.html">Homepage</a></li>
							<li><a href="threecolumn.html">images</a></li>
							<li><a href="twocolumn1.html">Apartment</a></li>
							<li><a href="twocolumn2.html">Tenament</a></li>
							<li><a href="onecolumn.html">Contact us</a></li>
							<?php if (isset($_SESSION['user'])) {?>
							<li><a href="cart.php">Your Cart</a></li>
							<?php } ?>
						</ul>
		</center>
					</nav>
					
			
	<!--search-->
<div class="search-page">
	<div class="container">
		
			<div class="col-md-9 search-grid-right">
				
				<div class="hotel-rooms">
					<div class="hotel-left">
					 <?php
								include "connectin.php";
								$city=$_POST["pro_area"];
								$q="select * from property where area='$city'";
								$r=mysql_query($q);
								while($arr=mysql_fetch_array($r))
								{
							
								?>
                                <tr>
						<span class="glyphicon glyphicon-bed" aria-hidden="true"></span><td><?=$arr[0]?></td>
						
						<div class="hotel-left-grids">
							<div class="hotel-left-one">
								<a href="single.php"><img src="<?=$arr[3]?>" height=150px width=300px /></a>
							</div>
							<div class="hotel-left-two">
								
								<a href="specification.php?id=<?=$arr[0]?>"><h3>Specification</h3></a><br>
								<span style="font-size: 16px;"><span style="color: #9A2D2D;">City</span></span>:
							<td><?=$arr[1]?></td><br>
								 <span style="font-size: 16px;"><span style="color: #9A2D2D;">Area:</span></span> 
							<td><?=$arr[2]?></td><br>
							<span style="font-size: 16px;"><span style="color: #9A2D2D;">BHK:</span></span> 
							<td><?=$arr[5]?></td><br>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="hotel-right text-right">
						<h4><?=$arr[10]?>/-</h4>
						<p>Best price</p>
						<a href="specification.php?id=<?=$arr[0]?>">continue</a>				</div>
					<div class="clearfix"></div>
					</tr>
				</div>
				<div class="hotel-rooms">
					<div class="hotel-left">
						
						 <?php
			
								}
						?>
						
					
				
			</div>
					</div>
	</div>
</div>
</center>
<!--//search-->
<!--footer-->
<!--footer-->
<!-- copy -->
<div class="copy-right">
	<div class="container">
	<center>
	<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="images.html">images</a></li>						
					<li><a href="apartment.php">Apartment</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="feedback.php">Feedback</a></li>
				</ul>
				</center>
				
			<p> &copy; 2015 Classic Hotel. All Rights Reserved | Design by  priyanka,bhavya,uma</p>
	</div>
</div>

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
		<style>
/* Style The Dropdown Button */
/*.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>

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
		 

				

	<?php
	session_start();
								include "connectin.php";
								$city=$_GET["pro_city"];
								$_session['city']=$_GET['pro_city'];
								$b_r=$_GET["b"];
								$q="select area from property where city='$city' ";
								$r=mysql_query($q);
								while($arr=mysql_fetch_array($r))
								{
							
								?>
                     
	
	<?php
}
?>*/ 
    	
    	
		<!-- Nav -->
	
					
			
	<!--search-->
<div class="search-page">
	<div class="container">
		
			<div class="col-md-9 search-grid-right">
				
				<div class="hotel-rooms">
					<div class="hotel-left">
					 <?php
								include "connectin.php";
								if (isset($_GET['id'])) {
								$city=$_GET["city"];
							
								}

								else{
								$city=$_GET["pro_city"];
							}
								if (isset($_GET['id'])) 
			{
						if ($_GET['id']=='dc') 
					{
	
					$q="select *from property where city='$city' and buy_rent='buy'ORDER BY rate desc";
					}
				else
	 				{
						$q="select *from property where city='$city'and buy_rent='buy' ORDER BY rate";
					}
			}
			else{
			
								$q="select * from property where city='$city' and buy_rent='$b_r'";
				}
			
								$r=mysql_query($q);
								while($arr=mysql_fetch_row($r))
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
						
						<a href="specification.php?id=<?=$arr[0]?>">continue</a>
					</div>
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

<?php
include("connectin.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Classic Hotel a Hotel Category Flat Bootstrap Responsive Website Template | Search :: w3layouts</title>
<!-- for-mobile-apps -->
<!-- //for-mobile-apps -->

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
					

<form action="tsearch.php" method="POST">    	
				 <select size="1" name="pro_city" style="width:200px;height:25px">	

	<option value="jamnagar">Jamnagar</option>
    	<option  value="rajkot">Rajkot</option>
    	<option value="surat">Surat</option>
    	<option value="ahemdabad">Ahemdabad</option>
    	<option value="baroda">Baroda</option>
    	</select>

    	</input>
    	<div class="radiodiv">
<input type="radio" name="b" value="buy" checked="">Buy
    	<input type="radio" name="b" value="rent">Rent </div>
    	 <input type="submit" name="search" value="search" style="width:60px;height:30px;background-color:89c6cf"/>   
    	    </form>

		</div>
	<!-- Header -->
		<!-- Nav -->
		<form>
		<center>
						<nav id="nav">
						<ul>
							<li><a href="index.php">Homepage</a></li>
							<li><a href="images.html">images</a></li>
							<li><a href="apartment.php">Apartment</a></li>
							<li><a href="tenament.php">Tenament</a></li>
							<li><a href="contact.html">Contact us</a></li>
							<?php if (isset($_SESSION['user'])) {?>
							<li><a href="cart.php">Your Cart</a></li>
							<?php } ?>
							<li><div class="dropdown">
  Sort by</button>
  <div class="dropdown-content">
 <?php if (isset($_GET['rent'])) { ?>
     <a href="tenament.php?id=dc&&rent=rent">Price:Low to high</a>	
    <a href="tenament.php?rent=rent?id=ac">Price:High to low</a>
    <?php } else {?>
     <a href="tenament.php?id=dc">Price:High to low</a>	
    <a href="tenament.php?id=ac">Price:Low to high</a><?php } ?>
    </div>
</div></li>

						</ul>
		</center>
					</nav>
					</form>
<link href="css2/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css2/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- js -->

</head>
<body>
<!-- banner -->
<!-- //banner -->
<!--search--> 
<br>

<div class="search-page">
	<div class="container">	
			<div class="col-md-9 search-grid-right">
				
					 <?php
								include "connectin.php";
							if (isset($_GET['rent'])) {
								if (isset($_GET['id'])) {
							
								if ($_GET['id']=='dc') 
										{
	
												$q="select *from property where type='tenament' and buy_rent='rent'ORDER BY rate desc";
										}
									else
										{
									
												$q="select *from property where type='tenament' and buy_rent='rent' ORDER BY rate";
										}
									}
									else
									{
								$q="select * from property where type='tenament' and buy_rent='rent'";
							}
							}

							else
							{	
								if (isset($_GET['id'])) {
							
										if ($_GET['id']=='dc') 
										{
	
												$q="select *from property where type='tenament' and buy_rent='buy'ORDER BY rate desc";
										}
									else 
										{
									
												$q="select *from property where type='tenament' and buy_rent='buy' ORDER BY rate";
										}
									}
										else{			
										$q="select * from property where type='tenament' and buy_rent='buy'";
										}

							}
					


		$r=mysql_query($q);
		
								while($arr=mysql_fetch_row($r))
								{
									$b_r=$arr[6];
							
								?>

				<div class="hotel-rooms">
					<div class="hotel-left">
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
						<a href="specification.php?id=<?=$arr[0]?>">continue
						</a>
					</div>
					<div class="clearfix"></div>
					</tr>
				</div>
		
						
						 <?php
			
								}
						?>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
	</div>
</div>
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

			

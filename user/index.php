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
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>

	<body class="homepage">


	<!-- Header -->
		<div id="header">
<div class="loginid">
<?php if (isset($_SESSION['user'])) {?>
<a href="logout.php">Logout</a>
<?php }else{?>
<a href="login.php">Login</a>
<?php }?>
</div>
		
			<div class="container">
					
				<!-- Logo -->
					<div id="logo">
					<img src="logo\1.jpg" style="opacity:0.6; "></img>
						</div>
				</div>
				
			

<form action="sample.php" method="GET">    	
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
		</div>
	<!-- Header -->
		<!-- Nav -->
		<center>
						<nav id="nav">
						<ul>
							<li class="active"><a href="index.php">Homepage</a></li>
							<li><a href="images.html">images</a></li>
							<li><a href="apartment.php">Apartment</a></li>
							<li><a href="tenament.php">Tenament</a></li>
							<li><a href="contact.html">Contact us</a></li>
							<?php if (isset($_SESSION['user'])) {?>
							<li><a href="cart.php">Your Cart</a></li>
							<?php } ?>
							
						</ul>
		</center>
					</nav>
	
	<!-- Main -->
		<div id="main">
			<div class="container">
				<header>
					<h2>Residency</h2>
				</header>
				
				<div class="row">
				<?php
				include("connectin.php");
				$q="select * from property;";
				$r=mysql_query($q);
						for ($i=0; $i <8 ; $i++) { 
							$row=mysql_fetch_array($r);
						?>
					<div class="3u">
						<section>
						
					<a href="#" class="image full"><img src="<?php echo $row['image']?>" alt="" height="200px" width="200px" /></a>
					<a href="specification.php?id=<?php echo $row['pid']?>"><h3 style="color:black;">Specification</h3></a><br>
<span style="font-size: 16px;"><span style="color: #9A2D2D;">City:</span><?php echo $row['city']?></span>
							<br>
								 <span style="font-size: 16px;"><span style="color: #9A2D2D;">BHK:</span><?php echo $row['bhk']?></span> 
							<br>
							<span style="font-size: 16px;"><span style="color: #9A2D2D;">Prize:</span><?php echo $row['rate']?></span> 
							<br>
							
						<a href="Specification.php?id=<?php echo $row['pid']?>" class="button">Continue</a>					
						</section>
					</div>
					<?php
			}
			?>
									</div>
				
			
			</div>
		</div>
	<!-- Main -->

	<!-- Footer -->
		<div id="footer">
				<div id="copyright">
			<div class="container">
				<div class="col-md-3 ftr_navi ftr">
		
				
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="images.html">images</a></li>						
					<li><a href="apartment.php">Apartment</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="feedback.php">Feedback</a></li>
				</ul>

			</div>
			<p> &copy; 2016 Classic Hotel. All Rights Reserved | Design by  priyanka,bhavya,uma</p>
		</div>

	</body>
</html>
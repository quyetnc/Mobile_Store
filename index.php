<?php 
	session_start();	
	ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> M - Store </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="lib/header-footer/css/main.css" rel="stylesheet">
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script type="text/javascript" src="js/function1.js"></script>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/jquery.countdown.css" /> <!-- countdown --> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts -->  
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling --> 

    <link rel="stylesheet" type="text/css" href="lib/layoutcss/style.css">
    <link rel="stylesheet" type="text/css" href="lib/layoutcss/kinhlup.css">

    <script type="text/javascript" src="lib/Tab.js"></script>
	<script type="text/javascript" src="lib/kinhlup.js"></script>
	

</head> 
<body>
	<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<!-- //for bootstrap working -->
	<!-- header modal -->
    <?php
    include ("View/HeaderModal.php");
    ?>
	<!-- header modal -->
	<!-- header -->
	<?php
    include ("View/Header.php");
    ?>
	<!-- //header -->
	<!-- navigation -->
	<?php
    include ("View/Nav.php");
    ?>
	<!-- //navigation -->
	<!-- banner -->
    
   
	<?php
     if(!isset($_GET["Banner"]) && !isset($_GET["LS"]) && !isset($_GET["CT"]) )
     {
			include ("View/Banner.php");
	
     }
   
    ?>
	<!-- //banner --> 
	<!-- banner-bottom -->
	<?php
    // include ("View/BannerBottom.php");
    ?>
	<!-- //banner-bottom --> 

	<!-- new-products -->
        <?php

        if(isset($_GET["About"]))
        {
            include ("View/about.php");
        }
        else{
            if(isset($_GET["mod"]))
            {
                if($_GET["mod"]=="Search")
                    $url="Controller/Product/Search.php";
                else
                {
                    $url = "Controller/{$_GET['mod']}/";
                    if(isset($_GET['act']))
                        $url .= $_GET['act'].".php";
                    else
                        $url .= "DanhSach.php";
                }
            }
            else
                $url = "Controller/Product/DanhSachBySell.php";
            include_once($url);
            
            
        }
               
                ?>
	<!-- //new-products -->
	<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Top Brands</h3>
			<div class="sliderfig">
				<ul id="flexiselDemo1">			
					<li>
						<img src="images/tb1.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb2.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb3.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb4.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb5.jpg" alt=" " class="img-responsive" />
					</li>
				</ul>
			</div>
			<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>
	<!-- //top-brands --> 
	<!-- newsletter -->
    <?php
    // include ("View/Letter.php");
    ?>
	<!-- //newsletter -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-6 w3_footer_grid">
					<h3>Contact</h3>
					
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>255 An Dương Vương, Q5, <span>Ho Chi Minh City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:demon.bmt@gmail.com">demon.bmt@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>0949209394</li>
					</ul>
				</div>
				<div class="col-md-6 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info"> 
						<li><a href="index.php?About=1">About Us</a></li>
						<li><a href="https://www.facebook.com/M-Store-109005160570945">Contact Us</a></li>
						<!-- <li><a href="codes.html">Short Codes</a></li>
						<li><a href="faq.html">FAQ's</a></li>
						<li><a href="products.html">Special Products</a></li> -->
					</ul>
				</div>
				<!-- <div class="col-md-3 w3_footer_grid">
					<h3>Category</h3>
					<ul class="info"> 
						<li><a href="products.html">Mobiles</a></li>
						<li><a href="products1.html">Laptops</a></li>
						<li><a href="products.html">Purifiers</a></li>
						<li><a href="products1.html">Wearables</a></li>
						<li><a href="products2.html">Kitchen</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info"> 
						<li><a href="index.html">Home</a></li>
						<li><a href="products.html">Today's Deals</a></li>
					</ul>
					<h4>Follow Us</h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div> -->
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
				</div>
			</div>
			<div class="container">
				<p>&copy; 2019 M - Store. All rights reserved | Design by <a href="https://www.facebook.com/M-Store-109005160570945/">1999</a></p>
			</div>
		</div>
	</div>
	<!-- //footer --> 
	<!-- cart-js -->
	<!-- <script src="js/minicart.js"></script> -->
	<script>
        // w3ls.render();

        // w3ls.cart.on('w3sb_checkout', function (evt) {
        // 	var items, len, i;

        // 	if (this.subtotal() > 0) {
        // 		items = this.items();

        // 		for (i = 0, len = items.length; i < len; i++) { 
        // 		}
        // 	}
        // });
    </script>  
	<!-- //cart-js -->   
</body>
</html>
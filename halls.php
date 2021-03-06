<?php
    require_once('config/config.php');
    require('login_handler.php');
    $user = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Wedding Planners</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Events Planning Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="banner">
		<div class="container" >
			<!-- header -->
			<div class="w3_agile_menu" style="background: none;">
				<div class="agileits_w3layouts_nav">
					<div id="toggle_m_nav">
						<div id="m_nav_menu" class="m_nav">
							<div class="m_nav_ham w3_agileits_ham" id="m_ham_1"></div>
							<div class="m_nav_ham" id="m_ham_2"></div>
							<div class="m_nav_ham" id="m_ham_3"></div>
						</div>
					</div>
					<div id="m_nav_container" class="m_nav wthree_bg">
						<nav class="menu menu--sebastian">
							<ul id="m_nav_list" class="m_nav menu__list">
								<li class="m_nav_item active" id="m_nav_item_1"> <a href="index.php" class="link link--kumya"><i class="fa fa-home" aria-hidden="true"></i><span data-letters="Home">Home</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_2"> <a href="cart.php" class="link link--kumya"><i class="fa fa-cog" aria-hidden="true"></i><span data-letters="Cart">Cart</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_3"> <a href="about.html" class="link link--kumya"><i class="fa fa-info-circle" aria-hidden="true"></i><span data-letters="About Us">About Us</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_4"> <a href="work.html" class="link link--kumya"><i class="fa fa-building-o" aria-hidden="true"></i><span data-letters="Our Work">Our Work</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_6"> <a href="contact.html" class="link link--kumya"><i class="fa fa-envelope-o" aria-hidden="true"></i><span data-letters="Contact Us">Contact Us</span></a></li>
								<?php 
									if($user == null){
										echo '<li class="m_nav_item" id="moble_nav_item_7"> <a href="login.php" class="link link--kumya"><i class="fa fa-envelope-o" aria-hidden="true"></i><span data-letters="Login">Login</span></a></li>
										<li class="m_nav_item" id="moble_nav_item_8"> <a href="register.php" class="link link--kumya"><i class="fa fa-envelope-o" aria-hidden="true"></i><span data-letters="Register">Register</span></a></li>';
									}else{
										echo '<li class="m_nav_item" id="moble_nav_item_7"> <a href="index.php" class="link link--kumya"><i class="fa fa-envelope-o" aria-hidden="true"></i><span data-letters="'.$user.'">'.$user.'</span></a></li>';
									}
								?>
								
								
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="header">
				<div class="agileits_w3layouts_logo">
					<h1><a href="index.php">Wedding Planners</a></h1>
				</div>
				<div class="agileinfo_social_icons">
					<ul class="agileits_social_list">
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>	
            <!-- //header -->

            <div class="agile-ser" style="background: none;">
		<div class="container" style="background: none;">
			<h3 class="w3layouts_head" style="color:#fff">Locations Offered</h3>
			<p class="w3_para">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas 
assumenda est, omnis dolor repellendus.</p>
				<div class="agile-ser-tp">
                    <form action="halls.php" method="POST">
					<div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/14.jpg" class="img-responsive" alt="">
						</div>
						<h4 style="color:#fff;text-align:center"><?php $name = "Dream Theatre Wedding Place"; echo $name; ?></h4>
                        <h5 style="color:#fff;text-align:center;font-family: serif"><?php $cost = "100000"; echo "Cost: &#8377;".$cost;?> </h5>
                        <button type='submit' name = 'cart'>Add To Cart</button>
                    </div>
                    <div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/15.jpg" class="img-responsive" alt="">
						</div>
						<h4 style="color:#fff;text-align:center"><?php $name1 = "Trueno Destination Halls"; echo $name1;?></h4>
                        <h5 style="color:#fff;text-align:center;font-family: serif"><?php $cost1 = "150000"; echo "Cost: &#8377;".$cost1;?></h5>
                        <button type='submit' name = 'cart1'>Add To Cart</button>
                    </div>
                    
                    <div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/16.jpg" class="img-responsive" alt="">
						</div>
						<h4 style="color:#fff;text-align:center"><?php $name2 = "Fogo Halls and Banquets"; echo $name2;?></h4>
						<h5 style="color:#fff;text-align:center;font-family: serif"><?php $cost2 = "300000"; echo "Cost: &#8377;".$cost2;?></h5>
                        <button type='submit' name = 'cart2'>Add To Cart</button>
                    </div>
                    
                    
                    <div class="clearfix"> </div>
                    <div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/17.jpg" class="img-responsive" alt="">
						</div>
						<h4 style="color:#fff;text-align:center"><?php $name3 = "Sol Dream Halls and Services"; echo $name3;?></h4>
						<h5 style="color:#fff;text-align:center;font-family: serif"><?php $cost3 = "150000"; echo "Cost: &#8377;".$cost3;?></h5>
                        <button type='submit' name = 'cart3'>Add To Cart</button>
                    </div>
                    
                    <div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/18.jpg" class="img-responsive" alt="">
						</div>
						<h4 style="color:#fff;text-align:center"><?php $name4 = "Brisa Wedding Halls"; echo $name4;?></h4>
						<h5 style="color:#fff;text-align:center;font-family: serif"><?php $cost4 = "250000"; echo "Cost: &#8377;".$cost4;?></h5>
                        <button type='submit' name = 'cart4'>Add To Cart</button>
                    </div>
                    </form>
                    <div class="clearfix"> </div>
					
				</div>
		</div>
	</div>

        </div>
</div>

<?php

    if(isset($_POST['cart'])){
        $query = mysqli_query($con,"INSERT INTO orders VALUES ('$user','$name','$cost')");
    }
    if (isset($_POST['cart1'])) {
        $query = mysqli_query($con,"INSERT INTO orders VALUES ('$user','$name1','$cost1')");
    }
    if (isset($_POST['cart2'])) {
        $query = mysqli_query($con,"INSERT INTO orders VALUES ('$user','$name2','$cost2')");
    }
    if (isset($_POST['cart3'])) {
        $query = mysqli_query($con,"INSERT INTO orders VALUES ('$user','$name3','$cost3')");
    }
    if(isset($_POST['cart4'])){
        $query = mysqli_query($con,"INSERT INTO orders VALUES ('$user','$name4','$cost4')");
    }

?>


<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- menu -->
	<script type="text/javascript" src="js/main.js"></script>
<!-- //menu -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>

</body>
</html>
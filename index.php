<?php 
	session_start();
	 if(isset($_SESSION['username'])){
	 	header('location: loginData.php');
	 }
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crispa</title>
	<link href="stylesheet.css" rel="stylesheet" type="text/css">
	<link href="boilerplate.css" rel="stylesheet" type="text/css">
	<link href="mquery.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, inital-scale=1"/>
</head>

<body>
	<div class="wrap">
		

		<section class="header" id="header">
			<div class="group1366">
				<div class="headLog">
					<img src="Image/logo.png" alt="logo" class="headLogo">
				</div>
				<nav class="headMenu">
					<ul>
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#aboutUs">About us</a></li>
						<li><a href="#menu">Menu</a></li>
						<li><a href="#gallery">Gallery</a></li>
						<li><a href="#reviews">Review</a></li>
					</ul>
				</nav>
				<nav class="headIcon">
					<ul>
						<li><a href="#"><img src="Image/search.png" alt="searchIcon" class="searchIcon"></a></li>
						<li><a href="#"><img src="Image/cart.png" alt="cart" class="cart"></a></li>
						<li><a href="#"><img src="Image/user.png" alt="user" class="user" onClick="toggleMenu()"></a></li>
					</ul>
				</nav>

				<div class="sub-menu-wrap" id="subMenu">
					<div class="sub-menu">
						<div class="user-info">
							<h3>Hello, Vignesh</h3>
						</div>
						<hr>
						<a href="#" class="sub-menu-link">
							<img src="image/profile.png">
							<p>Edit Profile</p>
							<span>></span>
						</a>
						<a href="#" class="sub-menu-link">
							<img src="image/setting.png">
							<p>Settings</p>
							<span>></span>
						</a>
						<a href="#" class="sub-menu-link">
							<img src="image/help.png">
							<p>Help</p>
							<span>></span>
						</a>
						<a href="profile.php" class="sub-menu-link">
							<img src="image/logout.png">
							<p>Logout</p>
							<span>></span>
						</a>
					</div>
				</div>

			</div>
		</section>
		
		
		<section class="banner" id="banner">
			<div class="bannerImage">
			</div>
		</section>
		<section class="about-us" id="aboutUs">
			<div class="group1366">
				<div class="cont-a">
<!--					<h3>Welcome, <br> </h3>-->
<!--					<h2></h2>-->
					<h4>About Us</h4>
        			<h1>Best Food Idea <br> From whole World</h1>
        			<p>Craving some delicious Greek food? Maybe you’re in <br>
					the mood for a juicy steak? No matter what kind of <br> meal you have in mind, Crispa Restaurant is ready to <br> prepare it for you.</p>
					<p>Our diner serves breakfast all day, in addition to whole <br>
					some and flavorful dining options for lunch and dinner.  <br>From burgers to salads, seafood to pastas, you’ll find all  <br> kinds of hearty meals prepared fresh at Crispa Restaurant.</p>
        			<a href="#" class="btn" style="text-decoration: none;">Learn More</a>
				</div>
				<div class="cont-b">
					<img src="Image/burger-10956.png" alt="burger">
				</div>
			</div>
		</section>
		
		
		<section id="menu" class="menu">
			<div class="group1366">
				<div class="menuHead">
					<h4>Menu</h4>
					<h1>Explore Our Best Menu</h1>
					<p>It’s though mistake that you actually can grow you get rid of<br>
					   everything that is not essential to makihave to get bad. </p>
				</div>
				<div class="menubox-a">
					<div class="boxA">
						<div class="imgA"></div>
						<h3>CHEESY BURGER</h3>
						<a href="#" class="btn" style="text-decoration: none;">ADD TO CART</a>
					</div>
					<div class="boxB">
						<div class="imgB"></div>
						<h3>CRISPA SANDWICH</h3>
						<a href="#" class="btn" style="text-decoration: none;">ADD TO CART</a>
					</div>
					<div class="boxC">
						<div class="imgC"></div>
						<h3>SHAWARMA</h3>
						<a href="#" class="btn" style="text-decoration: none;">ADD TO CART</a>
					</div>
				</div>
				<div class="menubox-a">
					<div class="boxD">
						<div class="imgD"></div>
						<h3>CREAMY CAKE</h3>
						<a href="#" class="btn" style="text-decoration: none;">ADD TO CART</a>
					</div>
					<div class="boxE">
						<div class="imgE"></div>
						<h3>RICH SWEETS</h3>
						<a href="#" class="btn" style="text-decoration: none;">ADD TO CART</a>
					</div>
<!--
					<div class="boxF">
						<div class="imgF"></div>
						<h3>CRISPY CHICKEN</h3>
						<a href="#" class="btn" style="text-decoration: none;">ADD TO CART</a>
					</div>
-->
				</div>
			</div>
		</section>
		
		
		<section class="gallery" id="gallery">
			<div class="group1366">
				<div class="galleryHead">
					<h4>Gallery</h4>
					<h1>Explore Our Beautiful Gallery</h1>
					<p>It’s though mistake that you actually can grow you get rid of<br>
						everything that is not essential to makihave to get bad.</p>
				</div>
				<div class="gallerybox-a">
					<div class="boxA">
						<h1>BURGERS</h1>
				
					</div>
					<div class="boxB">
						<h1>CAKES</h1>
						
					</div>
					<div class="boxC">
						<h1>SNACKS</h1>
						
					</div>
				</div>
				<div class="gallerybox-a">
					<div class="boxD">
						<h1>CUP CAKE</h1>
						
					</div>
					<div class="boxE">
						<h1>FRESH JUICE</h1>
						
					</div>
<!--
					<div class="boxF">
						<h1>ICE CREAMS</h1>
						
					</div>
-->
				</div>
			</div>
		</section>
		
		
		<section class="foot-review" id="reviews">
			<div class="group1366">
				<div class="review">
					<div class="reviewHead">
						<h4>Review</h4>
						<h1>Explore Our Customers Love!</h1>
						<p>It’s though mistake that you actually can grow you get rid of<br>
						everything that is not essential to makihave to get bad.</p>
					</div>
					<div class="review-a">
						<div class="review-1">
							<div class="review-per">
								<div class="review-img1"></div>
								<h3>Saranya Durairaj</h3>
								<img src="Image/PngItem_4268703.png" class="rating" alt="rating">
								<p>First time experienced a spicy meal, always thought N.Indian cuisine is rich and buttery!</p>
							</div>
						</div>
						<div class="review-per">
							<div class="review-img2"></div>
							<h3>Bhagath</h3>
							<img src="Image/PngItem_4268703.png" class="rating" alt="rating">
							<p>First time experienced a spicy meal, always thought N.Indian cuisine is rich and buttery!</p>
						</div>
						<div class="review-per">
							<div class="review-img3"></div>
							<h3>Varsha</h3>
							<img src="Image/PngItem_4268703.png" class="rating" alt="rating">
							<p>First time experienced a spicy meal, always thought N.Indian cuisine is rich and buttery!</p>
						</div>
					</div>
					<div class="review-b">
						<div class="review-per">
							<div class="review-img1"></div>
							<h3>Sri Divya</h3>
							<img src="Image/PngItem_4268703.png" class="rating" alt="rating">
							<p>First time experienced a spicy meal, always thought N.Indian cuisine is rich and buttery!</p>
						</div>	
						<div class="review-per">
							<div class="review-img2"></div>
							<h3>Siva</h3>
							<img src="Image/PngItem_4268703.png" class="rating" alt="rating">
							<p>First time experienced a spicy meal, always thought N.Indian cuisine is rich and buttery!</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="footer" id="footer">
			<div class="group1366">
				<div class="footMob" id="footmobLogo">
							<img src="Image/logo.png" alt="logo">
					</div>
				<div class="container">
					<div class="footBox" id="footLogo">
							<img src="Image/logo.png" alt="logo">
					</div>
					<div class="footBox">
						<h4>Company</h4>
							<ul>
								<li><a href="#" style="text-decoration: none;">About Crispa</a></li>
								<li><a href="#" style="text-decoration: none;">Terms and Conditions</a></li>
								<li><a href="#" style="text-decoration: none;">Privacy Policy</a></li>
								<li><a href="#" style="text-decoration: none;">Career</a></li>
								<li><a href="#" style="text-decoration: none;">Address</a></li>
							</ul>
					</div>
					<div class="footBox">
						<h4>Menus</h4>
						<ul>
							<li><a href="#" style="text-decoration: none;">Burger</a></li>
							<li><a href="#" style="text-decoration: none;">Pizza</a></li>
							<li><a href="#" style="text-decoration: none;">Chicken</a></li>
							<li><a href="#" style="text-decoration: none;">Cake</a></li>
							<li><a href="#" style="text-decoration: none;">Juice</a></li>
						</ul>
					</div>
					<div class="footBox">
						<h4 class="mailHead">Subscribe Here</h4>
						<div class="mail">
							<input type="text" value="" placeholder="Enter Your Email ID">
							<button type="submit" class="btn">SUBSCRIBE</button>
						</div>
						<div class="cont">
							<h4>Location</h4>
							<p><span>CRISPA Pvt Ltd.</span> <br> 123, Near Image, <br> Nagercoil. <br> 04652-220381 </p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</body>

<script>
			let subMenu = document.getElementById("subMenu");
			
			function toggleMenu(){
				subMenu.classList.toggle("open-menu");
			}
		</script>
</html>
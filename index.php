<?php include 'view/header.php'; ?>
<?php if(!empty($_SESSION['admin'])) {
  header('Location: ./login/index.php');
} else if (!empty($_SESSION['member'])){
  header('Location: ./login/index.php');
}
?>
<div class="main-content">
	<div class="slider1">
<a href="/login/.?action=register" class="button">Register now to receive a discount on your purchase.</a>
		<h2>Our Products</h2>
		<div class="animation text1">
			<a class="button" href="./product/">
				<h1>Beef</h1>
			</a>
			<p>Our company sells only the highest quality beef available. All frozen meat packages are a great value.</p>

		</div><!-- end animation1 -->
		<div class="animation text2">
			<a class="button" href="./product/">
				<h1>Chicken</h1>
			</a>
			<p>We sell only the highest quality of chicken available. Check out our fine selection of white and dark meat packages today.</p>
		</div><!-- end animation2 -->
		<div class="animation text3">
			<a class="button" href="./product/">
				<h1>Pork</h1>
			</a>
			<p>Our seafood is fresh frozen daily and shipped in. Our fine selection of fish and shrimp is the best.</p>
		</div><!-- end animation3 -->
	</div><!-- end slider 1 -->

	<div class="slider2">
		<h2>About Us</h2>
		<div class="animation about">
			<div class="fish1 half">
				<img src="./img/transparent.png" alt="transparent opening for sprite image of person">
			</div>
		</div>
		<div class="animation about">
			<div class="fish2 half" >
				<img src="./img/transparent.png" alt="transparent opening for sprite image of person">
			</div>
		</div>
		<div class="animation about">
			<div class="fish3 half">
				<img src="./img/transparent.png" alt="transparent opening for sprite image of person">
			</div>
		</div>
	</div><!-- end slider 2 -->	
	

	<div class="slider3">
		<h2>Contact Us</h2>
		<p><a href="tel:1-828-275-7744">Phone (828) 275-7744</a></p>
		<p class="noShow"><a href="sms:1-828-275-7744">Text </a></p>
		<p class="noShow"><a href="mailto:Wilfredrthibodeau@gmail.com?Subject=Hello" target="_top">Email</a></p>
			<div id="map">map text</div>
	</div><!-- end slider 3 -->

</div>
<?php include 'view/footer.php'; ?>

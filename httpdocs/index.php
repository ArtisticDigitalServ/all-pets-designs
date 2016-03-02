<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<?php require('inc/head.php');?>
<body>
	<div id="container">
		<div id="content">
			<?php require('inc/header.php');?>
			<main>
			<article>
				<section id="slideshow">
					<figure class="slide active" id="slide0"><img src="/images/home-slides/slide01.jpg"/></figure>
					<figure class="slide next" id="slide1"><img src="/images/home-slides/slide02.jpg"/></figure>
					<figure class="slide" id="slide2"><img src="/images/home-slides/slide03.jpg"/></figure>
					<figure class="slide last" id="slide3"><img src="/images/home-slides/slide04.jpg"/></figure>
					<nav id="ss-nav">
						<button onclick="setSlide(0)" id="btn0"></button>
						<button onclick="setSlide(1)" id="btn1"></button>
						<button onclick="setSlide(2)" id="btn2"></button>
						<button onclick="setSlide(3)" id="btn3"></button>
						<?php $slideshow = true;?>
					</nav>
				</section>
				<div class="flex-container">
					<button class="bigbutton" style="background-position:<?php echo rand(-10, 90);?>% <?php echo rand(-40, 80);?>px"><span>Grooming</span></button>
					<button class="bigbutton" style="background-position:<?php echo rand(-10, 90);?>% <?php echo rand(-40, 80);?>px"><span>Boarding</span></button>
					<button class="bigbutton" style="background-position:<?php echo rand(-10, 90);?>% <?php echo rand(-40, 80);?>px"><span>Supplies</span></button>
					<img src="/images/pets/trixie-plant.jpg" class="third"/>
					<div class="twothird borderright">
						<h1>About All Pets Design</h1>
						<p>At our salon we groom every type of dog breed, cat breed, and even other creatures. 10% off your first visit and 20% off if you refer us to a friend.</p>
						<p>We have been in business for over a decade.</p>
						<p>We offer a full complement of services including bathing, grooming, clipping nails, ear cleaning, and teeth brushing among many more pampering essentials for your beloved family pets.</p>
					</div>
			</article>
			<aside>
				<img id="coupon" src="http://allpetsdesigns.com/images/coupon_10full.jpg" alt="10% off Full Service" />
				<div id="testimonials" class="accordion">
					<h3>testimonials</h3>
						<?php
							$result = $db->query("SELECT * FROM testimonials");
							$i=0;
							while ($pet = $result->fetch_object()){
								echo '<div class="section';
								//if ($i==0){echo ' active';}
								echo '">'.PHP_EOL;
								echo 	'<h4 onclick="accordionToggle(this)">'.$pet->name.'</h4>'.PHP_EOL;
								echo 	'<div class="content">'.PHP_EOL;
								echo 		$pet->testimonial.PHP_EOL;
								echo 	'</div>'.PHP_EOL;
								echo '</div>'.PHP_EOL;
								$i++;
							}
						?>
				</div>
				<div id="apd">
					<h3>All Pets Design</h3>
					<p>1010 Weiland Road<br />Buffalo Grove, IL 60089</p>
				</div>
				<div id="hours">
					<h3>Hours</h3>
					<p>Mon. - Sat. 8am - 5pm</p>
				</div>
			</aside>
			</main>
			<?php require('inc/footer.php');?>
		</div>
	</div>
</body>
</html>
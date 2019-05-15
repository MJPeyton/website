<!DOCTYPE html>
<html lang="en">
<head>
<title>MJPeyton.com</title>
<!-- Begin head.php INCLUDE -->
<?php require_once ('head.php'); ?>
<!-- End head.php INCLUDE -->
<style>
nav {
	background: none;
}
nav a {
	color: white;
}
.hamburger-inner, .hamburger-inner:before, .hamburger-inner:after {
	background-color: white;
}
</style>
</head>
<div class="picback">
	<header class="header-container">
		<!-- Begin nav.php INCLUDE -->
		<?php require_once 'nav.php'; ?>
		<!-- End nav.php INCLUDE -->
	</header>
	<body>
		<h1 style="text-shadow: 3px 3px 6px #000000;">Hi, I'm Matt.</h1>
		<h2 style="font-weight: 100; text-shadow: 3px 3px 6px #000000;">I use design and data to communicate big ideas.</h2>
</div>

<br>
<h3 style="text-align: center; font-size: 40px;">My Work</h3>
<h3 style="text-align: center;">Includes professional, consulting, and just-for-fun projects.</h3>

<div class="cardstack">
	<a href="/dashboard.php">
			<div class="card" data-aos="fade-up">
				<img class="cardimg" src="/img/tabdashboard.png">
				<div class="cardtext">
					<h3>Admissions Dashboard</h3>
					<p>View Project ><p>
				</div>
			</div>
		</a>

		<a href="/survey.php">
			<div class="card" data-aos="fade-up">
				<img class="cardimg" src="/img/gradanalysiscomp.png">
				<div class="cardtext">
					<h3>Interactive Survey Report</h3>
					<p>View Project ><p>
				</div>
			</div>
		</a>

	<a href="/evanston.php">
			<div class="card" data-aos="fade-up">
				<img class="cardimg" src="/img/EvPoster.png">
				<div class="cardtext">
					<h3>Similar Cities Poster</h3>
					<p>View Project ><p>
				</div>
			</div>
		</a>

		<a href="/northwestern_web.php">
			<div class="card" data-aos="fade-up">
				<img class="cardimg" src="/img/mschomecapture.png">
				<div class="cardtext">
					<h3>Website Redesign</h3>
					<p>View Project ><p>
				</div>
			</div>
		</a>

		<a href="/northwestern_web.php">
			<div class="card" data-aos="fade-up">
				<img class="cardimg" src="/img/nbavis.png">
				<div class="cardtext">
					<h3>NBA Trade Network</h3>
					<p>View Project ><p>
				</div>
			</div>
		</a>

		<a href="/northwestern_web.php">
			<div class="card" data-aos="fade-up">
				<img class="cardimg" src="/img/sotuvis.png">
				<div class="cardtext">
					<h3>State of the Union Text</h3>
					<p>View Project ><p>
				</div>
			</div>
		</a>

		<a href="/cta.php">
			<div class="card" data-aos="fade-up">
				<img class="cardimg" src="/img/cta_graphic.png">
				<div class="cardtext">
					<h3>CTA Bus Routes</h3>
					<p>View Project ><p>
				</div>
			</div>
		</a>

		

</div>
<script>
var $hamburger = $(".hamburger");
$hamburger.on("click", function(e) {
	$hamburger.toggleClass("is-active");
	$('.smenu').toggle("slide");
	});
</script>
<footer class="footer-container">
<!-- Begin footer.php INCLUDE -->
<?php require_once 'footer.php'; ?>
<!-- End footer.php INCLUDE -->
</footer>
<script>
    AOS.init({
  offset: 150, // offset (in px) from the original trigger point
  duration: 400, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
	});
  </script>
</body>
</html>
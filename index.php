<!DOCTYPE html>
<html lang="en">
<head>
<title>MJPeyton.com</title>
<!-- Begin head.php INCLUDE -->
<?php require_once ('head.php'); ?>
<!-- End head.php INCLUDE -->
<style>
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
<div class="dotback">
	<div class="cardstack">
		<div class="card" data-aos="fade-up">
			<div class="redimg">
			<a href="/northwestern_web.php"><img src="/img/redesign.png"></a>
			</div>
			<div class="cardtext">
				<h3>Website Redesign</h3>
				<p>I oversaw the redesign of the Master of Science in Communication program's website for Northwestern University.</p>
				<a href="/northwestern_web.php" class="buttonred" style="text-align: center;">View Project</a>
			</div>
		</div>

		<div class="card" data-aos="fade-up">
			<div class="cardtext">
				<h3>Admissions Dashboard</h3>
				<p>I designing an intuitive dashboard that allows stakeholders to independently parse the information they need quickly.</p>
				<a href="/dashboard.php" class="buttonblue" style="text-align: center;">View Project</a>
			</div>
			<div class="blueimg">
			<a href="/dashboard.php"><img src="/img/funnel.png"></a>
			</div>
		</div>

		<div class="card" data-aos="fade-up">
			<div class="redimg">
			<a href="/survey.php"><img src="/img/survey.png"></a>
			</div>
			<div class="cardtext">
				<h3>Interactive Survey Report</h3>
				<p>I created an interactive dashboard for the dean's office to explore the results of a school-wide graduate student survey.</p>
				<a href="/survey.php" class="buttonred" style="text-align: center;">View Project</a>
			</div>
		</div>

		<div class="card" data-aos="fade-up">
			<div class="cardtext">
				<h3>Drip Email Campaigns</h3>
				<p>I drafted, designed, and implemented a drip email campaign to increase yield at various points in the admissions process.</p>
				<a href="/drips.php" class="buttonblue" style="text-align: center;">View Project</a>
			</div>
			<div class="blueimg">
			<a href="/drips.php"><img src="/img/drip.png"></a>
			</div>
		</div>

				<div class="card" data-aos="fade-up">
			<div class="redimg">
			<a href="/d3vis.php"><img src="/img/graph.png"></a>
			</div>
			<div class="cardtext">
				<h3>D3 Visualizations</h3>
				<p>I have begun learning how to create data visualizations in D3.</p>
				<a href="/d3vis.php" class="buttonred" style="text-align: center;">View Project</a>
			</div>
		</div>
		
	</div>
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
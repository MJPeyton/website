<!DOCTYPE html>
<html lang="en">
<head>
<!-- Begin head.php INCLUDE -->
<?php require_once ('head.php'); ?>
<!-- End head.php INCLUDE -->
  <title>D3 Visualizations</title>
</head>
<header class="header-container">
  <!-- Begin nav.php INCLUDE -->
  <?php require_once 'nav.php'; ?>
  <!-- End nav.php INCLUDE -->
</header>
<body>
<img data-aos="zoom-in" class="icon" src="/img/graph.png" alt="D3 Visualization Icon">
  <h1 style="text-align: center;">D3 Visualizations</h1>
  <h2>I have begun learning how to create data visualizations in D3.</h2>
  <p>This is all new to me, so this is more of showing my progress than completed work.</p>
<div class="gray" data-aos="fade-up">
  <h3>NBA Trade Network</h3>
  <a href="http://www.mjpeyton.com/D3/NBA/index.html"><img style="max-width: 400px !important;" src="/img/nbavis.png"></a>
  <p>A network visualization of which NBA teams traded with each other during the 2017-2018 season. The data was parsed and cleaned in R and then presented in a D3 visualization.</p>
  <p><a href="http://www.mjpeyton.com/D3/NBA/index.html" class="buttonblue">View the visualization!</a></p>
</div>
<div data-aos="fade-up">
<h3>State of the Union Text</h3>
<a href="http://www.mjpeyton.com/D3/sotu/index.html"><img style="max-width: 400px !important;" src="/img/sotuvis.png"></a>
  <p>A comparison of what terms are more likely to be found in a Republican or Democratic State of the Union Address. The data was pulled and cleaned in R and then presented in a D3 visualization.</p>
  <p><a href="http://www.mjpeyton.com/D3/sotu/index.html" class="buttonblue">View the visualization!</a></p>
</div>
<div class="gray" data-aos="fade-up">
  <h3>CTA Bus Routs</h3>
  <a href="http://www.mjpeyton.com/D3/cta/index-old.html"><img style="max-width: 400px !important;" src="/img/ctavis.png"></a>
  <p>A visualization of ridership over time on each Chicago Transit Authority bus route. The data was parsed and cleaned in R and then presented in a D3 visualization.</p>
  <p><a href="http://www.mjpeyton.com/D3/cta/index-old.html" class="buttonblue">View the visualization!</a></p>
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
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Begin head.php INCLUDE -->
<?php require_once ('head.php'); ?>
<!-- End head.php INCLUDE -->
  <title>Evanston Data Project</title>
</head>
<header class="header-container">
  <!-- Begin nav.php INCLUDE -->
  <?php require_once 'nav.php'; ?>
  <!-- End nav.php INCLUDE -->
</header>
<body>
<h1 style="text-align: center;">CTA Bus Ridership</h1>
<p>These charts show the average ridership by month for each Chicago Transit Authority bus line in light purple. The dark blue line represents the route with the most growth, while the red line represents the route with the largest decline. </p>
                <p>Zoom in and out either by scrolling on the top chart or adjusting the edges of the bottom chart to get a more detailed look at a time period.</p>
                
                <div id="box1">
                    <h3>Route 146: +XX%</h3>
                </div>
                
                <div id="box2">
                    <h3>Route 9: -X%</h3>
                </div>

<?php require_once ('D3/CTA/cta_chart.php'); ?>

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
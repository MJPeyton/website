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
  <h1 style="text-align: center;">Evanston Data Project</h1>
  <h2>Using census data and Euclidean Distance, I attempted to find out what cities were most like Evanston, IL.</h2>
  <a href="https://github.com/MJPeyton/Evanston_Data_Contest" target="new"><img class="feature" data-aos="zoom-in"src="/img/EvPoster.png" alt="Redesign"></a>
  <p>The full code and R script files can be <a href="https://github.com/MJPeyton/Evanston_Data_Contest" target="new">found on my Github.</a>
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
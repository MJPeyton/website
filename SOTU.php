<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    svg {
      display:block;
      margin-right: auto;
      margin-left: auto;
    }
    </style>
<!-- Begin head.php INCLUDE -->
<?php require_once ('head.php'); ?>
<!-- End head.php INCLUDE -->
  <title>State of the Union Text Analysis</title>
</head>
<header class="header-container">
  <!-- Begin nav.php INCLUDE -->
  <?php require_once 'nav.php'; ?>
  <!-- End nav.php INCLUDE -->
</header>
<body>
<h1 style="text-align: center;">State of the Union Text Analysis</h1>
<p>An examination of vocabulary by party from 1981-2018</p>


<?php require_once 'd3/SOTU/index.php'; ?>

<h2>Of Note: Americans/American/America</h2>
<img data-aos="zoom-in" src="d3/SOTU/Americans.png" alt="American Breakdown"></a>
<p>The term with the most even rate of usage between the two parties is "american." Democrats are more likely to say "americans," which fits a larger pattern of words that speak to individuals such as "people," "care," "families," etc.
<p>Republican presidents on the other hand are much more likely to use the term "america," which again fits a broader pattern of talking about less tanglible terms such as "world," "government," "peace," etc.

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
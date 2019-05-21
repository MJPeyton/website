<!DOCTYPE html>
<html lang="en">
<head>
<!-- Begin head.php INCLUDE -->
<?php require_once ('head.php'); ?>
<!-- End head.php INCLUDE -->
  <title>Admissions Dashboard</title>
</head>
<header class="header-container">
  <!-- Begin nav.php INCLUDE -->
  <?php require_once 'nav.php'; ?>
  <!-- End nav.php INCLUDE -->
</header>
<body>

  <h1 style="text-align: center;">Admissions Dashboard</h1>
  <h2>I designing an intuitive dashboard that allows stakeholders to independently parse the information they need quickly.</h2>
  <img data-aos="zoom-in" class="feature" src="/img/tabdashboard.png" alt="Funnel Icon">
  <p>When Northwestern University’s Master of Science in Communication program hired me in 2015 to coordinate admissions, there was plenty of historical data stored in Salesforce, but no one knew how to parse it or use it to make decisions.</p>
  <p>One of my first tasks was to design a dashboard that showed the program’s current admissions numbers though the funnel while also comparing to previous years for context. I also added filters so that everyone from the director and to student service staff members could easily compare numbers for different populations.
  <div class="dark" data-aos="fade-up">
              <h3>Results</h3>
              <p>The accessible pand easy to use dashboard increased transparency for admissions numbers across the entire staff and greatly reduced the number of custom reports needed.</p>
              <img src="/img/dashboard-stealth.png" alt="Tableau admissions chart"/>
            </div>
  <div data-aos="fade-up">
  <h3>Dynamic Print Document</h3>
  <p>While the dashboard's main purpose is to offer a view of how the admissions cycle is progressing, I also decided it would be beneficial to examine how the makeup of the class looked throughout the year.</p>
  <p>I put together a dynamic page that refreshed daily to show the dynamics of the class so far so we could make better decisions regarding marketing targeting. This was formatted in letter size so it could be printed and brought to meetings with stakeholders who weren't accessing our dashboard regularly.</p>
  <img src="/img/classmakeup.png" alt="Tableau class makeup dashboard" style="width: 650px;"/>
  <br>
</div>
<div class="gray" data-aos="fade-up">
  <h3>Campaign Efficiency</h3>
  <p>With so many campaigns running at one time, as well as campaigns being started and stopped seasonally, it was important to me to create a view that looked at the whole picture of campaign efficiency.</p>
  <p>This chart shows not only the number and relative cost of each prospect, but also the average engagement of each channel, to see where we should be spending more money.</p>
<img src="/img/dashboard-campaign.png" alt="Tableau class makeup dashboard"/>
<br>
</div>
<div data-aos="fade-up">
  <h3>Heatmap</h3>
  <p>In order to fight a false perception of when prospects entered our funnel, I created a heatmap looking at six years of data to show that there was no overall pattern.</p>
<img src="/img/dashboard-heat.png" alt="Tableau class makeup dashboard"/>
<br>
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
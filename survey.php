<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="https://use.typekit.net/ihu5nyi.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css">
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <title>Interactive Survey Report</title>
</head>
<header class="header-container">
  <!-- Begin nav.php INCLUDE -->
  <?php require_once 'nav.php'; ?>
  <!-- End nav.php INCLUDE -->
</header>
<body>
<img data-aos="zoom-in" class="icon" src="/img/survey.png" alt="Survey Icon">
  <h1 style="text-align: center;">Interactive Survey Report</h1>
  <h2>I created an interactive dashboard for the dean's office to explore the results of a school-wide graduate student survey.</h2>
  <div class="dark" data-aos="fade-up">
              <h3>Results</h3>
              <p>The dashboard I created made it easy for the dean and her office to see the results of a comprehensive survey sent to over 1,000 graduate students across the entire School of Communication.</p>
              <img src="/img/NPS.png" alt="Dashboards showing Net Promotor Scores by program"/>
            </div>
            <div data-aos="fade-up">
            <h3>Deeper Analysis</h3>
            <p>In addition to a simple dashboard and report showing Net Promotor Scores by program and program type, I used the qualitative data gathered in survey to dig deeper into student satisfaction.</p>
            <img src="/img/gradanalysis.png" alt="Dashboard showing a gap analysis by program feature"/>
            <p>Looking at a single program's scores, however, didn't provide enough context to tell the whole story. I then developed a dashboard that allowed the user to compare two results, either by specific program or program type (ie MFA vs PhD).</p>
            <img src="/img/gradanalysiscomp.png" alt="Comparing two programs or program types"/>
            <p>The Dean and her office used these dashboards in understanding student sentiment, and the strategic planning.
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
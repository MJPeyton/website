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
  <title>Admissions Dashboard</title>
</head>
<header class="header-container">
  <!-- Begin nav.php INCLUDE -->
  <?php require_once 'nav.php'; ?>
  <!-- End nav.php INCLUDE -->
</header>
<body>
<img data-aos="zoom-in" class="icon" src="/img/funnel.png" alt="Funnel Icon">
  <h1 style="text-align: center;">Admissions Dashboard</h1>
  <h2>I designing an intuitive dashboard that allows stakeholders to independently parse the information they need quickly.</h2>
  <p>When Northwestern University’s Master of Science in Communication program hired me in 2015 to coordinate admissions, there was plenty of historical data stored in Salesforce, but no one knew how to parse it or use it to make decisions.</p>
  <p>One of my first tasks was to design a dashboard that showed the program’s current admissions numbers though the funnel while also comparing to previous years for context. I also added filters so that everyone from the director and to student service staff members could easily compare numbers for different populations.
  <div class="dark" data-aos="fade-up">
              <h3>Results</h3>
              <p>The accessible and easy to use dashboard increased transparency for admissions numbers across the entire staff and greatly reduced the number of custom reports needed.</p>
              <img src="/img/admissionsdash.png" alt="Tableau admissions dashboard"/>
            </div>
            <div class="gray" data-aos="fade-up">
  <h3>Class Makeup</h3>
  <p>While the dashboard's main purpose is to offer a view of how the admissions cycle is progressing, we also decided it would be beneficial to examine how the makeup of the class looked throughout the year.</p>
  <p>I put together a dynamic page that refreshed daily to show the dynamics of the class so far so we could make better decisions regarding marketing targeting.</p>
  <img src="/img/classmakeup.png" alt="Tableau class makeup dashboard" style="width: 600px;"/>
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
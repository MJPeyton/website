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
  <title>Drip Email Campaigns</title>
</head>
<header class="header-container">
  <!-- Begin nav.php INCLUDE -->
  <?php require_once 'nav.php'; ?>
  <!-- End nav.php INCLUDE -->
</header>
<body>
<img data-aos="zoom-in" class="icon" src="/img/drip.png" alt="Email Drip Icon">
  <h1 style="text-align: center;">Drip Email Campaigns</h1>
  <h2>I drafted, designed, and implemented a drip email campaign to increase yield at various points in the admissions process.</h2>
  <div class="dark" data-aos="fade-up">
              <h3>Results</h3>
              <p>These complex drip email programs increased conversion rates at every step of the sales funnel and resulted in over 43% growth in one program.</p>
              <img style="box-shadow: none;" src="/img/dripmaps.png" alt="A map of our one of our drip email campaign flows"/>
            </div>
            <div data-aos="fade-up">
              <h3>Flows</h3>
              <p>Each email drip flow came from analyzing three years of data. We primarily relied on incoming and exiting student surveys, as well as interviews and web analytics. We were able to target six distinct audience segments with seperate flows determined by their progress through the sales funnel.</p>
            </div>
            <div class="gray" data-aos="fade-up">
              <h3>Email Design</h3>
              <p>The design of each email followed Northwestern brand standards and focused portraying a professional yet inviting feel while following industry best practices. After some time, centralized offices at Northwestern adopted my design.</p>
              <img style="box-shadow: none;" src="/img/emails.png" alt="A map of our one of our drip email campaign flows"/>
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
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Begin head.php INCLUDE -->
  <?php require_once ('head.php'); ?>
  <!-- End head.php INCLUDE -->
  <title>Drip Email Campaigns</title>

  <style>
    img.full-width {
      max-width: 100% !important;
      box-shadow: none;
    }
  </style>

</head>
<header class="header-container">
  <!-- Begin nav.php INCLUDE -->
  <?php require_once 'nav.php'; ?>
  <!-- End nav.php INCLUDE -->
</header>

<body>
  <img data-aos="zoom-in" class="icon" src="/img/drip.png" alt="Email Drip Icon">
  <h1 style="text-align: center;">Drip Email Campaigns</h1>
  <h2>I drafted, designed, and implemented a drip email campaign to increase yield at various points in the admissions
    process.</h2>
  <div class="dark" data-aos="fade-up">
    <h3>Results</h3>
    <p>These complex drip email programs increased conversion rates at every step of the sales funnel and resulted in
      over 43% growth in one program.</p>
    <img style="box-shadow: none;" src="/img/dripmaps.png" alt="A map of our one of our drip email campaign flows" />
  </div>
  <div data-aos="fade-up">
    <h3>Flows</h3>
    <p>Each email drip flow came from analyzing three years of data. We primarily relied on incoming and exiting student
      surveys, as well as interviews and web analytics. We were able to target six distinct audience segments with
      seperate flows determined by their progress through the sales funnel.</p>
  </div>
  <img data-aos="fade-up" class="full-width" src="/img/test.gif">
  <div data-aos="fade-up">
    <p>Each email drip flow came from analyzing three years of data. We primarily relied on incoming and exiting student
      surveys, as well as interviews and web analytics. We were able to target six distinct audience segments with
      seperate flows determined by their progress through the sales funnel.</p>
    </div>
    <div data-aos="fade-up">
    <h3>Code test</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita aperiam laudantium veritatis. Delectus cumque inventore quidem quaerat quas, obcaecati voluptate veritatis earum consectetur quisquam quis possimus beatae tenetur molestiae aspernatur.</p>
    <code>
    # An example of computing the mean with variables<br>
    <br>
    mydata$sum <- mydata$x1 + mydata$x2<br>
    mydata$mean <- (mydata$x1 + mydata$x2)/2<br>
    </code>
  </div>
  <script>
    var $hamburger = $(".hamburger");
    $hamburger.on("click", function (e) {
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
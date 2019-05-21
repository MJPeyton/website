<!DOCTYPE html>
<html lang="en">
<head>
<!-- Begin head.php INCLUDE -->
<?php require_once ('head.php'); ?>
<!-- End head.php INCLUDE -->
  <title>Building Effective Presentations</title>
</head>
<header class="header-container">
  <!-- Begin nav.php INCLUDE -->
  <?php require_once 'nav.php'; ?>
  <!-- End nav.php INCLUDE -->
</header>
<body>

  <h1 style="text-align: center;">Building Effective Presentations</h1>
  <h2>I have worked as part of a consultant team preparing professionals for public speaking.</h2>
  <img data-aos="zoom-in" class="feature" src="/img/PPT-cover.png" alt="Powerpoint Presentation cover image">
  <p>When an architect and design professional came to our team looking to prepare for his book launch and a rebranding, I was tasked with coaching him on building and presenting effective talks.</p>
  <br>
  <div class="dark" data-aos="fade-up">
              <h3>Process</h3>
             <p>It was important to me that I not simply "clean up" the client's Powerpoint presentation, but to also walk him through a thought process that would help him build effective and persuasive presentations in the future.</p>
              <img src="/img/PPT-thought.png" data-aos="zoom-in" alt="A mindmap of my process preparing my presentation, which I used as a guide as we worked through his own."/>
            </div>
            <div data-aos="fade-up">
              <h3>Nuts and Bolts</h3>
              <p>Once we had his talking points outlined, we then turned to the details of an effective presentation including aesthetics and accessibility.</p>
              <img src="/img/PPT-font.png" data-aos="zoom-in">
              <p>Finally, we looked at what it would look like to more effectively present data to an audience that didn't have the same level as expertise.</p>
              <img src="/img/PPT-charts.png" data-aos="zoom-in">
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
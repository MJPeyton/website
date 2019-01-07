<!DOCTYPE html>
<html lang="en">
<head>
<!-- Begin head.php INCLUDE -->
<?php require_once ('head.php'); ?>
<!-- End head.php INCLUDE -->
<title>Portfolio</title>
</head>
<header class="header-container">
<!-- Begin nav.php INCLUDE -->
<?php require_once 'nav.php'; ?>
<!-- End nav.php INCLUDE -->
</header>
<body>
<h1 style="text-align: center;">Portfolio</h1>
<h2>Subtitle</h2>
<hr>
<h3>Web/UX Projects</h3>
<ul>
    <li><a href="/northwestern_web.php">MSC Website</a></li>
</ul>
<div class="gray">

<h3>Data Visualization Projects</h3>
<ul>
 <li><a href="/CTA/">CTA Bus Ridership</a></li>
 <li><a href="">Map Visualization</a></li>
 <li><a href="">State of the Union Text Analysis</a></li>
 <li><a href="">NBA Trade Network</a></li>
</ul>
</div>
<h3>Marketing Projects</h3>
<ul>
    <li><a href="">Tableau Dashboards</a></li>
    <li><a href="">Drip Email Campaigns</a></li>
</ul>
<div class="gray">
 <h3>Design Projects</h3>
 <ul>
 <li><a href="">OOH Ad Design</a></li>
</ul>
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
        </body>
        </html>
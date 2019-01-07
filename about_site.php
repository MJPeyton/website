<!DOCTYPE html>
<html lang="en">
<head>
<!-- Begin head.php INCLUDE -->
<?php require_once ('head.php'); ?>
<!-- End head.php INCLUDE -->
<title>About This Site</title>
</head>
<header class="header-container">
<!-- Begin nav.php INCLUDE -->
<?php require_once 'nav.php'; ?>
<!-- End nav.php INCLUDE -->
</header>
<body>
<h1 style="text-align: center;">About This Site</h1>

<p>This site was coded from scratch in Visual Studio Code.</p>

<p>The CSS file is based on the <a href="https://github.com/necolas/normalize.css">Normalize.css github.</a>

<p>The fonts are <a href="https://typekit.com/fonts/europa" target="_blank">Europa</a> from Adobe Typekit.

<p>The animations are from <a href="https://github.com/michalsnik" target="_blank">Michał Sajnóg's</a> <a href="https://github.com/michalsnik/aos" target="_blank">AOS Library</a></p>

<p>I created a design using Adobe XD.</p>
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
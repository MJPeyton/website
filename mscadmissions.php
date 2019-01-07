<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="normalize.css">
<link rel="stylesheet" href="https://use.typekit.net/ihu5nyi.css">
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<title>MSC Admission Decisions Graphs</title>
</head>
<header class="header-container">
<!-- Begin nav.php INCLUDE -->
<?php require_once 'nav.php'; ?>
<!-- End nav.php INCLUDE -->
</header>
<body>
<h1 style="text-align: center;">MSC Admissions Decisions</h1>
<div style="text-align:center;">
<video width="600" autoplay loop>
  <source id="vid" src="/img/3dchartrev.mp4" type="video/mp4" />
</video>
<script> 
    document.getElementById('vid').play(); 
</script> 
</div>
<h2 style="text-align: center;">Domestic 3D Plots</h2>
<ul>
<li><a href = "/R/admissions.html">GPA, Interview Rating, Age</a></p></li>
<ul style="padding=left: 20px;">
<li><a href = "/R/dom_admissions_CLP.html">Custom Leadership Program</a></p></li>
<li><a href = "/R/dom_admissions_HLP.html">Hybrid Leadership Program</a></p></li>
</ul>
<li><a href = "/R/dom_admissions_time.html">Domestic Decisions By Month</a></p></li>
</ul>
<h2 style="text-align: center;">International 3D Plots</h2>
<ul>
<li><a href = "/R/Int_admissions_Int_TOEFL_Age.html">Interview, TOEFL, Age</a></p></li>
<li><a href = "/R/Int_admissions_GPA_TOEFL_Age.html">GPA, TOEFL, Age</a></p></li>
</ul>

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
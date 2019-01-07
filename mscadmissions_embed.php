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
<title>About This Site</title>
</head>
<header class="header-container">
<!-- Begin nav.php INCLUDE -->
<?php require_once 'nav.php'; ?>
<!-- End nav.php INCLUDE -->
</header>
<body>
<h1 style="text-align: center;">R Projects</h1>
<h2 style="text-align: center;">Admission Decision 3D Plots</h2>
<div class="embed" style="text-align:center;">
<object data="/R/admissions.html" width="900" height="800">
    <embed src="/R/admissions.html" width="900" height="800"> </embed>
    Error: Embedded data could not be displayed.
</object><br>
<p>Full page: <a href = "/R/admissions.html">GPA, Interview Rating, Age</a></p>
<object data="/R/dom_admissions_time.html" width="900" height="800">
    <embed src="/R/dom_admissions_time.html" width="900" height="800"> </embed>
    Error: Embedded data could not be displayed.
</object><br>
<p>Full page: <a href = "/R/dom_admissions_time.html">GPA, Interview Rating, Age By Month</a></p>
<object data="/R/Int_admissions_Int_TOEFL_Age.html" width="900" height="800">
    <embed src="/R/Int_admissions_Int_TOEFL_Age.html" width="900" height="800"> </embed>
    Error: Embedded data could not be displayed.
</object><br>
<p>Full page: <a href = "/R/Int_admissions_Int_TOEFL_Age.html">Interview, TOEFL, Age</a></p>
<object data="/R/Int_admissions_GPA_TOEFL_Age.html" width="900" height="800">
    <embed src="/R/Int_admissions_GPA_TOEFL_Age.html" width="900" height="800"> </embed>
    Error: Embedded data could not be displayed.
</object><br>
<p>Full page: <a href = "/R/Int_admissions_GPA_TOEFL_Age.html">GPA, TOEFL, Age</a></p>

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
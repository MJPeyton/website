<!DOCTYPE html>
<html lang="en">
<head>
<title>About Matt</title>
<!-- Begin head.php INCLUDE -->
<?php require_once ('head.php'); ?>
<!-- End head.php INCLUDE -->
</head>
<header class="header-container">
<!-- Begin nav.php INCLUDE -->
<?php require_once 'nav.php'; ?>
<!-- End nav.php INCLUDE -->
</header>
<body>
<img data-aos="zoom-in" style="width: 300px; height: 300px; box-shadow: none; display: block; margin-right: auto; margin-left: auto;" src="/img/headshot.png">
<h1 style="text-align: center;">Hi, I'm Matt Peyton</h1>
<h2>I am a marketer who connects people with the tools they need to become successful.</h2>
<p>Throughout my career some of those tools have been literal, like cranes and heavy construction equipment, while others have been figurative, like a master’s degree from Northwestern University. No matter the setting, I have succeeded in educating prospective customers about complex products that represent a significant investment.</p>
<div class="frame">	
<div class="gray" data-aos="fade-up">
<div class="grid">
<div class="title">
<h3>Education</h3>
</div>
<div class="body">
<h3 style="color: #4E2A84;">MS Information Design and Strategy</h3>
<h3 style="color: #4E2A84; line-height: 1.3; font-size: 20px; margin-top: -10px;">Northwestern University</h3>
<h3 style="color: #4E2A84; line-height: 1.3; font-size: 18px; margin-top: -10px;">2017 - Present</h3>

<p>Courses include:
<ul>
<li>Effective Communication</li>
<li>Information Design and Architecture</li>
<li>User Research</li>
</ul>
</br>
<h3 style="color: #990000;">BA English and Journalism</h3>
<h3 style="color: #990000; line-height: 1.3; font-size: 20px; margin-top: -10px;">Indiana University</h3>
<h3 style="color: #990000; line-height: 1.3; font-size: 18px; margin-top: -10px;">2004-2008</h3>
</div>
</div>
</div>
<div class="grid" data-aos="fade-up">
<div class="title">
<h3>Work Experience</h3>
</div>
<div class="body">
<h3>Admissions and Marketing Coordinator</h3>
<h3 style="line-height: 1.3; font-size: 20px;">Master of Science in Communication Program, Northwestern University</h3>
<h4 style="font-weight: 100">November 2015 - Present</h4>
<ul>
<li>Oversaw a <a href="/northwestern_web.php">website redevelopment</a> to meet Northwestern’s standards of quality and to communicate the program’s value</li> 
<li>Successfully implemented Pardot, a leading marketing automation and reporting solution, to track each prospect’s engagement</li>
<li>Modernized marketing and advertising efforts by transitioning from radio and print to strategic digital placements</li>
<li>Identified marketing opportunities that drove deeper engagement and ROI, even if cost per conversion was initially higher</li>
<li>Launched new online/hybrid program one of the first at Northwestern growing to over 20% of total program</li>
<li>Serve as the initial point of contact for prospective students, hosts info sessions, and conducts admissions interviews</li>
<li>Oversee the Salesforce CRM including analytics, reporting, handling application files, and data security protocols</li>
<li>Design and draft copy for all marketing materials including fliers, emails, academic advising forms, and brochures</li>
</ul>
</br>
<div data-aos="fade-up">
<h3>Senior Copywriter</h3>
<h3 style="line-height: 1.3; font-size: 20px;">Winsby Inc</h3>
<h4 style="font-weight: 100">May 2013-March 2015</h4>
<ul>
<li>Managed all copywriting projects for the firm including emails, websites, advertisements, press releases, brochures, and flyers</li>
<li>Oversaw the drafting of materials, provided final proofing, and managed deadlines for large-scale projects</li>
<li>Streamlined systems to improve work flows, resulting in faster turnaround to customers and decreased copy errors</li>
</ul>
<br>
</div>
<div data-aos="fade-up">
<h3>Senior Account Manager</h3>
<h3 style="line-height: 1.3; font-size: 20px;">Winsby Inc</h3>
<h4 style="font-weight: 100">May 2013-March 2015</h4>
<ul>
<li>Oversaw all marketing planning and collateral creation for manufacturing and distribution clients around the world</li>
<li>Developed new business through advertising, email campaigns, trade show marketing, press releases, and targeted calling projects </li>
<li>Produced monthly metric reports incorporating web analytics, calling leads, and email engagement to measure success</li>

</ul>				
<button class="buttonblue">Download My Resume</button>
</div>
</br>
</br>
</div>
</div>
<div class="gray" data-aos="fade-up">
<div class="grid">
<div class="title">
<h3>Other Training</h3>
</div>
<div class="body">
<h3 style="color: #5A5A5A; line-height: 1.3; font-size: 24px;">Completed R Courses on DataCamp</h3>
<ul>
<li>Introduction to R</li>
<li>Intermediate R</li>
<li>Data Visualization with ggplot2</li>
<li>Data Maniuplate in R with dplyr</li>
<li>Correlation and Regression</li>
<li>Exploratory Data Analysis</li>
<li>Sentiment Analysis in R: The Tidy Way</li>
</ul>
</div>
</div>
</div>
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
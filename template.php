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
<title>Title</title>
</head>
<header class="header-container">
<!-- Begin nav.php INCLUDE -->
<?php require_once 'nav.php'; ?>
<!-- End nav.php INCLUDE -->
</header>
<body>
<h1 style="text-align: center;">H1 Title</h1>
<h2>Subtitle</h2>
<hr>
<p>In late 2015 I was hired at Northwestern University’s Master of Science in Communication program to coordinate marketing and admissions. The program, which had a 35-year history, was the first professional master's degree in communication in the country.</p>
<p>The goal of myself and the Director of Enrollment Management and Strategic Initiatives was to revamp our marketing efforts to move away from radio and out-of-home advertisements toward more targeted digital display and search ads.</p>
<h3>3rd Title</h3>
<p>We understood that in order to see results from our new focus, we first needed to overhaul our website. The three challenges that we identified were:
    <ul>
    <li>A confusing structure consisting of multiple menus and poor information architecture</li>
    <li>An unresponsive, outdated design that didn’t meet our standards of quality</li>
    <li>Messaging without a focus on the program’s value to our audience</li>
    </ul>
    <p>It quickly became apparent that a simple redesign wasn’t going to be effective.</p>
    <div class="gray">
    <h3>Menu Mania</h3>
    <p>The first step in this project was to convince stakeholders that our program needed a web presence that was independent but reflected our place at the larger university.</p>
    <p>The two top menus on our pages led away from our program to the larger school’s site. Someone interested in learning about our masters program might click on “Modules” or “Faculty” to across the top, and would suddenly find themselves with long lists that included materials and people from undergraduate, PhD, and other masters programs.</p>
    <p>Furthermore, the side menu navigation didn’t expand and collapse to reveal the architecture of the site, and instead required clicks to a page to reveal the subpages available.</p>
    <p>Finally, the url to our pages was http://www.communication.northwestern.edu/programs/ms_communication. While we could mask this for our homepage with a redirect from a shorter url, sharing internal pages was a headache.</p>
    <p>After a long negotiation with the web development team, we were able to move the program’s site to its own domain with our own menu structure.</p>
    <img src="/img/New MSC Menu.png" alt="Top Menu for new MSC website"/>
    <p>Through the top menu bar and the choice in lockup, we were able to demonstrate our relationship to the School of Communication while serving our prospective students better. We were also able to move the site to its own domain at http://msc.northwestern.edu.</p>
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
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
  <title>Website Redesign</title>
</head>
<header class="header-container">
  <!-- Begin nav.php INCLUDE -->
  <?php require_once 'nav.php'; ?>
  <!-- End nav.php INCLUDE -->
</header>
<body>
  <img data-aos="zoom-in" class="icon" src="/img/redesign.png" alt="Redesign Icon">
  <h1 style="text-align: center;">Website Redesign</h1>
  <h2>Tackling an unresponsive and confusing website on the fly for the Northwestern University Master of Science in Communication program.</h2>
  <p>In late 2015 I was hired at Northwestern University’s Master of Science in Communication program to coordinate marketing and admissions. The program, which had a 35-year history, was the first professional master's degree in communication in the country.</p>
  <p>The goal of myself and the Director of Enrollment Management and Strategic Initiatives was to revamp our marketing efforts to move away from radio and out-of-home advertisements toward more targeted digital display and search ads.</p>
  <div class="dark" data-aos="fade-up">
              <h3>Results</h3>
              <p>Since its launch, the new site has seen a 60% increase in time spent on site with a 30% decrease in bounce rate. Pages viewed per session also increased by 54%.</p>
              <img src="/img/bouncerate.png" alt="Bounce rate between old website and new"/>
            </div>
  <div data-aos="fade-up">
  <h3>Challenges</h3>
  <p>We understood that in order to see results from our new focus, we first needed to overhaul our website. The three challenges that we identified were:
    <ul>
      <li>A confusing structure consisting of multiple menus and poor information architecture</li>
      <li>An unresponsive, outdated design that didn’t meet our standards of quality</li>
      <li>Messaging without a focus on the program’s value to our audience</li>
    </ul>
    <p>It quickly became apparent that a simple redesign wasn’t going to be effective.</p>
    </div>
    <div class="gray" data-aos="fade-up">
      <h3>Menu Mania</h3>
      <p>The first step in this project was to convince stakeholders that our program needed a web presence that was independent but reflected our place at the larger university.</p>
      <p>The two top menus on our pages led away from our program to the larger school’s site. Someone interested in learning about our masters program might click on “Modules” or “Faculty” to across the top, and would suddenly find themselves with long lists that included materials and people from undergraduate, PhD, and other masters programs.</p>
      <p>Furthermore, the side menu navigation didn’t expand and collapse to reveal the architecture of the site, and instead required clicks to a page to reveal the subpages available.</p>
      <p>Finally, the url to our pages was http://www.communication.northwestern.edu/programs/ms_communication. While we could mask this for our homepage with a redirect from a shorter url, sharing internal pages was a headache.</p>
      <p>After a long negotiation with the web development team, we were able to move the program’s site to its own domain with our own menu structure.</p>
      <img src="/img/New MSC Menu.png" alt="Top Menu for new MSC website"/>
      <p>Through the top menu bar and the choice in lockup, we were able to demonstrate our relationship to the School of Communication while serving our prospective students better. We were also able to move the site to its own domain at http://msc.northwestern.edu.</p>
    </div>
    <div data-aos="fade-up">
    <h3>Information Architecture</h3>
    <p>The first sign that the site’s architecture was a problem was when I stumbled upon a FAQ page that listed 39 questions linking to long answers. These questions, which were very clearly central to a prospective student’s decision to attend our program, should have been answered in a clear way across the website. Otherwise, what was the point?</p>
    <img src="/img/Old-MSC-FAQ.png" alt="Old MSC site FAQ list of 39 items"/>
    <p>In discovering an architecture that worked for our site, we relied on three main sources. 
      <ul>
        <li>The first was a combination of the FAQs listed above, as well as questions that frequently came up in the staff’s conversations with prospective students. 
          <li>The second was research we had conducted that told us what about our program students found most important. 
            <li>Third, we outlined the experience of someone going from deciding to apply to the program, prioritizing what they would need to know.
            </ul></p>
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
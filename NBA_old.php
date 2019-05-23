<!DOCTYPE html>
<html lang="en">
<head>
<!-- Begin head.php INCLUDE -->
<?php require_once ('head.php'); ?>
<!-- End head.php INCLUDE -->
  <title>NBA Trade Network</title>
</head>
<header class="header-container">
  <!-- Begin nav.php INCLUDE -->
  <?php require_once 'nav.php'; ?>
  <!-- End nav.php INCLUDE -->
</header>
<body>
<h1 style="text-align: center;">NBA Trade Network</h1>
<h2 style="text-align: center;">2017-2018 Season</h2>
<p>This is a basic d3.js network showing the NBA teams who traded with each other in 2017-2018.</p>

<?php require_once ('d3/NBA/index.php'); ?>

<p>While learning d3.js, I have decided to create a visualization of the network created from a past season’s NBA trades. I was curious to see if any patterns or clusters would emerge in visualizing which teams traded with each other.
<p>After a quick search of a data set that was already formatted or could easily be scrapped from the internet, I decided to manually create a matrix using data found on Wikipedia. Since trades need to be equivalent, I did not need to create a directional network, which made the exercise easier. In cases of trades that involved more than two teams, I treated each trade piece individually. I considered counting transactions instead of items moved, but I decided to count each piece to demonstrate the scale of the trades.</p>
<img data-aos="zoom-in"src="d3/NBA/nbamatrix.png" alt="NBA Trade Matrix"></a>
<p>At first I had hoped to create a chord diagram, but with so many teams and the number of transactions, it was unhelpful in visualizing any relationships. I ultimately went with a standard network visualization created in D3. I reformatted my data from the matrix to a standard JSON format for network visualization and had a rough sketch of where I wanted to go.
<p>From there, I made some key visual tweaks to make the visualization more user-friendly. First, I inserted an ordinal scale for the colors so that each node was represented by the team’s main color. While this may not be helpful for a casual fan, those more familiar with NBA teams should be able to recognize most colors at a glance. In order to clean up the visualization, I removed the team names from view unless hovered over. This allows a little finer grain of information to be accessed after seeing the overall network shape. From there I altered the size of the nodes as well as the thickness and color of the lines to make the whole package more visually clear. I also made a minor change to the math that calculates the line thickness connecting each node. I added a multiplier before the Math.sqrt so that there was more variation in thickness between large and small trades. Lastly from an aesthetic standpoint, I used a Century Gothic, Futura, san-serif font family to mimic the font on NBA jerseys while using commonly accessible fonts.
<p>The final changes I made to the network was to tweak the force variables including gravity, distance, and charge, in order to show the whole network but leave enough space between nodes to create a glanceable view. This was mostly done by feel, but I was satisfied with the outcome.
<p>The network doesn’t show any clear clusters, and next steps for investigating this information would be to include multiple years of data to see if patterns emerge over time. One hypothesis is that in a given year a team is likely to trade with any team that meets their needs, but over times a team may be more likely to trade with someone they are familiar with. Future aesthetic changes could include layering a png of each team’s logo over the node to make visual exploration faster, especially when some colors are so close together.

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
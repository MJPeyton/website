<!DOCTYPE html>
<html lang="en">
    <style>
        .zoom {
        cursor: move;
        fill: none;
        pointer-events: all;
    }
    
    svg, wrapper {
        display: block;
        margin: 0 auto;
    }
    
    #box1 {
        display: inline-block;
        background-color: lightblue;
        padding: 5px 10px;
        width: 310px;
        text-align: center;
    }
    
    #box2 {  
        display: inline-block;
        background-color: #f7c5ba;
        padding: 5px 10px;
        width: 310px;
        text-align: center;
    }
    
    select {
        height: 25px;
        margin-bottom: 20px;
        width: 120px;
    }
        </style>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<title>Portfolio</title>
</head>

</header>
<body>
    <h1 style="text-align: center;">CTA Bus Ridership</h1>
    <h2>Average ridership per month from 2001-2017</h2>
  <hr>
                <p>These charts show the average ridership by month for each Chicago Transit Authority bus line in light purple. The dark blue line represents the route with the most growth, while the red line represents the route with the largest decline. </p>
                <p>Zoom in and out either by scrolling on the top chart or adjusting the edges of the bottom chart to get a more detailed look at a time period.</p>
                
                <div id="box1">
                    <h3>Route 146: +XX%</h3>
                </div>
                
                <div id="box2">
                    <h3>Route 9: -X%</h3>
                </div>
                

            <svg width="1400" height="800"></svg>
            <script src="https://d3js.org/d3.v4.min.js"></script>
            <script>
                
                var svg = d3.select("svg"),
                margin = {top: 20, right: 20, bottom: 110, left: 100},
                margin2 = {top: 650, right: 20, bottom: 30, left: 100},
                width = +svg.attr("width") - margin.left - margin.right,
                height = 600,
                height2 = 100;
                
                var parseTime = d3.timeParse("%m/%Y");
                
                var x = d3.scaleTime().range([0, width]),
                x2 = d3.scaleTime().range([0, width]),
                y = d3.scaleLinear().range([height, 0]),
                y2 = d3.scaleLinear().range([height2, 0]);
                
                var xAxis = d3.axisBottom(x),
                xAxis2 = d3.axisBottom(x2),
                yAxis = d3.axisLeft(y);
                
                var brush = d3.brushX()
                .extent([[0, 0], [width, height2]])
                .on("brush end", brushed);
                
                var zoom = d3.zoom()
                .scaleExtent([1, 16])
                .translateExtent([[0, 0], [width, height]])
                .extent([[0, 0], [width, height]])
                .on("zoom", zoomed);
                
                var line = d3.line()
                .x(function(d) { return x(d.date); })
                .y(function(d) { return y(d.rides); });
                
                var line2 = d3.line()
                .x(function (d) { return x2(d.date); })
                .y(function (d) { return y2(d.rides); });
                
                var clip = svg.append("defs").append("svg:clipPath")
                .attr("id", "clip")
                .append("svg:rect")
                .attr("width", width)
                .attr("height", height)
                .attr("x", 0)
                .attr("y", 0); 
                
                var Line_chart = svg.append("g")
                .attr("class", "focus")
                .attr("transform", "translate(" + margin.left + "," + margin.top + ")")
                .attr("clip-path", "url(#clip)");
                
                var focus = svg.append("g")
                .attr("class", "focus")
                .attr("transform", "translate(" + margin.left + "," + margin.top + ")");
                
                var context = svg.append("g")
                .attr("class", "context")
                .attr("transform", "translate(" + margin2.left + "," + margin2.top + ")");
                
                d3.csv("/D3/CTA/route_data.csv", function(d) {
                    d.date = parseTime(d.date);
                    d.rides = +d.rides;
                    return d;
                }, function(error, data) {
                    if (error) throw error;
                    
                    x.domain(d3.extent(data, function(d) { return d.date; }));
                    y.domain([0, d3.max(data, function (d) { return d.rides; })]);
                    x2.domain(x.domain());
                    y2.domain(y.domain());
                    
                    d3.selectAll('line');
                    
                    focus.append("g")
                    .attr("class", "axis axis--x")
                    .attr("transform", "translate(0," + height + ")")
                    .call(xAxis);
                    
                    focus.append("g")
                    .attr("class", "axis axis--y")
                    .call(yAxis);
                    
                    Line_chart.append("path")
                    .datum(data.filter(function(d) { return d.route == "146" }))
                    .attr("fill", "none")
                    .attr("class", "line")
                    .attr("id", "highlight1")
                    .attr("stroke", "#00a1de")
                    .attr("stroke-width", 3)
                    .attr("opacity", "1")
                    .attr("d", line);
                    
                    Line_chart.append("path")
                    .datum(data.filter(function(d) { return d.route == 9 }))
                    .attr("fill", "none")
                    .attr("class", "line")
                    .attr("stroke", "#f9461c")
                    .attr("stroke-width", 3)
                    .attr("opacity", "1")
                    .attr("d", line);
                    
                    Line_chart.append("path")
                    .datum(data)
                    .attr("fill", "none")
                    .attr("class", "line2")
                    .attr("stroke", "#522398")
                    .attr("stroke-width", 1)
                    .attr("opacity", ".1")
                    .attr("d", line);
                    
                    context.append("path")
                    .datum(data.filter(function(d) { return d.route == "146" }))
                    .attr("fill", "none")
                    .attr("stroke", "#00a1de")
                    .attr("stroke-width", 2)
                    .attr("d", line2);
                    
                    context.append("path")
                    .datum(data.filter(function(d) { return d.route == 9 }))
                    .attr("fill", "none")
                    .attr("stroke", "#f9461c")
                    .attr("stroke-width", 2)
                    .attr("d", line2);
                    
                    context.append("path")
                    .datum(data)
                    .attr("fill", "none")
                    .attr("stroke", "#522398")
                    .attr("stroke-width", 1)
                    .attr("opacity", ".1")
                    .attr("d", line2);
                    
                    context.append("g")
                    .attr("class", "axis axis--x")
                    .attr("transform", "translate(0," + height2 + ")")
                    .call(xAxis2);
                    
                    context.append("g")
                    .attr("class", "brush")
                    .call(brush)
                    .call(brush.move, x.range());
                    
                    svg.append("rect")
                    .attr("class", "zoom")
                    .attr("width", width)
                    .attr("height", height)
                    .attr("transform", "translate(" + margin.left + "," + margin.top + ")")
                    .call(zoom);
                    
                    svg.append("g")
                    .append("text")
                    .attr("fill", "#000")
                    .attr("transform", "rotate(-90)")
                    .attr("y", 120)
                    .attr("x", -25)
                    .attr("text-anchor", "end")
                    .text("Avg. Rides");
                    
                    console.log(data);
                    
                })
                
                function brushed() {
                    if (d3.event.sourceEvent && d3.event.sourceEvent.type === "zoom") return; // ignore brush-by-zoom
                    var s = d3.event.selection || x2.range();
                    x.domain(s.map(x2.invert, x2));
                    Line_chart.selectAll(".line").attr("d", line);
                    Line_chart.selectAll(".line2").attr("d", line);
                    focus.select(".axis--x").call(xAxis);
                    svg.select(".zoom").call(zoom.transform, d3.zoomIdentity
                    .scale(width / (s[1] - s[0]))
                    .translate(-s[0], 0));
                }
                
                function zoomed() {
                    if (d3.event.sourceEvent && d3.event.sourceEvent.type === "brush") return; // ignore zoom-by-brush
                    var t = d3.event.transform;
                    x.domain(t.rescaleX(x2).domain());
                    Line_chart.selectAll(".line").attr("d", line);
                    Line_chart.selectAll(".line2").attr("d", line);
                    focus.select(".axis--x").call(xAxis);
                    context.select(".brush").call(brush.move, x.range().map(t.invertX, t));
                }
                
            </script>
            <p>Tools: R, D3</p>
            <p>Source: site</p>
        </body>
        <script>
        var $hamburger = $(".hamburger");
        $hamburger.on("click", function(e) {
            $hamburger.toggleClass("is-active");
            $('.smenu').toggle("slide");
        });
        </script>
        <footer class="footer-container">
        <!-- Begin footer.php INCLUDE -->
        <!-- End footer.php INCLUDE -->
        </footer>
        </body>
        </html>
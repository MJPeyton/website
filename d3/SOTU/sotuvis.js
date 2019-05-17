var margin = {top: 20, right: 20, bottom: 30, left: 40},
    width = 960 - margin.left - margin.right,
    height = 960 - margin.top - margin.bottom;

/* 
 * value accessor - returns the value to encode for a given data object.
 * scale - maps value to a visual display encoding, such as a pixel position.
 * map function - maps from data value to display value
 * axis - sets up axis
 */ 

// setup x 
var xValue = function(d) { return d.D_Rate;}, // data -> value
    xScale = d3.scale.linear().range([0, width]), // value -> display
    xMap = function(d) { return xScale(xValue(d));}, // data -> display
    xAxis = d3.svg.axis().scale(xScale).orient("bottom");

// setup y
var yValue = function(d) { return d.R_Rate;}, // data -> value
    yScale = d3.scale.linear().range([height, 0]), // value -> display
    yMap = function(d) { return yScale(yValue(d));}, // data -> display
    yAxis = d3.svg.axis().scale(yScale).orient("left");
    
// setup fill color
var cValue = function(d) { return d.Rate_Diff;},
    color = d3.scale.linear()
    .domain([-3, 3])
    .range(["red", "blue"]);

// add the graph canvas to the body of the webpage
var svg = d3.select("body").append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

// add the tooltip area to the webpage
var tooltip = d3.select("body").append("div")
    .attr("class", "tooltip")
    .style("opacity", 0);

// load data
d3.json("d3/SOTU/data.json", function(error, data) {

// Fix Axis Scale
xScale.domain([0, d3.max(data, xValue)]);
yScale.domain([0, d3.max(data, xValue)]);

// x-axis
svg.append("g")
    .attr("class", "x axis")
    .attr("transform", "translate(0," + height + ")")
    .call(xAxis)
	.append("text")
    .attr("class", "label")
    .attr("x", width)
    .attr("y", -6)
    .style("text-anchor", "end")
    .text("Democratic Rate of Use");

// y-axis
svg.append("g")
    .attr("class", "y axis")
    .call(yAxis)
.append("text")
    .attr("class", "label")
    .attr("transform", "rotate(-90)")
    .attr("y", 6)
    .attr("dy", ".71em")
    .style("text-anchor", "end")
	.text("Republican Rate of Use");
	
// Add reference line
svg.append('line')
	.style('stroke', 'b16EB0')
	.style('stroke-width', '2px')
	.attr('x1', 0)
	.attr('y1', height)
	.attr('x2', width)
	.attr('y2', 0)
svg.append("text")
	.attr("class", "label")
	.attr("transform", "rotate(-45, 525, -880)" )
	.text("Even Rate of Use");

// draw dots
svg.selectAll(".dot")
     .data(data)
.enter().append("circle")
    .attr("class", "dot")
    .attr("r", 10)
    .attr("cx", xMap)
    .attr("cy", yMap)
    .style("opacity", .6)
    .style("fill", function(d) { return color(cValue(d));})

// Mouseover Effects
    .on("mouseover", function(d) {
        tooltip.transition()
            .duration(200)
			.style("opacity", .9);
			
        tooltip.html(d["word"])
            .style("left", (d3.event.pageX + 10) + "px")
			.style("top", (d3.event.pageY - 30) + "px")
			.style("background-color", color(cValue(d)))
			;
      })

// Add after d["word"] to add numbers
// + "<br/><br/> D Rate: " + xValue(d) 
//+ "<br/> R Rate: " + yValue(d)

    .on("mouseout", function(d) {
        tooltip.transition()
            .duration(200)
            .style("opacity", 0);

      });
});

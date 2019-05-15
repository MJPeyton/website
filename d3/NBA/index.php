<!DOCTYPE html>
<meta charset="utf-8">
<script src="https://d3js.org/d3.v3.min.js"></script>
<style>
    
    .link {
        stroke: #FA8320;
        opacity: .2;
    }
    
    .node text {
        stroke:#333;
        font-family: 'Century Gothic', 'Futura', sans-serif;
    }
    
    .node:not(:hover) text {
        display: none;
    }
    
    .node circle{

        fill:#555;
        cursor:pointer;
    }
    
</style>
<body>
    <script>
        
        var width = 1400,
        height = 1000
        
        var svg = d3.select("body").append("svg")
        .attr("width", width)
        .attr("height", height);
        
        var color = d3.scale.ordinal()
        .domain([
        "Atlanta Hawks",
        "Boston Celtics",
        "Brooklyn Nets",
        "Charlotte Hornets",
        "Chicago Bulls",

        "Cleveland Cavaliers",
        "Dallas Mavericks",
        "Denver Nuggets",
        "Detroit Pistons",
        "Golden State Warriors",

        "Houston Rockets",
        "Indiana Pacers",
        "LA Clippers",
        "LA Lakers",
        "Memphis Grizzlies",

        "Miami Heat",
        "Milwaukee Bucks",
        "Minnesota Timberwolves",
        "New Orleans Pelecans",
        "New York Knicks",

        "Oklahoma City Thunder",
        "Orlando Magic",
        "Philadelphia Sixers",
        "Phoenix Suns",
        "Portland Trail Blazers",

        "Sacramento Kings",
        "San Antonio Spurs",
        "Toronto Raptors",
        "Utah Jazz",
        "Washington Wizards"]
        
    )
        .range([    
        "#E03A3E",
        "#007A33",
        "#000000",
        "#1D1160",
        "#CE1141",

        "#6F263D",
        "#00538C",
        "#00285E",
        "#ED174C",
        "#006BB6",

        "#CE1141",
        "#002D62",
        "#ED174C",
        "#552583",
        "#6189B9",
        
        "#98002E",
        "#00471B",
        "#0C2340",
        "#0C2340",
        "#006BB6",
        
        "#007AC1",
        "#0077C0",
        "#006BB6",
        "#1D1160",
        "#E03A3E",
        
        "#5A2D81",
        "#C4CED4",
        "#CE1141",
        "#002B5C",
        "#002B5C"]);
        
        var force = d3.layout.force()
        .gravity(0.1)
        .distance(150)
        .charge(-1000)
        .size([width, height]);
        
        d3.json("d3/NBA/teams.json", function(json) {
            force
            .nodes(json.nodes)
            .links(json.links)
            .start();
            
            var link = svg.selectAll(".link")
            .data(json.links)
            .enter().append("line")
            .attr("class", "link")
            .style("stroke-width", function(d) { return Math.sqrt(d.weight*10); });
            
            var node = svg.selectAll(".node")
            .data(json.nodes)
            .enter().append("g")
            .attr("class", "node")
            .call(force.drag);
            
            node.append("circle")
            .attr("r","12")
            .attr("id", function(d) { return d.name })
            .style("fill", function(d) { return color(d.index); });
            
            node.append("text")
            
            .attr("dx", 15)
            .attr("dy", ".35em")
            .text(function(d) { return d.name });
            
            force.on("tick", function() {
                link.attr("x1", function(d) { return d.source.x; })
                .attr("y1", function(d) { return d.source.y; })
                .attr("x2", function(d) { return d.target.x; })
                .attr("y2", function(d) { return d.target.y; });
                
                node.attr("transform", function(d) { return "translate(" + d.x + "," + d.y + ")"; });
            });
        }); 
    </script>
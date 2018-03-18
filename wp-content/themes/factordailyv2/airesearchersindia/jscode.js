
/* -----------------Height and width for the SVG -------------*/
	
	var width 	= 	window.innerWidth,
//		height 	= 	window.innerHeight;
		height 	= 800,
		cr		= width / 100*0.05
		if(width < 500){
			height = 300
		}
		if(width > 1100){
			height = 900
		}
//	console.log("cr is"+ cr);
	


/* -----------------Defining SVG -------------*/

	var svg =d3 .select("#svgholder")
		.append("svg")
		.attr("height", height)
		.attr("width", width)
		.attr("class","img-responsive")
		.append("g")
		.attr("transform", "translate(0,0)")
//	work in progress	
//var view1text = "Researchers randomly distributed; the size of each circle represents their H-index. The colour of the circles represents the cities they are in/associated with."

//d3.select("#svgholder").insert("text","svg").text(view1text).attr('class','notes')

// Define the div for the tooltip
var div = d3.select("body").append("div")	
    .attr("class", "tooltip")				
    .style("opacity", 0);

/* -----------------The circle size -------------*/

	var radiusScale = d3.scaleSqrt().domain([1,2000]).range([cr * 10, cr * 300]);

/* ------------- Force X that decides the horizontal position ---------*/
	var forcex = function(d){ 		
//						return 20
						}

/* ------------- Force Y that decides the vertical position ---------*/
	var forcey = function(d){ return height / 4; }

/* ------------- Force that keeps the bubbles seperate ---------*/
	var forcecollide = d3.forceCollide(function(d){
			return radiusScale(d.air_hindex) + 2 // gap between bubbles
		}) ;

/* ------------- Make the bubbles as a group ?  ---------*/
	var lmargin = width / 3
		if(lmargin < 200){ lmargin = 200 }
	
	var tmargin = 320
		if(width < 600){ tmargin = 100 }

	//console.log("top margin" + tmargin);

	var simulation = d3.forceSimulation()
			.force("x", d3.forceX(lmargin ).strength(0.05))
			.force("y", d3.forceY( tmargin).strength(0.06))
			.force("force", forcecollide)
			


/* ------------- data binding with 'ready' as a function  ---------*/
	d3.queue()
		.defer(d3.csv,"http://localhost/wordpress/wp-content/themes/factordailyv2/airesearchersindia/airindia.csv")
		.await(ready)
//	d3.queue()
//		.defer(d3.csv,"https://factordaily.com/wp-content/themes/factordailyv2/airesearchersindia/airindia.csv")
//		.await(ready)

/* ------The circles according to data points and sizes ---------*/	
	function ready(error, datapoints){
				
		var circles = svg.selectAll(".scholars")
			.data(datapoints)
			.enter().append("circle")
			.attr("class", function(d){
				return d.air_city.split(' ').join('_').toLocaleLowerCase(); // class according to city

			})
		
		.attr("r", function(d){
			return radiusScale(d.air_hindex)
			//return d.air_hindex * cr; // radius accoring to hindex
		})
		.attr("stroke","#ff9900") // circle border
		.attr("fill", "white") // circle fill
		
/* --------------------------- The tooltip -----------------------*/
		.on('mouseover', function(d){
			   div.transition()		
                .duration(200)		
                .style("opacity", 1)
           
				div	.html(
						"<h3>"+	d.air_name + "</h3>"
						+"<p> H index: " + d.air_hindex + "</p>"
						+"<p> Total Citations: " +  d.air_citations + " </p>" 
						+"<p> Papers submitted: " + d.air_papers + " </p>" 
						+"<p> Expertise: " + d.air_expertise+ " </p>"
						+"<p> City: " +    d.air_city+ " </p>"
						)	
			
                .style("left", (d3.event.pageX) + "px")		
                .style("top", (d3.event.pageY - 28) + "px")
		})
		.on("mouseout", function(d) {		
            div.transition()		
                .duration(500)		
                .style("opacity", 0);	
        });
		
/* ------------- What happens on tick with the circles  ---------*/
		simulation.nodes(datapoints)
		.on('tick',ticked);

/* ------------- Change the circle size according to citation and H index  ---------*/
			d3.select('#bycitation')
				.on('click',function(){
				circles.attr('r',function(d){
					return radiusScale(d.air_citations / 80)
				}).attr('transform','scale(.2)')
				// ATTENTION -- working here to make the transition smooth
				//17-3-2018 7 AM
				
			d3.select('#byhindex')
				.attr('style','display:inline-block')
				
				d3.forceSimulation(circles)
				  .force('charge', d3.forceManyBody().strength(1))
				  .force('x', d3.forceX().x(function(d) {
					return 200;
				  }))

				})
		
			d3.select('#byhindex')
				.on('click',function(){
				circles.attr('r',function(d){
					return radiusScale(d.air_hindex)
				})
			})
		
/* ------------- Bring the bubbles together  ---------*/		
		d3.select("#combine").on("click",function(){	
			var newheight = d3.select("svg").attr('height')
				if(newheight > 800){
					d3.select("svg").attr("height", 800)	
				}
						d3.select('#byhindex')
				.attr('style','display:none')
				.attr('class','g-button')
				circles.attr('r',function(d){
					return radiusScale(d.air_hindex)
				})
			simulation
				.force("force", d3.forceCollide(function(d){
				return radiusScale(d.air_hindex) + 2
					}))
				.restart()
				.alphaTarget(0.08)
			d3.selectAll(".legend").remove();
			d3.selectAll("line").remove();
		})
		
		
		d3.select("#bycity").on("click",function(d){
			
			d3.select("svg").attr("height",2860)
			var legend = d3.nest().key( function(d) {
				return d.air_city;
				}).entries(datapoints)
				
			var i = 0;
			
			var y1gap = function(d){
							if(i++ === 1){
							return 70
							}else{
							return 35 * i
							}
						}
			
			var y2gap = function(d){
							if(i === 1){
							return 70
							}else{
							return 35 * i
							}
						}
			legend.forEach(function(d){ 
				i++ 
				d3.select("svg")
				.insert("line","g")
				  .attr('x1', 150)
				  .attr('y1', y1gap )				  
				  .attr('x2',1000)
				  .attr('y2',y2gap)
				  .attr('stroke', 'lightgrey')				  
				  .attr('strokeWidth', '.5pt')				
				
				d3.select("svg")
					.append("text")
					.text(d.key)
					.attr("class","legend")
					.attr('x',30)
					.attr('y',function(d){
					
					if(i === 1){
						return 70
					}else{
						return 35 * i
					}
					
				})

				simulation.stop();	
			
			d3.selectAll(".kolkata").attr('cy', function(){ return 70 })
			d3.selectAll(".warangal").attr('cy', function(){ return 135})
			d3.selectAll(".mumbai").attr('cy', function(){ return 205})
			d3.selectAll(".hyderabad").attr('cy', function(){ return 275}) 
			d3.selectAll(".bengaluru").attr('cy', function(){ return 345})
			d3.selectAll(".new_delhi").attr('cy', function(){ return 415})
			d3.selectAll(".kharagpur").attr('cy', function(){ return 485})
			d3.selectAll(".palo_alto").attr('cy', function(){ return 555})
			d3.selectAll(".chennai").attr('cy', function(){ return 625})
			d3.selectAll(".patna").attr('cy', function(){ return 695})
			d3.selectAll(".kanpur").attr('cy', function(){ return 765})
			d3.selectAll(".dhanbad").attr('cy', function(){ return 835}) 
			d3.selectAll(".patiala").attr('cy', function(){ return 905})
			d3.selectAll(".chandigarh").attr('cy', function(){ return 975})
			d3.selectAll(".pune").attr('cy', function(){ return 1025})
			d3.selectAll(".tiruppur").attr('cy', function(){ return 1115})
			d3.selectAll(".gurugram").attr('cy', function(){ return 1185})
			d3.selectAll(".raigad").attr('cy', function(){ return 1255})
			d3.selectAll(".ranchi").attr('cy', function(){ return 1325})
			d3.selectAll(".nitte").attr('cy', function(){ return 1395})
			d3.selectAll(".karnal").attr('cy', function(){ return 1465})
			d3.selectAll(".jaipur").attr('cy', function(){ return 1535})
			d3.selectAll(".guwahati").attr('cy', function(){ return 1605}) 
			d3.selectAll(".faridabad").attr('cy', function(){ return 1675})
			d3.selectAll(".bhubhaneshwar").attr('cy', function(){ return 1725}) 
			d3.selectAll(".thiruvananthapuram").attr('cy', function(){ return 1815})
			d3.selectAll(".noida").attr('cy', function(){ return 1885}) 
			d3.selectAll(".hooghly").attr('cy', function(){ return 1955})
				
		})

		})


		
		function ticked() {
			circles
				.attr("cx", function(d){
					  return d.x;
					  })
				.attr("cy", function(d){
					  return d.y;
					  })
			
		}
	}

/*------------ Button toggle colours-----------------*/

jQuery('button').click(function(){
	if(jQuery(this).hasClass('active')){
		jQuery(this).removeClass('active');
	}else{
		jQuery(this).siblings('.g-button').removeClass('active');
		jQuery(this).addClass('active');
	}
})
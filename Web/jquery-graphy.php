<script>/*
function makifyGraph( val1, val2 ){
	$("#chartdiv").replaceWith('<div id="chartdiv" style="height:450px;width:450px; "></div>'); 
	var ticks = ['Gas', 'Solar', 'Hydro', 'Oil', 'Wind', 'Wood'];
	$.jqplot('chartdiv',  [[10,20,30,40,50,60]], 
	{ title:'MAGICAL DATA',
	  axes: {
            // Use a category axis on the x axis and use our custom ticks.
            xaxis: {
                renderer: $.jqplot.CategoryAxisRenderer,
                ticks: ticks
            },
            // Pad the y axis just a little so bars can get close to, but
            // not touch, the grid boundaries.  1.2 is the default padding.
            yaxis: {
                pad: 1.05,
                tickOptions: {formatString: '$%d'}
            }
      },
	  seriesDefaults: {
	    renderer:$.jqplot.BarRenderer,
		pointLabels: { show: true, location: 'e', edgeTolerance: -15 },
        rendererOptions: {
            barPadding: 8,      // number of pixels between adjacent bars in the same
                                // group (same category or bin).
            barMargin: 10,      // number of pixels between adjacent groups of bars.
            barDirection: 'vertical', // vertical or horizontal.
            barWidth: 15,       // width of the bars.  null to calculate automatically.
            shadowOffset: 1,    // offset from the bar edge to stroke the shadow.
            shadowDepth: 3,     // nuber of strokes to make for the shadow.
            shadowAlpha: 0.8,   // transparency of the shadow.
        }
      }
	});
}*/
function makifyGraph( month = 1, cost = 0 ){
	$("#chartdiv").replaceWith('<div id="chartdiv" style="height:450px;width:450px; "></div>');
	var months = [ "January", "February", "March", "April", "May", "June", 
               "July", "August", "September", "October", "November", "December" ];
	var selectedMonthName = months[month-1];
	var lineSolar = [];
	for (var i=0; i<31; i+=1){
		lineSolar.push([i, i*i]);
	}
	var lineHydro = [];
	for (var i=0; i<31; i+=1){
		lineHydro.push([i, i+i]);
	}
	var lineWind = [];
	for (var i=0; i<31; i+=1){
		lineWind.push([i, i]);
	}
	var lineAvgCost = [];
	for (var i=0; i<31; i+=1){
		lineAvgCost.push([i, cost]);
	}
	var plot2 = $.jqplot ('chartdiv', [lineSolar, lineHydro, lineWind, lineAvgCost], {
      // Give the plot a title.
      title: 'Averages for ' + selectedMonthName,
      // You can specify options for all axes on the plot at once with
      // the axesDefaults object.  Here, we're using a canvas renderer
      // to draw the axis label which allows rotated text.
      axesDefaults: {
        labelRenderer: $.jqplot.CanvasAxisLabelRenderer
      },
      // An axes object holds options for all axes.
      // Allowable axes are xaxis, x2axis, yaxis, y2axis, y3axis, ...
      // Up to 9 y axes are supported.
	  series:[
		{label:'Solar'},
		{label:'Hydro'},
		{label:'Wind'},
		{label:'Avg Cost'}
		],
	  legend: {
        show: true,
        location: 'nw',     // compass direction, nw, n, ne, e, se, s, sw, w.
        xoffset: 12,        // pixel offset of the legend box from the x (or x2) axis.
        yoffset: 12,        // pixel offset of the legend box from the y (or y2) axis.
     },
      axes: {
        // options for each axis are specified in seperate option objects.
        xaxis: {
          label: "Day of Month",
          // Turn off "padding".  This will allow data point to lie on the
          // edges of the grid.  Default padding is 1.2 and will keep all
          // points inside the bounds of the grid.
          pad: 0,
		  min: 1,
		  max: 31
        },
        yaxis: {
          label: "Daily KW/H Usage (AVG)",
		  min: 0,
		  max: 150
        }
      }
    });
}
$(function(){
	makifyGraph();
});
</script>
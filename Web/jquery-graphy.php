<script>
function makifyGraph( val1, val2 ){
	$("#chartdiv").replaceWith('<div id="chartdiv" style="height:450px;width:450px; "></div>'); 
	$.jqplot('chartdiv',  [[10,20,30,40,50]], 
	{ title:'MAGICAL DATA',
	  axes:{yaxis:{min:0, max:100}},
	  series:[{renderer:$.jqplot.BarRenderer}],
	  seriesColors: ["#4bb2c5", "#c5b47f", "#EAA228", "#579575", "#839557"], 
	  seriesDefaults: {
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
}
$(function(){
	makifyGraph();
});
</script>
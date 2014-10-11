<script>
function makifyGraph( val1, val2 ){
	$("#chartdiv").replaceWith('<div id="chartdiv" style="height:300px;width:300px; "></div>'); 
	$.jqplot('chartdiv',  [[[val1, val2],[3,5.12],[5,13.1],[7,33.6],[9,85.9],[11,219.9]]]);
}
$(function(){
	makifyGraph();
});
</script>
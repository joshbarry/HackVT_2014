<?php
echo "Hello, World!";
?>
<script>
$(function(){
$.jqplot('chartdiv',  [[[1, 2],[3,5.12],[5,13.1],[7,33.6],[9,85.9],[11,219.9]]]);
});
</script>

<div id="chartdiv" style="height:400px;width:300px; "></div>
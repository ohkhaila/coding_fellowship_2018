
<script src = 'lessons/javascript/jquery.js'></script>

<!--events listener
something has to happen that triggers JavaScript... common way to do this is to say when something gets clicked JavaScript will happen  -->
<script type = 'text/javascript'>
	function toggleTheBox(){
		//console.log("We're in the function");
			$('.#theBox').toggle(); //toggle says show or dontn

	}
</script>
	<a href = '#' onclick = 'toggleTheBox();'>Toggle the box</a>
	<div class = 'theBox' style = 'background-color: #555';>
		This is the the theBox
	</div>

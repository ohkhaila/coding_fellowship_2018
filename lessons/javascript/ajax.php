		<script src = '/lessons/javascript/jquery.js'></script>
<script type="text/javascript">

function CallAjax(){
	$.post('/ajax_endpoint.php', {filter:'sgsdfg'}, function(Data){
		$('#result').html(Data);
	})
}

</script>


<h1>ajax test</h1>
<a href='#' onclick='CallAjax();'>Get the value from the server</a>
<div id='result'></div>

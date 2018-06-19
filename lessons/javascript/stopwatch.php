<html>
	<head>
		<script src = '/lessons/javascript/jquery.js'></script>
		<link rel = "stylesheet" href ='/lessons/javascript/js.css'/>
	 <head>
	 	<title> JavaScript Stop Watch </title>
		<style text="text/css"> </style>
		 <script type="text/javascript"> </script>
	 </head>
	 <body>
			 <div id = 'stopWatch'>
				 <p id = 'time'> Time : 00:00:00 </p>
				 <button  id = 'startButton' name = 'start' type = 'button'>Start</button>
					 <button  id = 'stopButton' name = 'stop' type = 'button'>Stop</button>
					 <button  id = 'clearButton' name = 'clear' type = 'button'>Clear</button>
						<p id="fulltime"> </p>
			 </div>
		</body>
</html>

		<script type = 'text/javascript'></script>
		<script>



			function stopWatch( ) { // javascript statement here
				clear = setTimeout( function ( ) { // javascript statement here
				 }, 1000 ); } Or var stopWatch = function ( ) { // javascript statement here
					 clear = setTimeout( "stopWatch( )", 1000 ); }
		//javascript variable that sets numbers to 0
		// update the numbers when you press the startButton
		//save the numbers when you press the stopButton
/*
		var hours = Math.floor(totalSeconds / 3600 );
		totalSeconds = totalSeconds % 3600;

		var minutes = Math.floor(total_seconds / 60);
		total_seconds
		//new method below

		var count = 0;
		var clearTime;
		var seconds = 0;
		var minutes = 0;
		var hours = 0;
		var clearState; //not sure what this does yet

		function startWatch(){
			if (seconds === 60){
				++minutes;
				seconds = 0;
			}
			if(minutes === 60){
				minutes = 0;
				hours = hours + 1;
			}
		}
		var x = $('#stop');
		x.html = 'Time: ' + getHours + mins + secs;
		seconds
*/

		//copy code
		// initialize your variables outside the function

		 var count = 0;
		 var clearTime;
		 var seconds = 0, minutes = 0, hours = 0;
		 var clearState;
		 var secs, mins, gethours ;
		 function startWatch( ) { /* check if seconds is equal to 60 and add a +1 to minutes, and set seconds to 0 */
			 if ( seconds === 60 ) { seconds = 0; minutes = minutes + 1; } /* you use the javascript tenary operator to format how the minutes should look and add 0 to minutes if less than 10 */
			 mins = ( minutes < 10 ) ? ( '0' + minutes + ': ' ) : ( minutes + ': ' ); /* check if minutes is equal to 60 and add a +1 to hours set minutes to 0 */
			 if ( minutes === 60 ) { minutes = 0; hours = hours + 1; } /* you use the javascript tenary operator to format how the hours should look and add 0 to hours if less than 10 */
			 gethours = ( hours < 10 ) ? ( '0' + hours + ': ' ) : ( hours + ': ' ); secs = ( seconds < 10 ) ? ( '0' + seconds ) : ( seconds ); // display the stopwatch var x = document .getElementById("timer"); x.innerHTML = 'Time: ' + gethours + mins + secs; /* call the seconds counter after displaying the stop watch and increment seconds by +1 to keep it counting */ seconds++; /* call the setTimeout( ) to keep the stop watch alive ! */ clearTime = setTimeout( "startWatch( )", 1000 ); } // startWatch( ) //create a function to start the stop watch
 function startTime( ) { /* check if seconds, minutes, and hours are equal to zero and start the stop watch */
 if ( seconds === 0 && minutes === 0 && hours === 0 ) { /* hide the fulltime when the stop watch is running */
	 var fulltime = document.getElementById( "fulltime" ); fulltime.style.display = "none"; /* hide the start button if the stop watch is running */
	 this.style.display = "none"; /* call the startWatch( ) function to execute the stop watch whenever the startTime( ) is triggered */
	 startWatch( ); } // if () } // startTime() /* you need to bind the startTime( ) function to any event type to keep the stop watch alive ! */ window.addEventListener( 'load', function ( ) { var start = document .getElementById("start"); start.addEventListener( 'click', startTime ); }); // startwatch.js end
		</script>

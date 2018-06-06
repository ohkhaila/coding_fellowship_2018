<?php
include('init.php'); ?>
<html>
	<head>
		<title>Javascript is Cool	</title>
		<!-- You can place any number of scripts in an HTML document.
Typically, the script tag is placed in the head of the HTML document -->
		<script>
			document.write("<h3>Javascript in head</h3>");
		</script>
		<!-- //to use an external script, put the name of the script file in the src (source) attribute of the <script> getAllBlogPosts -->
		<html>
			<head>
				<title>issa title</title>
				<script src = "demo.js"></script>
<!-- You can place an external script reference in <head> or <body>, whichever you prefer.
The script will behave as if it were located exactly where the <script> tag is located.
Placing a JavaScript in an external file has the following advantages:
- It separates HTML and code.
- It makes HTML and JavaScript easier to read and maintain.
- Cached JavaScript files can speed up page loads. -->
	</head>
	<body>
		<p> The three core languages in web pages are HTML, CSS, and JavaScript</p>
		<h3>Script</h3>
			<script>
				document.write("The script tag can take two attributes (language and type) which specify the scripts type")
				//the language attribute is deprecated, and should not be used.
			</script>
			<script type = "text/javascript">
			//		alert("This is an alert box!");
			//		An alert box is used when you want to ensure that information gets through to the user.
			// When an alert box pops up, the user must click OK to proceed.
			// The alert function takes a single parameter, which is the text displayed in the popup box.
			</script>
		<!-- <h3>Prompt</h3>
			<script>
				var user = prompt("Please enter your name");
				alert(user);
				// When a prompt box pops up, the user will have to click either OK or Cancel to proceed after entering the input value.
				// If the user clicks OK, the box returns the input value. If the user clicks Cancel, the box returns null.
				//
				// The prompt() method takes two parameters.
				// - The first is the label, which you want to display in the text box.
				// - The second is a default string to display in the text box (optional).
			</script>
		<h3>Confirm</h3>
			<script>
				var result = confirm("Do you really want to leave this page?");
				if(result == true){
					alert("Thanks for visiting");
				}
				else{
					alert("Thanks for staying with us");
				}
			</script> -->
			<script>
				document.write("<p>It's a good idea to place scripts at the bottom of the body element. This can improve page load, because HTML display is not blocked by scripts loading.</p>");
			</script>
		<h3>Variables</h3>
			<script>
				var x = 10;
				document.write(x);
				// Naming rules:
				// - The first character must be a letter, an underscore (_), or a dollar sign ($). Subsequent characters may be letters, digits, underscores, or dollar signs.
				// - Numbers are not allowed as the first character.
				// - Variable names cannot include a mathematical or logical operator in the name. For instance, 2*something or this+that;
				// - JavaScript names must not contain spaces.

				var sayHello = 'Hello world!\'I am a JavaScript programmer\'';
				document.write(sayHello);
	// 			Strings
	// As strings must be written within quotes, quotes inside the string must be handled. The backslash (\) escape character turns special characters into string characters.
	// the escape character (\) can be used tgo insert other special characters into a string
	// \n = new line			\r = carriage return					\t = getAllBlogPosts			\b = backspace			\f = form feed
			</script>
		<h3>Arithmetic Operators</h3>
			<script>
				var test = 5 + 7;
				document.write(test);
			</script>
	<h3>String Operators</h3>
		<script>
			var myString1 = "I am learning";
			var myString2 = "JavaScript";
			document.write(myString1 + myString2);
		</script>
<h3>conditionals and loops</h3>
		<h4>Switch</h4>
			<script>
			//the SWITCH statement can be used to replace multiple if else statements
			var day = 2;
			switch(day){
				case 1:
						document.write("Monday");
						break;
				case 2:
						document.write("Tuesday");
						break;
				case 3:
						document.write("Wednesday");
						break;
				default:
						document.write("Another day");
			}
			</script>
		<h4>For Loop</h4>
			<script>
				for (count = 1; count <= 5; count++){
					document.write(count + "<br />");
				}
			</script>
		<h3>Object Properites</h3>
			<script>
				var person = {
					name: "John", age: 31,
					favColor: "green", weight 143
				};
				var x = person.age;
				var y = person['age'];
				// An object method is a property that contains a function definition.
				// Use the following syntax to access an object method.
				// objectName.methodName()

			</script>

	</body>

<?php
//why do we include this at the top?
//tk note: The code to process the form only runs if it was submitted

/*if(isset($_REQUEST['jobApplication'])){
	//tk note: All the values from the form are available in $_REQUEST
//pseudocode:
//step by step of what $_REQUEST does... maybe have a fellow try to explain it
//$_REQUEST is every piece of data submitted in the form
			submitApplication(
							$_REQUEST['name'], //remember to mention the comma (what it separates)
							$_REQUEST['phone'], //request the value entered for phone
							$_REQUEST['position'] //why no comma here?
				);
}
*/

//validation

$errors = array();
if(isset($_REQUEST['jobApplication'])){
//errors has to be inside of the isset array
	if($_REQUEST['name'] ==''){
		//trim removes all white space around a string
		//you could also write as if $_REQUEST['name']==''				//why isset again?
		$errors['name'] = 'required';
	}
	//why don't we use if/else
	if($_REQUEST['phone'] == ''){
		$errors['phone'] = 'required';
	}
	//we've populated the errors array now what do we do with it?
	if(sizeof($errors)==0){				//sizeof is a built in php function takes an arrya and tells you how many items are in interface
				submitApplication(
					$_REQUEST['name'],
					$_REQUEST['phone'],
					$_REQUEST['position']
				);
	}

	//let's var_dump this so that we can see what errors are there
	//var_dump($errors);
else{
	echo"wtf dude. there were errors.";
}
}



//START HERE

//START HERE
//why do we leave form action blank? BECAUSE WE'RE  STAYING ON THE SAME PAGE 
//what is 'name' referring to?
//lines 18-22 have option value with something inside of '' what are those referring to?
echo"
	<h1>
			Job Application Form
	</h1>
	<form action '' method = 'post'>
			Name:
			<input type = 'text' name = 'name' /><br/>

			Phone:
			<input type = 'text' name = 'phone' /><br/>

			Position:
			<select name = 'position'>
				<option value = 'fellow'>Coding Fellow</option>
				<option value = 'devIntern'>Developer Intern</option>
				<option value = 'crmcIntern'>CRM Coach Intern</option>
				<option value = 'dev'>Full-time Developer</option>
				<option value = 'crmc'>Full-time CRM coach</option>
			</select>

			<br/><br/>
			<input type = 'submit' name = 'jobApplication' value = 'Submit Your Application' />
		</form>
		";
		// tk's notes
		// Talk about
		// - POST vs GET
		//   - Example of the wiki getting deleted
		//   - Get it from $_REQUEST later
		// - It submits back to the same page
		//   - You can submit to a different page, but that’s a problem if there are errors
		// - Different field types


		function submitApplication($name, $phone, $position){
			//lesson notes: explained "scope" of variables
			//create a function called submitApplication and expect to receive arguments for name, phone, and application
/*why use die instead of echo?*/
//usually redirect to another page instead of die
			die("
						<h1>
								$name just applied
						</h1>
						<p>
								They applied for the $position position and you can reach them at $phone
						</p>
				");
			}
// tk note:
// The function at the bottom should actually be in a different file in case you want to include it elsewhere
//tell how it can relate to blog or when they're creating forms later


//have them brainstorm ideas of how to use forms before the lesson is "over"


 ?>

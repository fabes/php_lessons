<!doctype HTML>
<html>
	<head>
		<title>
			Learning to handle forms in PHP
		</title>
	</head>
<body>
	<form name="profile_info" id="profile_info" method="POST">
		<div>
			<input type="text" name="first_name">
		</div>
		<div>
			<input type="text" name="last_name">
		</div>
		<div>
			<input type="submit" name="submit_button" value="Create Profile">
		</div>
		<!-- This is a HTML comment-->
	</form>
</body>
</html>
<?php

if(isset($_GET['submit_button'])){

	//check if first name field is set or has a value
	if($_GET['first_name'] != ''){
		print "This is what was submitted for first name --> ".$_GET['first_name'];
	}else{
		print "Please enter a value for your First name";
	}//eof validating first name field

	//Check if last name field is set  or has a value
	if($_GET['last_name'] != ''){
		print "<br/>This is what was submitted for last name --> ".$_GET['last_name'];
	}else{
		print "<br/> Please enter a value for your last name";
	}//eof vaildating last name field

}//eof check if submit button is pressed/is set


?>
<?php

if(isset($_POST['submit_button'])){

	//check if first name field is set or has a value
	if($_POST['first_name'] != ''){
		print "This is what was submitted for first name --> ".$_POST['first_name'];
	}else{
		print "Please enter a value for your First name";
	}//eof validating first name field

	//Check if last name field is set  or has a value
	if($_POST['last_name'] != ''){
		print "<br/>This is what was submitted for last name --> ".$_POST['last_name'];
	}else{
		print "<br/> Please enter a value for your last name";
	}//eof vaildating last name field


	//Check if email field is set  or has a value
	if($_POST['email'] != ''){
		print "<br/>This is what was submitted for email --> ".$_POST['email'];
	}else{
		print "<br/> Please enter a value for your email";
	}//eof vaildating last name field

	if($_POST['password'] != ''){
		print "<br/>This is what was submitted for password --> ".$_POST['password'];
	}else{
		print "<br/> Please enter a value for your password";
	}//eof vaildating last name field

}//eof check if submit button is pressed/is set


?>
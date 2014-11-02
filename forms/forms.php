<!doctype HTML>
<html>
	<head>
		<title>
			Learning to handle forms in PHP
		</title>
	</head>
<body>
	<form name="profile_info" id="profile_info" method="POST" action="validation.php">
		<div>
			<label>Enter your first name:</label>
			<input type="text" name="first_name">
		</div>
		<div>
			<label>Enter your last name:</label>
			<input type="text" name="last_name">
		</div>
		<div>
			<label>Enter your email</label>
			<input type="text" name="email">
		</div>
		<div>
			<label>Enter a password</label>
			<input type="password" name="password" >
		</div>
		<div>
			<input type="submit" name="submit_button" value="Create Profile">
		</div>
		<!-- This is a HTML comment-->
	</form>
</body>
</html>
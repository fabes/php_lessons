<?php 
	include '../database/connection.php';

if(isset($_GET['id'])){
	//Storing the ID into the $user_id variable
	$user_id = $_GET['id'];

	//now do a database query to retrieve the data for users who has an ID that match the ID from the query string
	$get_user = $db->prepare("SELECT * FROM users WHERE id =".$user_id);
	$get_user->execute();
	$user = $get_user->fetch();
}
?>



<!doctype HTML>
<html>
	<head>
		<title>
			Learning to handle forms in PHP
		</title>
	</head>
<body>

<?php if(isset($_GET['id'])){ ?>
<h1>
	<?php print 'Hello '.$user['first_name']; ?>
</h1>
	<form name="profile_info" id="profile_info" method="POST" action="validation.php">
		<div>
			<label>Enter your first name:</label>
			<input type="text" name="first_name" value="<?php print $user['first_name']; ?>">
		</div>
		<div>
			<label>Enter your last name:</label>
			<input type="text" name="last_name" value="<?php print $user['last_name']; ?>">
		</div>
		<div>
			<label>Enter your email</label>
			<input type="text" name="email" value="<?php print $user['email']; ?>">
		</div>
		<div>
			<label>Enter a password</label>
			<input type="password" name="password" >
		</div>
		<div>
			<input type="submit" name="submit_button" value="Edit Profile">
		</div>
		<!-- This is a HTML comment-->
	</form>

<?php } else{?>
<h1>No user found</h1>

<?php } ?>

</body>
</html>
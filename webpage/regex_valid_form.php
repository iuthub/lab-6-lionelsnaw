<?php

	$pattern="";
	$text="";
	$replaceText="";
	$replacedText="";

	$match="Not checked yet.";

foreach($_POST as $key=>$value) {
	if(empty($_POST[$key])) {
	$error_message = "All Fields are required";
	break;
	}
}
/* Password Matching Validation */
if($_POST['password'] != $_POST['confirm_password']){ 
$error_message = 'Passwords should be same<br>'; 
}

/* Email Validation */
if(!isset($error_message)) {
	if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
	$error_message = "Invalid Email Address";
	}
}

/* Validation to check if gender is selected */
if(!isset($error_message)) {
if(!isset($_POST["gender"])) {
$error_message = " All Fields are required";
}
}

/* Validation to check if Terms and Conditions are accepted */
if(!isset($error_message)) {
	if(!isset($_POST["terms"])) {
	$error_message = "Accept Terms and Conditions to Register";
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Valid Form</title>
</head>
<body>
	<form action="regex_valid_form.php" method="post">
		<dl>
			<dt>Pattern</dt>
			<dd><input type="text" name="pattern" value="<?= $pattern ?>"></dd>

			<dt>Text</dt>
			<dd><input type="text" name="text" value="<?= $text ?>"></dd>

			<dt>Replace Text</dt>
			<dd><input type="text" name="replaceText" value="<?= $replaceText ?>"></dd>

			<dt>Output Text</dt>
			<dd><?=	$match ?></dd>

			<dt>Replaced Text</dt>
			<dd> <code><?=	$replacedText ?></code></dd>

			<dt>&nbsp;</dt>
			<dd><input type="submit" value="Check"></dd>
		</dl>

	</form>
</body>
</html>

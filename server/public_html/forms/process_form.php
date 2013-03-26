<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Edit Payment Information - PayPal&trade;</title>
		<link rel="stylesheet" href="styles.css" />
	</head>
	<body>
		<h1>PayPal&trade;</h1>
		<h2>Settings Updated</h2>
<?php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	// the form was sent and there were no errors
	echo'<p>Thank You, '.$fname.'&nbsp;'.$lname.' &mdash; your settings have been saved.</p>';
?>
	</body>
</html>

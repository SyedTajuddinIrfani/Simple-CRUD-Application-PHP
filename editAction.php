<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
	$lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
	$phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	
	// Check for empty fields
	if (empty($fname) || empty($lname) || empty($phone) || empty($email)) {
		if (empty($fname)) {
			echo "<font color='red'>Enter Your First Name.</font><br/>";
		}
		if (empty($lname)) {
			echo "<font color='red'>Enter Your Last Name.</font><br/>";
		}
		
		if (empty($phone)) {
			echo "<font color='red'>Enter Your Phone Number.</font><br/>";
		}
		
		if (empty($email)) {
			echo "<font color='red'>Enter Your Email.</font><br/>";
		}
	} else {
		// Update the database table
		$result = mysqli_query($mysqli, "UPDATE users SET `fname` = '$fname',`lname` = '$lname', `phone` = '$phone', `email` = '$email' WHERE `id` = $id");
		
		// Display success message
		echo "<p><font color='green'>Data updated successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}

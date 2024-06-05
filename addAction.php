<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
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
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO users (`fname`,`lname`, `phone`, `email`) VALUES ('$fname','$lname', '$phone', '$email')");
		
		// Display success message
		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>

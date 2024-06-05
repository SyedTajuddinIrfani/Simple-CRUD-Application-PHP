<?php
// Include the database connection file
require_once ("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users");
?>

<html>

<head>
	<title>CRUD App</title>
</head>

<body>
	<center>
		<h2>Simple CRUD Application Using PHP and MySQL</h2>
	</center>

	<p>
		<button><a href="add.php">Add New Data</a></button>
	</p>
	<table width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
			<td><strong>ID</strong></td>
			<td><strong>First Name</strong></td>
			<td><strong>Last Name</strong></td>
			<td><strong>Phone Number</strong></td>
			<td><strong>Email</strong></td>
			<td><strong>Action</strong></td>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>" . $res['id'] . "</td>";
			echo "<td>" . $res['fname'] . "</td>";
			echo "<td>" . $res['lname'] . "</td>";
			echo "<td>" . $res['phone'] . "</td>";
			echo "<td>" . $res['email'] . "</td>";
			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | 
			<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		}
		?>
	</table>
</body>

</html>
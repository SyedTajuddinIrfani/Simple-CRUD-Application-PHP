<html>
<head>
	<title>Add New Data</title>
</head>

<body>
	<h2>Add New Data</h2>
	<p>
		<button><a href="index.php">Home</a></button>
	</p>

	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0">
		<tr> 
			<tr> 
				<td>First Name: </td>
				<td><input type="text" name="fname"></td>
			</tr>	
		<tr> 
				<td>Last Name: </td>
				<td><input type="text" name="lname"></td>
			</tr>
			<tr> 
				<td>Phone Number: </td>
				<td><input type="text" name="phone"></td>
			</tr>
			<tr> 
				<td>Email: </td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>


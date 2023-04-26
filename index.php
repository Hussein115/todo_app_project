<!DOCTYPE html>
<html>
<head>
	<title>My Notes</title>
	<style type="text/css">
		th, td {
			padding: 10px;
			border: 1px solid #ccc;
		}
	</style>
</head>
<body>
	<h1>My Notes</h1>
	<a href="add.php">Add New Note</a>
	<table>
		<tr>
			<th>Title</th>
			<th>Content</th>
			<th>Action</th>
		</tr>
		<?php
			// Connect to MySQL database
			$conn = mysqli_connect("localhost", "noteappadmin", "#655447#$", "noteapp");

			// Check connection
			if (mysqli_connect_errno()) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				exit();
			}

			// Retrieve notes from database
			$result = mysqli_query($conn, "SELECT * FROM notes");

			// Loop through notes and display them in the table
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row["title"] . "</td>";
				echo "<td>" . $row["content"] . "</td>";
				echo "<td><a href=\"edit.php?id=" . $row["id"] . "\">Edit/View</a> | <a href=\"delete.php?id=" . $row["id"] . "\" onclick=\"return confirm('Are you sure you want to delete this note?')\">Delete</a></td>";
				echo "</tr>";
			}

			// Close database connection
			mysqli_close($conn);
		?>
	</table>
</body>
</html>

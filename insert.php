<?php
	// Connect to MySQL database
	$conn = mysqli_connect("localhost", "noteappadmin", "#655447#$", "noteapp");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}

	// Insert new note into database
	$title = mysqli_real_escape_string($conn, $_POST["title"]);
	$content = mysqli_real_escape_string($conn, $_POST["content"]);
	mysqli_query($conn, "INSERT INTO notes (title, content) VALUES ('$title', '$content')");

	// Close database connection
	mysqli_close($conn);

	// Redirect to main page
	header("Location: index.php");
?>

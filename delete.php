<?php
$conn = mysqli_connect("localhost", "noteappadmin", "#655447#$", "noteapp");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if ID parameter is set
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	// Delete note from database
	$sql = "DELETE FROM notes WHERE id='$id'";

	if (mysqli_query($conn, $sql)) {
  echo "Note deleted successfully";
	}
	// Redirect the user back to the index page
  header("Location: index.php");
}

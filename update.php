<?php
   // Connect to MySQL database
    $conn = mysqli_connect("localhost", "noteappadmin", "#655447#$", "noteapp");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    // Get the note data from the form
    $id = $_POST['id'];
    $content = $_POST['content'];
    // Update the note data in the database
    mysqli_query($conn, "UPDATE notes SET content='$content' WHERE id='$id'");
    // Redirect the user back to the index page
    header("Location: index.php");
?>

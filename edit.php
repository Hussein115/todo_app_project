<!DOCTYPE html>
<html>
<head>
    <title>Edit Note</title>
</head>
<body>
    <h1>Edit Note</h1>
    <?php
       // Connect to MySQL database
        $conn = mysqli_connect("localhost", "noteappadmin", "#655447#$", "noteapp");

        // Check connection
        //if (mysqli_connect_errno())
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        // Get the note ID from the URL
        $id = $_GET['id'];
        // Retrieve the note from the database
        $result = mysqli_query($conn, "SELECT * FROM notes WHERE id='$id'");
        $row = mysqli_fetch_array($result);
    ?>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Title:</label>
        <input type="text" name="title" value="<?php echo $row['title']; ?>"><br>
        <label>Content:</label>
        <textarea name="content"><?php echo $row['content']; ?></textarea><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>
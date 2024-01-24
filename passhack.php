<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Check</title>
</head>
<body>
    <h1>Download Check</h1>

    <?php
    // Establish a MySQL connection (replace these with your actual database credentials)
    $servername = "localhost";
    $username = "web";
    $password = "bodenkapsel";
    $database = "users";

    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the user ID from the form
        $userId = $_POST["userId"];

        // Perform a SELECT query to check if downloadpass is 1 for the specified user ID
        $sql = "SELECT * FROM users WHERE id = $userId AND downloadpass = 1";
        $result = $conn->query($sql);

        // Check the result and send appropriate response
        if ($result->num_rows > 0) {
            $message = "Download is allowed for user ID $userId!";
        } else {
            $message = "Download is not allowed for user ID $userId!";
        }
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="userId">Enter User ID:</label>
        <input type="text" id="userId" name="userId" required>
        <button type="submit">Check Download</button>
    </form>

    <?php
    // Display the message if it is set
    if (isset($message)) {
        echo "<p>$message</p>";
    }

    $conn->close();
    ?>
</body>
</html>

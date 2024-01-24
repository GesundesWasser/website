<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Column Value</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "web";
$password = "bodenkapsel";
$database = "users";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle the button click
    if (isset($_POST["updateButton"])) {
        // Retrieve user ID from the form
        $userIdToUpdate = $_POST["userId"];

        // Create a connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Your database update logic here
        $sql = "UPDATE your_table_name SET new_column = 1 WHERE id = $userIdToUpdate";
        $result = $conn->query($sql);

        // Close the connection
        $conn->close();
    }
}
?>

<form method="post" action="">
    <label for="userId">User ID:</label>
    <input type="text" id="userId" name="userId" required>
    <button type="submit" name="updateButton">Set Value to 1</button>
</form>

</body>
</html>

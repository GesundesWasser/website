<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Page</title>
</head>
<body>

<?php
// Replace these with your actual database connection details
$servername = "your_mysql_server";
$username = "your_mysql_username";
$password = "your_mysql_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to check downloadpass value
$sql = "SELECT downloadpass FROM your_table_name WHERE id = 1"; // Change 'your_table_name' and 'id' accordingly
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $downloadpass = $row["downloadpass"];
        if ($downloadpass == 1) {
            echo "<p>Download is allowed. Place your download link or button here.</p>";
        } else {
            echo "<p>Download is not allowed.</p>";
        }
    }
} else {
    echo "No results found.";
}

$conn->close();
?>

</body>
</html>

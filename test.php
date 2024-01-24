<?php
$servername = "localhost";
$username = "web";
$password = "bodenkapsel";
$database = "users";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform the SELECT query
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Fetch the results as an associative array
$rows = $result->fetch_all(MYSQLI_ASSOC);

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>User Data</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Passcode</th>
        <th>Image</th>
        <!-- Add other column headers as needed -->
    </tr>

    <?php foreach ($rows as $row) : ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['username'] ?></td>
            <td><?= $row['passcode'] ?></td>
            <td><?= $row['image'] ?></td>
            <!-- Add other columns as needed -->
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>

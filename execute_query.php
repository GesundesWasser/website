<?php
$servername = "localhost";
$username = "web";
$password = "bodenkapsel";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the JSON data
$data = json_decode(file_get_contents("php://input"), true);

// Get the query from the JSON data
$query = $data['query'];

// Execute the query
$result = $conn->query($query);

if ($result === TRUE) {
    $response = array('success' => true, 'message' => 'Query executed successfully');
} else {
    $response = array('success' => false, 'message' => 'Error executing query: ' . $conn->error);
}

// Close the connection
$conn->close();

// Return JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>

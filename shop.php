<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

// Replace with your actual MySQL database details
$host = "localhost";
$username = "web";
$password = "bodenkapsel";
$database = "users";

$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredPasscode = $_POST["passcode"];

    // Query the database to get the hashed password associated with the entered passcode
    $query = "SELECT passcode FROM users WHERE passcode = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("s", $enteredPasscode);
    $stmt->execute();
    $stmt->bind_result($hashedPassword);
    
    if ($stmt->fetch()) {
        // Debug information
        echo "Entered Password: $enteredPasscode<br>";
        echo "Stored Password from Database: $hashedPassword<br>";

        // Direct comparison for debugging
        if (password_verify($enteredPasscode, $hashedPassword)) {
            // Password is correct, store the user in the session
            $_SESSION['user'] = $username;
            echo "Login Successful";
        } else {
            // Handle the case where an Invalid Password is Detected
            echo "Invalid Password";
        }
    } else {
        // Handle the case where an Invalid Password is Detected
        echo "Invalid Password";
    }

    $stmt->close();
} else {
    // Handle the case where the form is not submitted
    echo "Form not submitted";
}

// Close the database connection
$mysqli->close();
?>

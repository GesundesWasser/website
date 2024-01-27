<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

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
    $username = $_POST["username"];
    $enteredPasscode = $_POST["passcode"];

    // Hash the password before storing it
    $hashedPassword = password_hash($enteredPasscode, PASSWORD_BCRYPT);

    // Insert the user into the database with the hashed password
    $insertQuery = "INSERT INTO users (username, passcode) VALUES (?, ?)";
    $insertStmt = $mysqli->prepare($insertQuery);
    $insertStmt->bind_param("ss", $username, $hashedPassword);

    if ($insertStmt->execute()) {
        echo "User successfully registered.";
    } else {
        echo "Error during registration: " . $insertStmt->error;
    }

    $insertStmt->close();
} else {
    // Display the registration form
    // ...

    // Example form:
    ?>
    <form method="post" action="">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="passcode"><br>
        <input type="submit" value="Register">
    </form>
    <?php
}

// Close the database connection
$mysqli->close();
?>

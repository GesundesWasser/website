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
    // ... (your existing login logic here)
} else {
    // Check if the user is logged in
    if (isset($_SESSION['user'])) {
        // Fetch user information (coins and userImage) from the database
        $loggedInUser = $_SESSION['user'];
        $userQuery = "SELECT coins, image FROM users WHERE username = ?";
        $userStmt = $mysqli->prepare($userQuery);

        if (!$userStmt) {
            die("Error in user query preparation: " . $mysqli->error);
        }

        $userStmt->bind_param("s", $loggedInUser);
        $userStmt->execute();
        $userStmt->bind_result($coinCount, $userImage);

        // Fetch the result before displaying the main content
        $userStmt->fetch();
        $userStmt->close();

        // Display the main and footer content
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <!-- ... (rest of your HTML code) ... -->
        </html>
        <?php
    } else {
        header("Location: site");
    }
}

// Close the database connection
$mysqli->close();
?>

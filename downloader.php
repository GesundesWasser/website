<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vergammelkapsel</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="img/x-icon">
    <style>
body {
    background-color: #222; /* Darker background color */
    color: #fff; /* White text color for better readability */
    margin: 0; /* Remove default margin */
    padding: 0; /* Remove default padding */
}

/* Additional styles for better readability */
header, nav, main, footer {
    padding: 20px;
}

header img {
            width: 125px;
            height: 38px;
            margin-right: 15px;
            vertical-align: middle; /* Align the image vertically */
        }

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

nav li {
    display: inline;
    margin-right: 15px;
}

a {
    color: #fff; /* White color for links */
    text-decoration: none;
}

button {
    background-color: #555; /* Darker button color */
    color: #fff; /* White text color for the button */
    padding: 10px;
    border: none;
    cursor: pointer;
    border-radius: 5px; /* Rounded corners */
}

/* Darker and smaller text input fields */
input[type="text"], input[type="password"], textarea {
    background-color: #333; /* Darker textbox background color */
    color: #fff; /* White text color for the textbox */
    padding: 8px;
    border: none;
    border-radius: 5px; /* Rounded corners for the textbox */
    width: 150px; /* Set the width of the textbox */
}
    </style>
</head>
<body>

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

    // Query the database to get the username, image, and downloadpass associated with the entered passcode
    $query = "SELECT username, image, downloadpass FROM users WHERE passcode = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("s", $enteredPasscode);
    $stmt->execute();
    $stmt->bind_result($username, $userImage, $downloadPass);

    if ($stmt->fetch()) {
        // Check if downloadpass is set to 1
        if ($downloadPass == 1) {
            // Store the user in the session
            $_SESSION['user'] = $username;
        } else {
            // Handle the case where download password is not valid
            header("Location: invalidpass");
            exit();
        }
    } else {
        // Handle the case where an Invalid Password is Detected
        header("Location: download");
        exit();
    }

    $stmt->close();
} else {
    // Handle the case where the form is not submitted
    header("Location: shoplogin");
    exit();
}

// Check if the user is logged in before fetching the coin count
if (isset($_SESSION['user'])) {
    // Query the database to get the coin count associated with the logged-in user
    $coinQuery = "SELECT coins FROM users WHERE username = ?";
    $coinStmt = $mysqli->prepare($coinQuery);
    $coinStmt->bind_param("s", $_SESSION['user']);
    $coinStmt->execute();
    $coinStmt->bind_result($userCoins);

    // Fetch the coin count
    if ($coinStmt->fetch()) {
        $coinCount = $userCoins;
    } else {
        $coinCount = 0; // Default value if no coins are found
    }

    $coinStmt->close();
} else {
    $coinCount = 0; // Default value if the user is not logged in
}

// Process the removal of coins if the "Remove Coins" button is clicked
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["removeCoins"]) && isset($_SESSION['user'])) {
    // Check if the user is logged in before removing coins
    $removeCoinsQuery = "UPDATE users SET coins = GREATEST(coins - 10, 0) WHERE username = ?";
    $removeCoinsStmt = $mysqli->prepare($removeCoinsQuery);
    $removeCoinsStmt->bind_param("s", $_SESSION['user']);
    $removeCoinsStmt->execute();
    $removeCoinsStmt->close();
    
    // Redirect to the current page to avoid re-submitting the form
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}
?>

<header>
        <!-- Wrapped the img tag with an a tag to make it a link to Google -->
        <a href="site">
            <img src="img/wwagoinc.png" alt="WWAGO Inc. Logo">
        </a>
    </header>

<main>
        <section id="section1">
            <h2>Winwows Installer</h2>
            <p>TEXT</p>
            <button onclick="window.location.href='dl/downloader.py'">Download</button>
        </section>

        <section id="section2">
            <h2>Gratspiel Downloader</h2>
            <p>TEXT</p>
            <button onclick="window.location.href='dl/winwowsinstall-1.0desktop-18012024.vbs'">Download</button>
        </section>

        <section id="section3">
    <h2>Remove Coins</h2>
    <p>Click the button to remove 10 coins</p>
    <form method="post" action="">
        <button type="submit" name="removeCoins">Remove Coins</button>
    </form>
</section>

        <footer>
        <p>&copy; WWAGO Inc.</p>
        </footer>
</main>
<footer>
    <p>&copy; WWAGO Inc.</p>
</footer>
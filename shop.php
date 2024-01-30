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
    $enteredUsername = $_POST["username"];
    $enteredPasscode = $_POST["passcode"];

    // Query the database to get the hashed password and image associated with the entered username
    $query = "SELECT passcode, image, coins FROM users WHERE username = ?";
    $stmt = $mysqli->prepare($query);

    if (!$stmt) {
        die("Error in query preparation: " . $mysqli->error);
    }

    $stmt->bind_param("s", $enteredUsername);
    $stmt->execute();
    $stmt->bind_result($hashedPassword, $userImage, $coinCount);

    if ($stmt->fetch()) {
        // Verify the entered password against the stored hash
        if (password_verify($enteredPasscode, $hashedPassword)) {
            // Password is correct, store the user in the session
            $_SESSION['user'] = $enteredUsername;
            echo "Login Successful";
        } else {
            // Handle the case where an Invalid Password is Detected
            echo "Invalid Password";
        }
    } else {
        // Handle the case where an Invalid Username is Detected
        echo "Invalid Username";
    }

    $stmt->close();
}

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

    // Display the main HTML content
    ?>
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
    font-family: 'Arial', sans-serif;
    color: #fff; /* White text color for better readability */
    margin: 0; /* Remove default margin */
    padding: 0; /* Remove default padding */
}

header, nav, main, footer {
    padding: 20px;
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

body::-webkit-scrollbar {
            width: 8px;
        }

        body::-webkit-scrollbar-thumb {
            background-color: #fff;
            border-radius: 6px;
        }

        body::-webkit-scrollbar-track {
            background-color: transparent;
        }

        body::-webkit-scrollbar-track-piece {
            background-color: transparent;
        }
    </style>
    </head>
    <body>
<header>
    <!-- Wrapped the img tag with an a tag to make it a link to Google -->
    <a href="site">
    <img src="img/<?php echo isset($userImage) ? $userImage : 'default-image.png'; ?>" alt="User Icon">
</a>
    <h1><?php echo isset($_SESSION['user']) ? "WWAGO, " . $_SESSION['user'] : "USERNAME"; ?></h1>
</header>

        <main>

        <section id="section1">
            <h2>Download Pass</h2>
            <p>Der Download Pass Pro Plus Ultra Premium Max</p>
        </section>

        <section id="section1">
            <img src="img/wwago.png" alt="Bild von WWAGO">
            <h2>WWAGO</h2>
            <p>Der OG WWAGO für 3 WWAGO Coins!</p>
            <button onclick="alert('Kauf Felgeschlagen!')">Kaufen!</button>
        </section>

        <section id="section2">
            <img src="img/wwago-kaputt.png" alt="Bild von Kaputten WWAGO :(">
            <h2>Kaputter WWAGO :(</h2>
            <p>Der Aller Beste WWAGO in der Kaputten Form! (Wieso willst du einen kaputten?)</p>
            <button onclick="alert('Kauf Felgeschlagen!')">Kaufen!</button>

        <section id="section3">
            <img src="img/wago_klemme.png" alt="Bild von WAGO Klemme">
            <h2>WAGO Klemme</h2>
            <p>DER NEUE WAGO KLEMMEN WWAGO (der eingentlich gar keiner ist!)</p>
            <button onclick="alert('Kauf Felgeschlagen!')">Kaufen!</button>
        </section>

        </main>

        <footer>
            <p>&copy; WWAGO-Sites Inc.</p>
        </footer>
    </body>
    </html>
    <?php
}

// Close the database connection
$mysqli->close();
?>

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
    $query = "SELECT passcode, image FROM users WHERE username = ?";
    $stmt = $mysqli->prepare($query);

    if (!$stmt) {
        die("Error in query preparation: " . $mysqli->error);
    }

    $stmt->bind_param("s", $enteredUsername);
    $stmt->execute();
    $stmt->bind_result($hashedPassword, $userImage);
    
    if ($stmt->fetch()) {
        // Verify the entered password against the stored hash
        if (password_verify($enteredPasscode, $hashedPassword)) {
            // Password is correct, store the user in the session
            $_SESSION['user'] = $enteredUsername;

            // Fetch additional user information
            $userQuery = "SELECT coinCount, image FROM users WHERE username = ?";
            $userStmt = $mysqli->prepare($userQuery);

            if (!$userStmt) {
                die("Error in user query preparation: " . $mysqli->error);
            }

            $userStmt->bind_param("s", $enteredUsername);
            $userStmt->execute();
            $userStmt->bind_result($coinCount, $userImage);
            $userStmt->fetch();
            $userStmt->close();

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
} else {
    // Check if the user is logged in
    if (isset($_SESSION['user'])) {
        // Fetch user information (coinCount and userImage) from the database
        $loggedInUser = $_SESSION['user'];
        $userQuery = "SELECT coinCount, image FROM users WHERE username = ?";
        $userStmt = $mysqli->prepare($userQuery);

        if (!$userStmt) {
            die("Error in user query preparation: " . $mysqli->error);
        }

        $userStmt->bind_param("s", $loggedInUser);
        $userStmt->execute();
        $userStmt->bind_result($coinCount, $userImage);
        $userStmt->fetch();
        $userStmt->close();
    }

    // Display the main and footer content
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
            /* Your styles here */
        </style>
    </head>
    <body>
        <!-- Your header content here -->
        <header>
            <div class="user-info">
                <a href="site">
                    <img src="img/<?php echo isset($userImage) ? $userImage : 'default-image.png'; ?>" alt="User Icon">
                </a>
                <span><?php echo isset($_SESSION['user']) ? "Hiya! " . $_SESSION['user'] : "USERNAME: "; ?></span>
            </div>
            
            <div class="coin-info">
                <img src="img/coin.png" alt="Coin">
                <span>COINS: <?php echo isset($coinCount) ? $coinCount : 0; ?></span>
            </div>
        </header>

        <main>
            <section id="section1">
                <h2>SECTION1</h2>
                <p>TEXT</p>
                <button onclick="window.location.href=''">Download</button>
            </section>

            <section id="section2">
                <h2>SECTION2</h2>
                <p>TEXT</p>
                <button onclick="window.location.href=''">Download</button>
            </section>

            <section id="section3">
                <h2>SECTION3</h2>
                <p>TEXT</p>
                <button onclick="window.location.href=''">Download</button>
            </section>

            <section id="section4">
                <h2>SECTION4</h2>
                <p>TEXT</p>
                <button onclick="window.location.href=''">Download</button>
            </section>

            <section id="section5">
                <h2>SECTION5</h2>
                <p>TEXT</p>
                <button onclick="window.location.href=''">Download</button>
            </section>
        </main>

        <!-- Your footer content here -->
        <footer>
            <p>&copy; WWAGO Development Inc.</p>
        </footer>
    </body>
    </html>
    <?php
}

// Close the database connection
$mysqli->close();
?>

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

    // Query the database to get the username, image, and coins associated with the entered passcode
    $query = "SELECT username, image, coins FROM users WHERE passcode = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("s", $enteredPasscode);
    $stmt->execute();
    $stmt->bind_result($username, $userImage, $coins);

    if ($stmt->fetch()) {
        // Store the user details in the session
        $_SESSION['user'] = $username;
        $_SESSION['coins'] = isset($coins) ? $coins : 0; // Check if $coins is set, otherwise default to 0
    } else {
        // Handle the case where an Invalid Password is Detected
        header("Location: stellarlogin");
        exit();
    }

    $stmt->close();

    // Check if the "Remove 10 Coins" button is clicked
    if (isset($_POST['removeCoins'])) {
        // Ensure the user has enough coins before subtracting
        if ($_SESSION['coins'] >= 10) {
            // Subtract 10 coins
            $_SESSION['coins'] -= 10;

            // Update the database with the new coin value
            $updateQuery = "UPDATE users SET coins = ? WHERE username = ?";
            $updateStmt = $mysqli->prepare($updateQuery);
            $updateStmt->bind_param("is", $_SESSION['coins'], $_SESSION['user']);
            $updateStmt->execute();
            $updateStmt->close();
        } else {
            // Handle the case where the user doesn't have enough coins
            echo "Not enough coins to remove.";
        }
    }
} else {
    // Handle the case where the form is not submitted
    header("Location: shoplogin");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your head content goes here -->
</head>
<body>
    <!-- Your body content goes here -->
    <header>
        <a href="site">
            <img src="img/<?php echo isset($userImage) ? $userImage : 'default-image.png'; ?>" alt="User Icon">
        </a>
        <h1><?php echo isset($_SESSION['user']) ? "Hiya! " . $_SESSION['user'] : "USERNAME"; ?></h1>
        <p>Coins: <?php echo isset($_SESSION['coins']) ? $_SESSION['coins'] : 0; ?></p>
        <!-- Add this button inside the header section -->
        <form method="post" action="">
            <button type="submit" name="removeCoins">Remove 10 Coins</button>
        </form>
    </header>

    <main>
        <!-- Your main content goes here -->
        <section id="section1">
            <!-- Section 1 content goes here -->
        </section>

        <section id="section2">
            <!-- Section 2 content goes here -->
        </section>

        <section id="section3">
            <!-- Section 3 content goes here -->
        </section>

        <section id="section4">
            <!-- Section 4 content goes here -->
        </section>
    </main>

    <footer>
        <!-- Your footer content goes here -->
        <p>&copy; WWAGO Inc.</p>
    </footer>
</body>
</html>

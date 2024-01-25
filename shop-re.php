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

    // Query the database to get the username and image associated with the entered passcode
    $query = "SELECT username, image FROM users WHERE passcode = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("s", $enteredPasscode);
    $stmt->execute();
    $stmt->bind_result($username, $userImage);
    
    if ($stmt->fetch()) {
        // Store the user in the session
        $_SESSION['user'] = $username;
    } else {
        // Handle the case where an Invalid Password is Detected
        header("Location: shoplogin");
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
            background-color: #222;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
            max-width: 800px;
            margin: 0;
        }

        header img {
            max-width: 80px;
            height: auto;
            margin-right: 15px;
            vertical-align: middle;
        }

        header h1 {
            margin: 0;
            display: inline-block;
            vertical-align: middle;
        }

        header .user-info {
            display: flex;
            align-items: center;
        }

        header .user-info p {
            margin: 0;
            margin-left: 15px;
        }

        main, footer {
            padding: 20px;
            box-sizing: border-box;
            max-width: 800px;
            margin: 0;
        }

        <!-- ... (your existing styles) -->
    </style>
</head>
<body>

<header>
    <a href="site">
        <img src="img/<?php echo isset($userImage) ? $userImage : 'default-image.png'; ?>" alt="User Icon">
    </a>
    <h1><?php echo isset($_SESSION['user']) ? "Hiya! " . $_SESSION['user'] : "USERNAME"; ?></h1>
    <div class="user-info">
        <p>Coins: <?php echo $coinCount; ?></p>
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

<footer>
    <p>&copy; WWAGO Development Inc.</p>
</footer>

</body>
</html>
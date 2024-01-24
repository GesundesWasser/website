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
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      flex-direction: column;
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
      color: #fff;
      text-decoration: none;
    }

    button {
      background-color: #555;
      color: #fff;
      padding: 10px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }

    input[type="text"],
    input[type="password"],
    textarea {
      background-color: #333;
      color: #fff;
      padding: 8px;
      border: none;
      border-radius: 5px;
      width: 150px;
    }

    .download-container {
      width: 300px;
      border: 1px solid #ccc;
      padding: 10px;
      border-radius: 5px;
    }

    .download-bar {
      width: 100%;
      height: 30px;
      background-color: #eee;
      border-radius: 5px;
      position: relative;
      overflow: hidden;
    }

    .progress-bar {
      height: 100%;
      width: 0;
      background-color: #4caf50;
      border-radius: 5px;
      transition: width 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .status-text {
      text-align: center;
      margin-top: 10px;
    }

    .video-container {
      margin-top: 20px;
    }

    .completion-message {
      margin-top: 10px;
      color: rgb(0, 255, 13);
      font-weight: bold;
      display: none;
    }

    .download-button {
      display: none;
      margin-top: 10px;
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
      if (isset($_SESSION['coins']) && $_SESSION['coins'] >= 10) {
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
  <div class="download-container">
    <div class="download-bar">
      <div class="progress-bar"></div>
      <div class="status-text">Downloading...</div>
    </div>
  </div>

  <div class="completion-message" id="completionMessage">Download Complete!</div>

  <button class="download-button" id="downloadButton" onclick="downloadFile()">Download Now</button>

  <div class="video-container">
    <iframe src="https://drive.google.com/file/d/1gKF9u3RZ2AkEa_U5OvsV2BmLvMkMdS84/preview" width="640" height="480" allow="autoplay"></iframe>
  </div>

  <form method="post" action="downloader">
    <label for="passcode">Have Download Pass?</label>
    <input type="password" id="passcode" name="passcode" placeholder="Password" />
    <button type="submit" name="removeCoins">Submit</button>
  </form>

  <script>
    const progressBar = document.querySelector('.progress-bar');
    const statusText = document.querySelector('.status-text');
    const completionMessage = document.getElementById('completionMessage');
    const downloadButton = document.getElementById('downloadButton');
    const downloadDuration = 600000; // Set the download duration in milliseconds
    const interval = 1000; // Set the update interval in milliseconds

    let progress = 0;
    let progressInterval;

    const updateProgressBar = () => {
      progress += (interval / downloadDuration) * 100;
      progressBar.style.width = `${progress}%`;

      if (progress < 100) {
        // Continue updating progress
      } else {
        clearInterval(progressInterval);
        statusText.textContent = 'Download Complete!';
        statusText.style.color = 'green';
        completionMessage.style.display = '

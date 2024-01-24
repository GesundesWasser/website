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
  <div class="download-container">
    <div class="download-bar">
      <div class="progress-bar"></div>
      <div class="status-text">Downloading...</div>
    </div>
  </div>
  <?php
  // Establish a MySQL connection (replace these with your actual database credentials)
  $servername = "localhost";
  $username = "web";
  $password = "bodenkapsel";
  $database = "users";

  $conn = new mysqli($servername, $username, $password, $database);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // Check if the form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Get the user ID from the form
      $userId = $_POST["userId"];

      // Perform a SELECT query to check if downloadpass is 1 for the specified user ID
      $sql = "SELECT * FROM users WHERE id = $userId AND downloadpass = 1";
      $result = $conn->query($sql);

      // Check the result and send appropriate response
      if ($result->num_rows > 0) {
          $message = "Download is allowed for user ID $userId!";
      } else {
        header("Location: site");
      }
  }
  ?>
  <div class="completion-message" id="completionMessage">Download Complete!</div>

  <button class="download-button" id="downloadButton" onclick="downloadFile()">Download Now</button>

  <div class="video-container">
    <iframe src="https://drive.google.com/file/d/1gKF9u3RZ2AkEa_U5OvsV2BmLvMkMdS84/preview" width="640" height="480" allow="autoplay"></iframe>
  </div>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="userId">Enter User ID:</label>
        <input type="text" id="userId" name="userId" required>
        <button type="submit">Check Download</button>
    </form>

  <script>
    function downloadFile() {
      const link = document.createElement('a');
      link.href = 'downloader'; 
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
    }

    const progressBar = document.querySelector('.progress-bar');
    const statusText = document.querySelector('.status-text');
    const completionMessage = document.getElementById('completionMessage');
    const downloadButton = document.getElementById('downloadButton');
    const downloadDuration = 600000;
    const interval = 1000;

    let progress = 0;

    const updateProgressBar = () => {
      progress += (interval / downloadDuration) * 100;
      progressBar.style.width = `${progress}%`;

      if (progress < 100) {
      } else {
        clearInterval(progressInterval);
        statusText.textContent = 'Download Complete!';
        statusText.style.color = 'green';
        completionMessage.style.display = 'block';
        downloadButton.style.display = 'block';
      }
    };

    const progressInterval = setInterval(updateProgressBar, interval);
  </script>
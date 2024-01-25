<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Countdown Timer</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 50px;
    }

    #countdown {
      font-size: 24px;
      font-weight: bold;
    }
  </style>
</head>
<body>

<div id="countdown"></div>

<?php
// Function to set the target date in PHP session
function setTargetDate() {
  $targetDate = time() + 7 * 24 * 60 * 60; // 7 days in seconds
  $_SESSION['targetDate'] = $targetDate;
}

// Function to get the target date from PHP session
function getTargetDate() {
  return isset($_SESSION['targetDate']) ? $_SESSION['targetDate'] : setTargetDate();
}

session_start();
?>

<script>
  // Function to get the target date from PHP session
  const getTargetDate = () => {
    return <?php echo getTargetDate(); ?>;
  };

  // Update the countdown every 1 second
  const countdownElement = document.getElementById("countdown");

  const updateCountdown = () => {
    const now = Math.floor(new Date().getTime() / 1000);
    const distance = getTargetDate() - now;

    const days = Math.floor(distance / (24 * 60 * 60));
    const hours = Math.floor((distance % (24 * 60 * 60)) / (60 * 60));
    const minutes = Math.floor((distance % (60 * 60)) / 60);
    const seconds = Math.floor(distance % 60);

    countdownElement.innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;

    // If the countdown is over, display a message
    if (distance < 0) {
      clearInterval(countdownInterval);
      countdownElement.innerHTML = "EXPIRED";
    }
  };

  // Initial call to set the initial countdown value
  updateCountdown();

  // Update the countdown every second
  const countdownInterval = setInterval(updateCountdown, 1000);
</script>

</body>
</html>

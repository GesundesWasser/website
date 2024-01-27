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

// Default image filename
$defaultImage = '/img/default_user.png'; // Change this to the actual path of your default image

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $enteredPasscode = $_POST["passcode"];

    // Check if the username already exists
    $checkQuery = "SELECT COUNT(*) FROM users WHERE username = ?";
    $checkStmt = $mysqli->prepare($checkQuery);
    $checkStmt->bind_param("s", $username);
    $checkStmt->execute();
    $checkStmt->bind_result($userCount);
    $checkStmt->fetch();
    $checkStmt->close();

    if ($userCount > 0) {
        echo "Username '$username' is already taken. Please choose a different username.";
    } else {
        // Handle file upload for image
        $imageFileName = $defaultImage; // Default value if no image is uploaded

        if ($_FILES['image']['error'] == UPLOAD_ERR_OK) {
            $uploadDir = '/absolute/path/to/uploaded_files/'; // Change this to the actual upload directory

            // Check if the directory exists, create it if necessary
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            // Append the basename of the uploaded file to the upload directory
            $imageFileName = $uploadDir . basename($_FILES['image']['name']);

            if (move_uploaded_file($_FILES['image']['tmp_name'], $imageFileName)) {
                echo "Image uploaded successfully.";
            } else {
                echo "Error uploading image.";
            }
        }

        // Hash the password before storing it
        $hashedPassword = password_hash($enteredPasscode, PASSWORD_BCRYPT);

        // Insert the user into the database with the hashed password and image filename
        $insertQuery = "INSERT INTO users (username, passcode, image) VALUES (?, ?, ?)";
        $insertStmt = $mysqli->prepare($insertQuery);
        $insertStmt->bind_param("sss", $username, $hashedPassword, $imageFileName);

        if ($insertStmt->execute()) {
            echo "User '$username' successfully registered.";
        } else {
            echo "Error during registration: " . $insertStmt->error;
        }

        $insertStmt->close();
    }
} else {
    // Display the registration form
    // ...

    // Example form:
    ?>
    <form method="post" action="" enctype="multipart/form-data">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="passcode"><br>
        Image: <input type="file" name="image"><br>
        <input type="submit" value="Register">
    </form>
    <?php
}

// Close the database connection
$mysqli->close();
?>
    <form method="post" action="" enctype="multipart/form-data">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="passcode"><br>
        Image: <input type="file" name="image"><br>
        <input type="submit" value="Register">
    </form>
    <?php
}

// Close the database connection
$mysqli->close();
?>

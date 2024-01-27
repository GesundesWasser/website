<?php
$host = 'localhost';
$dbname = 'users';
$username = 'web';
$password = 'bodenkapsel';

try {
    // Connect to the database
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get user input
    $username = $_POST['username'];
    $passcode = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
    $image = $_FILES['image']['name']; // Get the uploaded image name

    // Upload the image to a folder on the server
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES['image']['name']);

    move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

    // Insert user data into the database
    $stmt = $conn->prepare("INSERT INTO users (username, passcode, profile_image) VALUES (:username, :passcode, :profile_image)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':passcode', $passcode);
    $stmt->bindParam(':profile_image', $image);

    $stmt->execute();

    echo "Signup successful!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$conn = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stellar</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="img/x-icon">    
    <style>
        body {
            background-color: #222;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        header, main, footer {
            padding: 20px;
            box-sizing: border-box;
            max-width: 800px; /* Set your desired max-width */
            margin: 0; /* Set margin to 0 for left alignment */
        }

        header img {
            max-width: 80px;
            height: auto;
            margin-right: 15px;
            vertical-align: middle; /* Align the image vertically */
        }

        header h1 {
            margin: 0;
            display: inline-block;
            vertical-align: middle; /* Align the text vertically */
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

        input[type="text"], input[type="password"], textarea {
            background-color: #333;
            color: #fff;
            padding: 8px;
            border: none;
            border-radius: 5px;
            width: 150px;
        }

        main img {
            max-width: 80px;
            height: auto;
            margin-right: 15px;
            vertical-align: middle; /* Align the image vertically */
        }

        main h2 {
            margin: 0;
            display: inline-block;
            vertical-align: middle; /* Align the text vertically */
        }

        section {
            margin-bottom: 20px;
        }

        section img {
            max-width: 100%; /* Ensure the image doesn't exceed its original width */
            height: auto; /* Maintain the aspect ratio */
            margin-right: 15px;
            margin-bottom: 15px; /* Add bottom margin to separate image and text */
            vertical-align: middle; /* Align the image vertically */
        }

        section#section3 img {
            display: block; /* Set the image to block-level to make it appear above the text */
            margin-bottom: 10px; /* Add some space between the image and the text */
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace with your desired passcodes and corresponding users
    $passcodeUserMap = [
        "wwagotower" => ["user" => "GesundesWasser", "image" => "user1.png"],
        "mcdonelts" => ["user" => "Jakobsoft", "image" => "user2.png"],
        "789" => ["user" => "Admin", "image" => "user3.png"]
    ];
    
    // Retrieve the entered passcode from the form
    $enteredPasscode = $_POST["passcode"];

    // Check if the entered passcode is in the array of valid passcodes
    if (array_key_exists($enteredPasscode, $passcodeUserMap)) {
        $userData = $passcodeUserMap[$enteredPasscode];
        $user = $userData["user"];
        $userImage = $userData["image"];
        echo "";
    } else {
    // Handle the case where an Invalid Password is Detected
        header("Location: stellarlogin");
    }
} else {
    // Handle the case where the form is not submitted
    header("Location: stellarlogin");
    exit(); // Exit to prevent further execution of the script
}
?>

<header>
    <!-- Wrapped the img tag with an a tag to make it a link to Google -->
    <a href="site">
    <img src="img/<?php echo isset($userImage) ? $userImage : 'default-image.png'; ?>" alt="User Icon">
</a>
    <h1><?php echo isset($user) ? "WWAGO, " . $user : "USERNAME"; ?></h1>
</header>

<main>
<section id="section1">
            <h2>Oh Nein, Der Tower Brennt!</h2>
            <p>WENN DER DIE SIRENE HÖRT, FÜHLT ER SICH SEHR GESTÖRT!</p>
            <button onclick="window.location.href='video/tower-fire.html'">Anzeigen</button>
        </section>

        <section id="section2">
            <h2>Mystery Video</h2>
            <p>ITS A MYSTERY!</p>
            <button onclick="window.location.href='video/rickroll.html'">Anzeigen</button>
        </section>

        <section id="section3">
            <h2>PLACEHOLDER</h2>
            <p>TEXT</p>
            <button disabled>Coming Soon...</button>
        </section>

        <section id="section4">
            <h2>PLACEHOLDER</h2>
            <p>TEXT</p>
            <button disabled>Coming Soon...</button>
        </section>
</main>

<footer>
    <p>&copy; WWAGO Inc.</p>
</footer>


</body>
</html>
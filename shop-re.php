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

    <header>
        <!-- Wrapped the img tag with an a tag to make it a link to Google -->
        <a href="site">
            <img src="img/jakobsoft-logo.png" alt="Jakobsoft Logo">
        </a>
        <h1>USERNAME</h1>
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
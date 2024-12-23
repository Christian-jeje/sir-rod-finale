<?php
require 'my_database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APEX Sign In</title>
    <link rel="icon" href="logo.jpg" type="image/jpg">
    <style>
        /* General Styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #0b0f24;
            color: #fff;
        }

        header, footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #1a1f38;
        }

        header nav a, footer a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
        }

        header nav a:hover, footer a:hover {
            color: #00d4ff;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        /* Hero Section */
        .hero {
            background: url('background1.jpg') center/cover no-repeat;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        .hero h1 {
            font-size: 2em;
            color: #00d4ff;
        }

        .hero p {
            font-size: 1.2em;
            margin: 20px 0;
        }

        .hero button {
            background-color: #00d4ff;
            color: #000;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }

        .hero input{
            background-color: transparent;
            border: 2px solid white;
            border-radius: 10vh;
            padding: 1vh;
            color: white;
            margin-left: -5vh;
        }
        .hero input::placeholder{
            color: white;
            text-align: center;
        }

        /* Stats Section */
        .stats {
            display: flex;
            justify-content: space-around;
            padding: 50px 0;
            background-color: #14192e;
        }

        .stat {
            text-align: center;
        }

        .stat h3 {
            color: #00d4ff;
        }

        /* Passive Income Section */
        .passive-income {
            padding: 50px 20px;
            text-align: center;
            background-color: #0b0f24;
        }

        .passive-income button {
            background-color: #00d4ff;
            color: #000;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }

        /* Footer */
        footer {
            text-align: center;
        }
        @media (max-width: 766px){
            body{
                margin: 0;
                font-family: Arial, sans-serif;
                background-color: #0b0f24;
                color: #fff;
            }
            header{
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                align-items: center;
                margin-left: 10px;
                padding: 2px;
                background-color: #1a1f38;
                margin-bottom: 10px;
            }
            header nav{
                margin-top: 10px;
                border-bottom: 1px solid white;
                width: 450px;
                text-align: center;
            }
        }
    </style>

</head>
<body>
    <!-- Header -->
    <header>
        <div>APEX - A Student Learning Hub</div>
        <nav>
            <a href="homepage.html">Home</a>
            <a href="about.html">Developers</a>
            <a href="reg.php">Register</a>
            <a href="first.php" style="color: #00d4ff;">Sign in</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <form action="" method="POST">
            <h1>Sign in:</h1>
            <p><input type="text" name="email" placeholder="email"> </p>
            <p><input type="password" name="password" id="password" placeholder="password"> </p>
            <button>Submit</button>
        </form>
    </section>
</body>
</html>

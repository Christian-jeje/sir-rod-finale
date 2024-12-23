<?php
session_start();
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header('Location: signin.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo htmlspecialchars(ucwords($_SESSION['user_name'])) . "!"; ?></title>
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
            background: url('hero-image-placeholder.jpg') center/cover no-repeat;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        .hero h1 {
            font-size: 2em;
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

        .hero a, .passive-income a{
            text-decoration: none;
            color: black;
        }

        a{
            cursor: pointer;
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
        .name{
            font-size: 3em;
            color: #00d4ff;
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
            .hero .name, .hero h1, .hero p{
                text-align: center;
                width: 400px;
            }
            
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div>APEX - A Student Learning Hub</div>
        <nav>
            <a style="color: #00d4ff;">Home</a>
            <a href="myclasses.php">My Classes</a>
            <a href="backup/chatbot.php">Ask AI</a>
            <a href="logout.php">Sign out</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="name">Welcome <?php echo htmlspecialchars(ucwords($_SESSION['user_name'])) . "!"; ?></div>        </div>
        <h1>Learning grows, success leads innovation</h1>
        <p>Empowering success through knowledge, growth, and leadership development.</p>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="stat">
            <h3>Established</h3>
            <p>2024</p>
        </div>
        <div class="stat">
            <h3>Location</h3>
            <p>Dulag, Leyte</p>
        </div>
        <div class="stat">
            <h3>School</h3>
            <p>EVSU - DC</p>
        </div>
        <div class="stat">
            <h3>Year and Section</h3>
            <p>BSIT 2A</p>
        </div>
    </section>

    <!-- Passive Income Section -->
    <section class="passive-income">
        <h2>Strive for success!</h2>
        <p>APEX makes it easy to make your class understandable for you.</p>
        <button><a href="myclasses.php"> My Classes</a></button>
    </section>

    <!-- Footer -->
    <footer>
        <a href="about2.php">Developers</a>
    </footer>
</body>
</html>

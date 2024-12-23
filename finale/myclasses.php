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
    <title>Classes of <?php echo htmlspecialchars(ucwords($_SESSION['user_name'])); ?></title>
    <link rel="icon" href="logo.jpg" type="image/jpg">
    <style>
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

        .hero {
            text-align: center;
            padding: 50px 20px;
            background: url('hero-image-placeholder.jpg') center/cover no-repeat;
        }

        .hero h1 {
            font-size: 2.5em;
            color: #00d4ff;
        }

        .hero p {
            margin: 20px 0;
        }

        .book-box {
            margin: 50px auto;
            padding: 20px;
            max-width: 800px;
            border: 2px solid #00d4ff;
            border-radius: 10px;
            background-color: #14192e;
            text-align: center;
            cursor: pointer;
        }

        .book-box h1 {
            color: #00d4ff;
            margin-bottom: 20px;
        }

        .book-box p {
            color: #bbb;
            line-height: 1.6;
        }

        .book-box img {
            max-width: 200px;
            margin-bottom: 20px;
            border-radius: 10px;
        }

        .book-box .details {
            text-align: left;
            color: #bbb;
            margin-top: 20px;
            padding: 0 20px;
        }

        .book-box .details span {
            display: block;
            margin-bottom: 10px;
        }

        .book-box:hover {
            background-color: #1a1f38;
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
            .book-box{
                width: 350px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div>APEX - A Student Learning Hub</div>
        <nav>
            <a href="interface.php">Home</a>
            <a style="color: #00d4ff;">My Classes</a>
            <a href="backup/chatbot.php">Ask AI</a>
            <a href="logout.php">Sign out</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Learning grows, success leads innovation</h1>
        <p>Empowering success through knowledge, growth, and leadership development.</p>
    </section>

    <!-- Book Box Section -->
    <div class="book-box" onclick="window.location.href='classes_php/algeb.php'">
        <img src="class_picture/c-aleb.jpg" alt="Book Cover">
        <h1>College Algebra</h1>
        <p>Click to view more details...</p>

        <!-- Book Details -->
        <div class="details">
            <span><strong>Author:</strong> Avinash Sathaye, Professor of Mathematics</span>
            <span><strong>Publication Date:</strong> September 18, 2008</span>
            <span><strong>Email:</strong> sathaye@uky.edu</span>
        </div>
    </div>
    <div class="book-box" onclick="window.location.href='classes_php/trigo.php'">
        <img src="class_picture/trigo.jpg" alt="Book Cover">
        <h1>OER Math 1060 – Trigonometry</h1>
        <p>Click to view more details...</p>

        <!-- Book Details -->
        <div class="details">
            <span><strong>Author:</strong> Carl Stitz and Jeffrey Zeager</span>
            <span><strong>Publication Date:</strong> Spring 2017</span>
        </div>
    </div>
    <div class="book-box" onclick="window.location.href='classes_php/Binary.php'">
        <img src="class_picture/binary.jpg" alt="Book Cover">
        <h1>Binary</h1>
        <p>Click to view more details...</p>

        <!-- Book Details -->
        <div class="details">
            <span><strong>Author:</strong> Unknown</span>
            <span><strong>Publication Date:</strong> ---</span>
        </div>
    </div>
    <div class="book-box" onclick="window.location.href='classes_php/platform.php'">
        <img src= "class_picture/platform.jpg" alt="Book Cover">
        <h1>Platform Technologies</h1>
        <p>Click to view more details...</p>

        <!-- Book Details -->
        <div class="details">
            <span><strong>Author:</strong> Unknown</span>
            <span><strong>Publication Date:</strong> ---</span>
        </div>
    </div>
    <div class="book-box" onclick="window.location.href='classes_php/purposive.php'">
        <img src="class_picture/pc.jpg" alt="Book Cover">
        <h1>Purposive Communication</h1>
        <p>Click to view more details...</p>

        <!-- Book Details -->
        <div class="details">
            <span><strong>Author:</strong> CHED</span>
            <span><strong>Publication Date:</strong> ---</span>
        </div>
    </div>
    <div class="book-box" onclick="window.location.href='classes_php/uts.php'">
        <img src="class_picture/uts.jpg" alt="Book Cover">
        <h1>Understanding the Self</h1>
        <p>Click to view more details...</p>

        <!-- Book Details -->
        <div class="details">
            <span><strong>Author:</strong> CHED</span>
            <span><strong>Publication Date:</strong> ---</span>
        </div>
    </div>
    <div class="book-box" onclick="window.location.href='classes_php/math.php'">
        <img src="class_picture/math in.jpg" alt="Book Cover">
        <h1>Mathematics in the modern world</h1>
        <p>Click to view more details...</p>

        <!-- Book Details -->
        <div class="details">
            <span><strong>Author:</strong> ---</span>
            <span><strong>Publication Date:</strong>June 2021</span>
        </div>
    </div>
    <div class="book-box" onclick="window.location.href='classes_php/drr.php'">
        <img src="class_picture/drr.jpg" alt="Book Cover">
        <h1>Disaster Risk Reduction (DRR)</h1>
        <p>Click to view more details...</p>

        <!-- Book Details -->
        <div class="details">
            <span><strong>Author:</strong> Maya Bialik, Emma Smith Zbarsky, Tina Cardone, Charles Fadel</span>
            <span><strong>Publication Date:</strong>April 2021</span>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <a href="about2.php">Developers</a>
    </footer>
</body>
</html>

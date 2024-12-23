<?php
session_start();
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header('Location: first.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APEX - A Student Learning Hub</title>
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
            font-size: 3em;
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
        .personal-card {
            position: relative;
            width: 94vw;
            height: 400px;
            background: #14192e;
            color: #fff;
            padding: 30px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #14192e;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .image-overlay {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            background: #14192e;
            mix-blend-mode: screen;
            opacity: 0.3;
            z-index: 1;
        }

        .content {
            position: relative;
            z-index: 2;
        }

        h2 {
            font-size: 18px;
            text-transform: uppercase;
            color: #888;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 36px;
            margin: 0;
        }

        h1 .highlight {
            color: #00d4ff;
        }

        p {
            margin: 20px 0;
            line-height: 1.6;
            color: #bbb;
        }

        .signature {
            font-size: 20px;
            font-style: italic;
            margin-top: 20px;
        }

        .social-links a {
            color: #00ffcc;
            font-size: 24px;
            margin-right: 15px;
            text-decoration: none;
            width: 5%;
        }

            .social-links a:hover {
            color: #fff;
            }

            .personal-card img{
                width: 400px;
                margin-right: 4vw;
            }

            .hero a, .passive-income a{
            text-decoration: none;
            color: black;
            }

            .social-links a img {
                width: 24px;
                height: 24px;
                vertical-align: middle;
                margin-right: 10px;
            }
            a{
                cursor: pointer;
            }
            @media (min-width: 767px){
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
                font-size: 3em;
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
            .personal-card {
                position: relative;
                width: 94vw;
                height: 400px;
                background: #14192e;
                color: #fff;
                padding: 30px;
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
                margin: 0;
                font-family: 'Arial', sans-serif;
                background-color: #14192e;
                color: #fff;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .image-overlay {
                position: absolute;
                top: 0;
                left: 50%;
                width: 50%;
                height: 100%;
                background: #14192e;
                mix-blend-mode: screen;
                opacity: 0.3;
                z-index: 1;
            }

            .content {
                position: relative;
                z-index: 2;
            }

            h2 {
                font-size: 18px;
                text-transform: uppercase;
                color: #888;
                margin-bottom: 10px;
            }

            h1 {
                font-size: 36px;
                margin: 0;
            }

            h1 .highlight {
                color: #00d4ff;
            }

            p {
                margin: 20px 0;
                line-height: 1.6;
                color: #bbb;
            }

            .signature {
                font-size: 20px;
                font-style: italic;
                margin-top: 20px;
            }

            .social-links a {
                color: #00ffcc;
                font-size: 24px;
                margin-right: 15px;
                text-decoration: none;
                width: 5%;
            }

            .social-links a:hover {
                color: #fff;
            }

            .personal-card img{
                width: 400px;
                margin-right: 4vw;
            }

            .hero a, .passive-income a{
                text-decoration: none;
                color: black;
            }

            .social-links a img {
                width: 24px;
                height: 24px;
                vertical-align: middle;
                margin-right: 10px;
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
        <a href="myclasses.php">My Classes</a>
        <a href="backup/chatbot.php">Ask AI</a>
        <a href="logout.php">Sign out</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <div class="personal-card">
        <div class="image-overlay"></div>
        <img src="chris.png">
        <div class="content">
          <h2> About Personal</h2>
          <h1> Hello, I'm <span class="highlight">Christian Coquiat</span></h1>
          <hr></hr>
          <p>Christian, a feature writer for the Student Publication Organization The Liberator and an inspiring second-year college student, exemplifies academic excellence and leadership. Graduating as valedictorian from Mayorga National High School with an impressive average of 98, he also earned the Best in Research award. As a leader in a regional quantitative research competition, Christian guided his team to secure second place, showcasing his analytical skills and dedication. His passion for writing and research, combined with his commitment to academic and extracurricular success, highlights his potential as a future trailblazer in his field.</p>
          <div class="signature">Christian Coquiat</div>
          <div class="social-links">
            <a href="https://www.facebook.com/christian.369351"><img src="facebook-logo.png"><i class="fab fa-facebook"></i></a>
            <a href="https://x.com/IamChanHAHA?t=kjNjvqbbTgc_wkYL4TsdEQ&s=09"><img src="x.png"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/iamchct/profilecard/?igsh=dXBjbTJsdG1sMnR1"><img src="insta.png"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>

    <!-- Stats Section -->
    <section class="stats">
        <div class="stat">
            <h3>Birthday</h3>
            <p>June 22, 2004</p>
        </div>
        <div class="stat">
            <h3>Occupation</h3>
            <p>Student</p>
        </div>
        <div class="stat">
            <h3>Year</h3>
            <p>BSIT - 2A</p>
        </div>
        <div class="stat">
            <h3>Motto</h3>
            <p>"I'll be gentle."</p>
        </div>
    </section>

    <div class="personal-card">
        <div class="image-overlay"></div>
        <img src="john.png">
        <div class="content">
          <h2> About Personal</h2>
          <h1> Hello, I'm <span class="highlight">John Roque Abina</span></h1>
          <hr></hr>
          <p>John Roque, the current President of InTel and an inspiring second-year college student, is a shining example of excellence and versatility. As the valedictorian of his batch from Jose Rizal National High School, he graduated with honors, earning multiple accolades that reflect his diverse talents and skills. These include the Outstanding Research Award, Outstanding Performance Awards in Arts, Outstanding DRR Leader, Outstanding Work Immersion Award, Outstanding SSG Leader, and the prestigious Makatao Conduct Award. His leadership, creativity, and dedication to both academic and extracurricular pursuits demonstrate his ability to inspire and lead others while excelling in various fields.</p>
          <div class="signature">John Roque Abina</div>
          <div class="social-links">
            <a href="https://www.facebook.com/dreaaa.busa"><img src="facebook-logo.png"><i class="fab fa-facebook"></i></a>
            <a href="#"><img src="x.png"><i class="fab fa-twitter"></i></a>
            <a href="#"><img src="insta.png"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>

    <!-- Stats Section -->
    <section class="stats">
        <div class="stat">
            <h3>Age</h3>
            <p>20</p>
        </div>
        <div class="stat">
            <h3>Birthmonth</h3>
            <p>June</p>
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

    <div class="personal-card">
        <div class="image-overlay"></div>
        <img src="andrea.png">
        <div class="content">
          <h2> About Personal</h2>
          <h1> Hello, I'm <span class="highlight">Andrea Busa</span></h1>
          <hr></hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum facilisis quam eget ex blandit cursus. Proin est magna, semper a donec eros sem.</p>
          <div class="signature">Andrea Busa</div>
          <div class="social-links">
            <a href="https://www.facebook.com/dreaaa.busa"><img src="facebook-logo.png"><i class="fab fa-facebook"></i></a>
            <a href="https://google.com/busaa428gmail.com"><img src="x.png"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/ur_xzyandrea/profilecard/?igsh=MTVsOTkxZDFwdHNoaw=="><img src="insta.png"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>

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
        <h2>Want to learn more?</h2>
        <p>APEX makes it easy to make your class understandable for you.</p>
    </section>

    <!-- Footer -->
    <footer>
        <a style="color: #00d4ff;">Developers</a>
        <a href="https://google.com">Help</a>
    </footer>
</body>
</html>

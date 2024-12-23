<?php
session_start();
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header('Location: .../index.php');
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
            height: 594px;
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
        .chatbot-container {
            background: #fff;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .chat-header {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 20px;
            background: #007bff;
            color: #fff;
        }

        .chatbot-face {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: url('logo.png') no-repeat center center;
            background-size: cover;
        }


        .chat-header h2 {
            margin: 0;
            font-size: 20px;
        }

        .chat-area {
            flex: 1;
            overflow-y: auto;
            padding: 20px;
            background:  #14192e;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .message {
            max-width: 70%;
            padding: 10px 15px;
            border-radius: 20px;
            font-size: 14px;
            line-height: 1.4;
            word-wrap: break-word;
            display: inline-block;
        }

        .message.user {
            background: #007bff;
            color: #fff;
            align-self: flex-end;
            border-bottom-right-radius: 0;
        }

        .message.bot {
            background: #eaeaea;
            color: #333;
            align-self: flex-start;
            border-bottom-left-radius: 0;
        }

        .chat-input {
            display: flex;
            gap: 10px;
            padding: 20px;
            background: #fff;
            border-top: 1px solid #ddd;
        }

        input, button {
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 20px;
            outline: none;
        }

        input {
            flex: 1;
            font-size: 16px;
        }

        button {
            background: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            padding: 10px 20px;
        }
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        /* Login container */
        .login-container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        /* Input fields styling */
        .input-group {
            margin-bottom: 20px;
            border-radius: 5px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #5baaff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #5197e2;
        }

        /* Error message */
        .error {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }
        .chat-input button{
            width: 10%;
        }

        .chat-header h2{
            color: whitesmoke;
        }
        .chat-header button a{
            width: 10%;
            text-decoration: none;
            color: white;
        }
        .chat-header button{
            width: 10%;
            margin: auto;
            margin-left: 80%;
        }
        .chat-input{
            background-color: #14192e;
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
            button{
                font-size: 10px;
            }
        }
    </style>
</head>
    <!-- Header -->
    <header>
        <div>APEX - A Student Learning Hub</div>
        <nav>
        <a href="../interface.php">Home</a>
        <a href="../myclasses.php">My Classes</a>
        <a style="color: #00d4ff;">Ask AI</a>
        <a href="../logout.php">Sign out</a>
        </nav>
    </header>
<body>
    <div class="chatbot-container">
        <div class="chat-area" id="chat-area">
            <div class="message bot">How can I assist you today?</div>
        </div>
        <div class="chat-input">
            <input type="text" id="user-input" placeholder="Say something...">
            <button onclick="sendMessage()">Send</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>

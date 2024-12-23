<?php
session_start(); // Start the session at the beginning

$server = "localhost";
$user = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "my_database";
$conn = new mysqli($server, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $pass = $_POST['password'];
    $sql = "SELECT id, name, email, password FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($pass === $row['password']) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_email'] = $row['email'];
                $_SESSION['logged_in'] = true;

                header('Location: interface.php'); // Redirect after login
                exit();
            }
        }
    }
    // If no match, store an error message
    echo "<script>alert('Invalid credentials.');</script>";
}
?>

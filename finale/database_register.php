<?php
$server = "localhost";
$user = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "my_database";

// Create connection
$conn = new mysqli($server, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $name = $firstname . " " . $lastname;
    $verify = $_POST['verify'];

    // Password validation: length > 8 and at least one digit
    if (strlen($pass) <= 8 || !preg_match('/\d/', $pass)) {
        echo "<script>alert('Password must be longer than 8 characters and contain at least one numeric digit (0-9).');</script>";
    } elseif ($pass !== $verify) {
        echo "<script>alert('Your password and verification do not match. Please retry.');</script>";
    } else {
        // Check if email already exists
        $checkStmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $checkStmt->bind_param("s", $email);
        $checkStmt->execute();
        $checkStmt->store_result();

        if ($checkStmt->num_rows > 0) {
            echo "<script>alert('This email is already registered. Please use a different email.');</script>";
        } else {
            // Insert new user
            $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $pass);
            if ($stmt->execute()) {
                echo "<script>alert('You created a new account! Now login!');</script>";
            } else {
                echo "<script>alert('Error: " . $stmt->error . "');</script>";
            }
            $stmt->close();
        }

        $checkStmt->close();
    }
}

// Close the connection
$conn->close();
?>

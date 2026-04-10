<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    die("405 - Method Not Allowed");
}

$conn = mysqli_connect("localhost", "root", "", "testdb", 3307);

if (!$conn) {
    die("Database connection failed");
}

// Clean Input
$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);

// Security
$username = htmlspecialchars($username);
$email = htmlspecialchars($email);
$password = addslashes($password);

// Formatting
$username = ucwords(strtolower($username));

// Validation
if (strlen($username) < 3) {
    die("Username must be at least 3 characters");
}

if (strlen($password) < 5) {
    die("Password must be at least 5 characters");
}

// Hash password
$password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, email, password)
        VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Registration Successful!";
} else {
    die("Error: " . mysqli_error($conn));
}
?>
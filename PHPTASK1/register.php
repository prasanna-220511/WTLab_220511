<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    die("405 - Method Not Allowed");
}

$conn = mysqli_connect("localhost", "root", "", "testdb", 3307);

if (!$conn) {
    die("Database connection failed");
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, email, password)
        VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Registration Successful!";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
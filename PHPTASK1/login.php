<?php
$conn = mysqli_connect("localhost", "root", "", "testdb", 3307);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['password'])) {
        echo "Login Successful!";
    } else {
        echo "Invalid Password!";
    }
} else {
    echo "User not found!";
}

mysqli_close($conn);
?>
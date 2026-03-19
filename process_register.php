<?php
$conn = mysqli_connect("localhost", "root", "", "user_system");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$user = $_POST['username'];
$pass = $_POST['password'];

// 1. Basic Validation
if (strlen($user) < 3) {
    header("Location: register.php?error=Username too short");
    exit();
}

// 2. Check if username exists
$check_sql = "SELECT id FROM users WHERE username = '$user'";
$check_res = mysqli_query($conn, $check_sql);

if (mysqli_num_rows($check_res) > 0) {
    header("Location: register.php?error=Username already taken");
    exit();
}

// 3. Insert into Database
$sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";

if (mysqli_query($conn, $sql)) {
    // Success! Redirect to login
    header("Location: index.php?msg=Account created! Please login.");
} else {
    header("Location: register.php?error=Registration failed");
}

mysqli_close($conn);
?>
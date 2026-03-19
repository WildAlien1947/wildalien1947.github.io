<?php
session_start(); // Crucial: Starts the session engine
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = mysqli_connect("localhost", "root", "", "user_system");

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    // Save user info to the session
    $_SESSION['username'] = $user; 
    $_SESSION['logged_in'] = true;

    // Redirect to the "Main" website (index.php)
    header("Location: index.php");
    exit();
} else {
    header("Location: login.php?error=Invalid credentials");
    exit();
}
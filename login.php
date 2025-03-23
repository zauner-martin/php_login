<?php
session_start();

// Dummy credentials (Replace with database validation)
$valid_username = "admin";
$valid_password = "12345"; // Use hashed passwords in real applications.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        echo "<div class='alert alert-danger text-center mt-4'>Invalid username or password. <a href='index.php'>Try again</a></div>";
    }
}
?>

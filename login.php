<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $storedUsername = "admin"; 
    $storedPassword = "password";

    // check if input matches stored credentials
    if ($username === $storedUsername && $password === $storedPassword) {
        $_SESSION['username'] = $username;
        header('Location: index.html'); 
    } else {
        echo "Invalid username or password!";
    }
}
?>

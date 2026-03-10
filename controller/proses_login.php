<?php
session_start(); 

$valid_username = "admin";
$valid_password = "12345";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: ../index.php");
        exit();
    } else {
        $_SESSION['login_error'] = "Username atau Password salah!";
        header("Location: ../login.php");
        exit();
    }
} else {
    header("Location: ../login.php");
    exit();
}
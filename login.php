<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $test_email = 'admin@example.com';
    $test_password = 'password';

    if ($email === $test_email && $password === $test_password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['user_name'] = 'Admin User';

        header("Location: adminD.php");
        exit();
    } else {
        $_SESSION['login_error'] = "Invalid email or password";
        header("Location: index.php");
        exit();
    }
}

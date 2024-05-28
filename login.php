<?php
session_start(); // Start session to store user login state

include 'dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Sanitize input to prevent SQL injection
    $email = mysqli_real_escape_string($conn, $email);

    // Query to fetch user from database by email
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Verify password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, set session variables for user
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_role'] = $row['login_as'];

            // Redirect user to dashboard or appropriate page
            header("Location: adminD.php");
            exit();
        } else {
            // Incorrect password
            $_SESSION['login_error'] = "Invalid email or password";
            header("Location: index.php"); // Redirect back to login page
            exit();
        }
    } else {
        // User not found
        $_SESSION['login_error'] = "Invalid email or password";
        header("Location: index.php"); // Redirect back to login page
        exit();
    }
}

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true ? 'Admin Dashboard' : 'Home'; ?></title>
    <link rel="stylesheet" href="header.css">
</head>

<body>
    <header class="d-flex justify-content-between align-items-center p-2 bg-light">
        <h1 class="logo"><?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true ? 'Admin Dashboard' : 'Home'; ?></h1>
        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) : ?>
            <div class="d-flex align-items-center">
                <span>Welcome, <?php echo $_SESSION['user_name']; ?></span>
                <img src="icons/user.svg" alt="Profile" class="rounded-circle ms-3" style="width: 40px; height: 40px;">
                <form action="logout.php" method="POST" class="ms-3">
                    <button class="btn btn-primary" type="submit">Logout</button>
                </form>
            </div>
        <?php else : ?>
            <form class="d-flex align-items-center" action="login.php" method="POST">
                <input type="email" class="form-control me-1" placeholder="Email" aria-label="Email" name="email" required>
                <input type="password" class="form-control me-1" placeholder="Password" aria-label="Password" name="password" required>
                <button class="btn btn-primary" type="submit" name="login">Login</button>
                <button class="btn btn-signup" type="button">Sign Up</button>
            </form>
        <?php endif; ?>
    </header>
</body>

</html>
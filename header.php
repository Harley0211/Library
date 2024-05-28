<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true ? 'Dashboard' : 'Home'; ?></title>
    <link rel="stylesheet" href="header.css">
</head>

<body>
    <header class="d-flex justify-content-between align-items-center p-2 bg-light">
        <h1 class="logo"><?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true ? 'Dashboard' : 'Home'; ?></h1>
        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) : ?>
            <form class="d-flex align-items-center" action="logout.php" method="POST">
                <button class="btn btn-primary" type="submit">Logout</button>
            </form>
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
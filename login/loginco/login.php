<?php
session_start();

// cookie
if (isset($_COOKIE['login'])) {
    if ($_COOKIE['login'] == 'true') {
        $_SESSION['login'] = true;
    }
}

// session
if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

require 'functions.php';

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username ='$username'");
    // cek username
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        // cek password
        if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;

            // remember me
            if (isset($_POST['remember'])) {
                setcookie('login', 'true', time() + 60);
            }

            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css"> <!-- ✅ CSS terpisah -->
</head>
<body>
    <div class="container">
        <h1>Halaman Login</h1>

        <?php if (isset($error)): ?>
            <p class="error">Username / Password salah</p>
        <?php endif; ?>

        <form action="" method="post" class="login-form">
            <ul>
                <li>
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password">
                </li>
                <li>
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Ingat saya</label>
                </li>
                <li>
                    <button type="submit" name="login">Login</button>
                </li>
            </ul>
        </form>
    </div>
</body>
</html>

<?php
session_start();

// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}

// Login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "12345") {
        $_SESSION['username'] = $username;
    } else {
        $error = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Session Login</title>
</head>
<body>

<?php
// If user is logged in
if (isset($_SESSION['username'])) {
?>

<h2>Welcome <?php echo $_SESSION['username']; ?></h2>
<p>You have successfully logged in using Session.</p>

<a href="index.php?logout=1">Logout</a>

<?php
} else {
?>

<h2>Login Form</h2>

<?php
if (isset($error)) {
    echo "<p style='color:red;'>$error</p>";
}
?>

<form method="post">
    Username:
    <input type="text" name="username" required><br><br>

    Password:
    <input type="password" name="password" required><br><br>

    <input type="submit" name="login" value="Login">
</form>

<?php
}
?>

</body>
</html>
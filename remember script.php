<?php
session_start();

// Read cookies
$username = "";
$password = "";

if(isset($_COOKIE["username"]))
{
    $username = $_COOKIE["username"];
}

if(isset($_COOKIE["password"]))
{
    $password = $_COOKIE["password"];
}

// Logout
if(isset($_GET['logout']))
{
    session_destroy();

    header("Location: index.php");
    exit();
}

// Login
if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Demo Username & Password
    if($username=="admin" && $password=="12345")
    {
        $_SESSION['username']=$username;

        // Remember Me
        if(isset($_POST['remember']))
        {
            setcookie("username",$username,time()+86400,"/");
            setcookie("password",$password,time()+86400,"/");
        }
        else
        {
            setcookie("username","",time()-3600,"/");
            setcookie("password","",time()-3600,"/");
        }
    }
    else
    {
        $error="Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Remember Me Login</title>
</head>
<body>

<?php
if(isset($_SESSION['username']))
{
?>

<h2>Welcome <?php echo $_SESSION['username']; ?></h2>

<p>Login Successful</p>

<a href="index.php?logout=1">Logout</a>

<?php
}
else
{
?>

<h2>Login Form</h2>

<?php
if(isset($error))
{
    echo "<font color='red'>$error</font><br><br>";
}
?>

<form method="post">

Username :
<input type="text" name="username" value="<?php echo $username; ?>" required>
<br><br>

Password :
<input type="password" name="password" value="<?php echo $password; ?>" required>
<br><br>

<input type="checkbox" name="remember"> Remember Me
<br><br>

<input type="submit" name="login" value="Login">

</form>

<?php
}
?>

</body>
</html>
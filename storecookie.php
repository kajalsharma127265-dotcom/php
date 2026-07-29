<?php
$cookie_name = "visitor";

// Check if cookie exists
if (isset($_COOKIE[$cookie_name])) {
    $message = "Welcome Back! You are a Repeated User.";
} else {
    // Create cookie for 1 day
    setcookie($cookie_name, "visited", time() + (86400), "/");
    $message = "Welcome! You are a New User.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Cookie Example</title>
</head>
<body>

<h2>PHP Cookie Example</h2>

<?php
echo "<h3>$message</h3>";
?>

<p><b>Refresh the page to see the result.</b></p>

</body>
</html>
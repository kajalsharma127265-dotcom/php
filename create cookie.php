<!DOCTYPE html>
<html>
<head>
    <title>Create Cookie</title>
</head>
<body>

<?php
if(isset($_POST['submit']))
{
    $username = $_POST['username'];

    // Create Cookie (Valid for 1 hour)
    setcookie("username", $username, time()+3600, "/");

    echo "<h3>Cookie Created Successfully!</h3>";
    echo "Username: " . $username;
}
?>

<h2>Create Cookie</h2>

<form method="post">
    Enter Name:
    <input type="text" name="username" required>
    <br><br>

    <input type="submit" name="submit" value="Create Cookie">
</form>

</body>
</html>
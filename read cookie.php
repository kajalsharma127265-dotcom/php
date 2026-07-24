<!DOCTYPE html>
<html>
<head>
    <title>Read Cookie</title>
</head>
<body>

<h2>Read Cookie</h2>

<?php
if(isset($_COOKIE["username"]))
{
    echo "Cookie Value: " . $_COOKIE["username"];
}
else
{
    echo "Cookie not found!";
}
?>

</body>
</html>
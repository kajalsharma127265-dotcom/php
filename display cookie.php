<!DOCTYPE html>
<html>
<head>
    <title>Display Cookie</title>
</head>
<body>

<h2>Cookie Using Header</h2>

<?php
if(isset($_COOKIE["username"]))
{
    echo "Welcome " . $_COOKIE["username"];
}
else
{
    echo "Cookie not found.";
}
?>

</body>
</html>
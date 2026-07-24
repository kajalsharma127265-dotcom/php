<!DOCTYPE html>
<html>
<head>
    <title>Delete Cookie</title>
</head>
<body>

<?php
// Delete Cookie
setcookie("username", "", time()-3600, "/");

echo "<h3>Cookie Deleted Successfully!</h3>";
?>

</body>
</html>
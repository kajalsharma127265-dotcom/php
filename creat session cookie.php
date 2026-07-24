<?php
session_start();

$_SESSION["username"] = "Kajal";
$_SESSION["course"] = "BCA";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Session</title>
</head>
<body>

<h2>Session Created Successfully</h2>

<?php
echo "Username: " . $_SESSION["username"] . "<br>";
echo "Course: " . $_SESSION["course"];
?>

</body>
</html>
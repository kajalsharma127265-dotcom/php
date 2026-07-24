<?php
session_start();

// Destroy all session data
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Destroy Session</title>
</head>
<body>

<h2>Session Destroyed Successfully!</h2>

</body>
</html>
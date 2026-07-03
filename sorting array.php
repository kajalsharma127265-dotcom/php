<!DOCTYPE html>
<html>
<head>
    <title>Sort Array</title>
</head>
<body>

<h2>Sort an Array Entered by User</h2>

<form method="post">
    Enter array elements (separated by commas): <br><br>
    <input type="text" name="array" size="50" required>
    <br><br>
    <input type="submit" name="submit" value="Sort Array">
</form>

<?php
if(isset($_POST['submit']))
{
    $input = $_POST['array'];

    // Convert string into array
    $arr = explode(",", $input);

    // Remove extra spaces
    $arr = array_map('trim', $arr);

    // Sort the array
    sort($arr);

    echo "<h3>Sorted Array:</h3>";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
?>

</body>
</html>
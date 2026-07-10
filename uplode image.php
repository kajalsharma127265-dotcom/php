<?php
$message = "";

if (isset($_POST['upload'])) {

    // Folder where images will be stored
    $targetDir = "uploads/";

    // Create uploads folder if it does not exist
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $fileName = basename($_FILES["image"]["name"]);
    $targetFile = $targetDir . $fileName;

    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Allowed image formats
    $allowed = array("jpg", "jpeg", "png", "gif");

    if (in_array($imageFileType, $allowed)) {

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $message = "Image uploaded successfully!";
        } else {
            $message = "Error uploading image.";
        }

    } else {
        $message = "Only JPG, JPEG, PNG, and GIF files are allowed.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>
<body>

<h2>Upload Image</h2>

<form action="" method="post" enctype="multipart/form-data">
    Select Image:
    <input type="file" name="image" required><br><br>

    <input type="submit" name="upload" value="Upload Image">
</form>

<br>

<?php
echo "<h3>$message</h3>";

if (!empty($message) && strpos($message, "successfully") !== false) {
    echo "<img src='$targetFile' width='300'>";
}
?>

</body>
</html>
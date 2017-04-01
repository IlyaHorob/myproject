<?php
date_default_timezone_set('Europe/Kiev');
ini_set("display_errors", "1");
error_reporting(E_ALL);
if(!empty($_FILES)){
        echo "<pre>";
            var_dump($_FILES);
        echo "</pre>";
    $tmp = $_FILES['filename']['tmp_name'];
    $name = $_FILES['filename']['name'];
    move_uploaded_file($tmp, 'd:/projects/project1.loc/demo/' . $name);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="upload.php" enctype="multipart/form-data">
    File: <input type="file" name="filename"/><br/>
    <input type="submit" value="Send">
</form>
</body>
</html>


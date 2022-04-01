<?php
$currentDir = getcwd();
$uploadDirectory = "/zdjecia/";
$fileName = $_FILES['photoFile']['name'];
$fileSize = $_FILES['photoFile']['size'];
$fileTmpName = $_FILES['photoFile']['tmp_name'];
$fileType = $_FILES['photoFile']['type'];

if ($fileName != "" and
    ($fileType == 'image/png' or $fileType == 'image/jpeg' or $fileType == 'image/JPEG' or $fileType = 'image/PNG' or $fileType == 'image/jpg' or $fileType = 'image/JPG')) {
    $uploadPath = $currentDir . $uploadDirectory . "obrazek.jpg";
    if (move_uploaded_file($fileTmpName, $uploadPath)) {
        header("Location: user.php");
        echo "Zdjecie załadowane";

    }
}

header("Location: user.php");
?>
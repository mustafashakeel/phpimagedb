<?php

require_once 'conf.php';

if (isset($_POST["submit"])) {

    // get fileinfo 
    $fileName = $_FILES["image"]["name"];
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

    // Check for image format so that we can store it in the database ;

    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
    if (in_array($fileType, $allowTypes)) {

        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        // Insert image content into database
        $sql = "INSERT into images (image, created) VALUES ('$imgContent', NOW())";

        $insert = $db->query($sql);
        if ($insert) {
            echo "File uploaded successfully.";
        } else {
            echo "File upload failed, please try again.";
        }
    } else {
        echo " Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }
}

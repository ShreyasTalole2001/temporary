<?php
session_start();
include '../database/liveWebinarDB.php';

$firstName = mysqli_real_escape_string($LiveWebinar_Conn, $_POST['firstName']);
$lastName = mysqli_real_escape_string($LiveWebinar_Conn, $_POST['lastName']);
$state = mysqli_real_escape_string($LiveWebinar_Conn, $_POST['state']);
$profession = mysqli_real_escape_string($LiveWebinar_Conn, $_POST['profession']);
$institudeName = mysqli_real_escape_string($LiveWebinar_Conn, $_POST['institudeName']);
$email = mysqli_real_escape_string($LiveWebinar_Conn, $_POST['email']);
$phoneNo = mysqli_real_escape_string($LiveWebinar_Conn, $_POST['phoneNo']);
$status = "Individual";













$target_dir = "../ResumeUploads/";

$ResumeFileLink = $email .  basename($_FILES["resume"]["name"]);
$target_file = $target_dir . $email  . basename($_FILES["resume"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["resume"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["resume"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" && $imageFileType != "pdf"
) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    $_SESSION['statusOfForm1'] = "Something went wrong. Please try again.";
        header("Location: ../felloship.php");
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)) {
        $query = "INSERT INTO individyalfelloship (firstName, lastName, statee, profession, institudeName, email, phoneNo, statuss, resumeFile ) VALUES ('$firstName', '$lastName','$state', '$profession', '$institudeName', '$email', '$phoneNo', '$status', '$ResumeFileLink'  )";
        mysqli_query($LiveWebinar_Conn, $query);
        $_SESSION['statusOfForm1'] = "Thank you for registration. We will contact you shortly.";
        echo "The file " . htmlspecialchars(basename($_FILES["resume"]["name"])) . " has been uploaded.";
        header("Location: ../felloship.php");
        
    } else {
        echo "Sorry, there was an error uploading your file.";
        
    }
}

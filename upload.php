<?php
// Check if the form was submitted
if (isset($_POST["homeworksubject"])) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, the file already exists.";
        $uploadOk = 0;
    }

    // Check file size (you can adjust the size limit as needed)
    if ($_FILES["fileToUpload"]["size"] > 500000000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file types (you can add more types if needed)
    if ($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif" && $fileType != "pdf") {
        echo "Sorry, oppp-pnly JPG, JPEG, PNG, GIF, and PDF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // If everything is OK, try to upload the file
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            // Store session username and file name in the database
            session_start(); // Start or resume the session
            $username = $_SESSION["username"];// Assuming you have a session variable for username
            $subname = $_POST["homeworksubject"];
            $subinfo = $_POST["homeworktext"];
            $uploadedFileName = basename($_FILES["fileToUpload"]["name"]);
            $level = $_SESSION["userLevel"];

            $conn = new mysqli("localhost", "root", "root", "DeerRun");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Insert data into the 'uploaded_files' table
            $sql = "INSERT INTO homework (stdname, subname, subinfo, filename,level) VALUES ('$username','$subname','$subinfo', '$uploadedFileName','$level')";

            if ($conn->query($sql) === true) {
                echo "The file " . htmlspecialchars($uploadedFileName) . " has been uploaded and data has been recorded.";
                header('Location:homework.php');
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        } else {
            header('Location:homework.php');
        }
    }
}
?>

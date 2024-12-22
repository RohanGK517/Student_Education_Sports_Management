<?php
// connect to the database
include "registerdb.php";
// Uploads files
session_start();
if (!isset($_SESSION['r_n'])){
    header("location:login.php");
}
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    $r_n = $_SESSION['r_n'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
//        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (name, size, downloads,Register_number) VALUES ('$filename', '$size', 0,'$r_n')";
            if (mysqli_query($conn, $sql)) {
//                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
include 'registerdb.php';
$r = $_SESSION['r_n'];
$sql = "SELECT * FROM files Where Register_number = '$r'";
$result = mysqli_query($conn, $sql);
//if($result){
//    echo 'hekko';
//}
// else {
//    echo 'no files';   
//// }

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM files WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}
?>
<?php 
include 'registerdb.php';
unlink($_GET["$video_upload_path"]);

if(isset($_POST['delete'])){
    $id = $_POST['delete'];
$s ="DELETE FROM `videos` WHERE `videos`.`id` = $id";
    // $sql = "DELETE FROM videos WHERE id='.$id.'";
    if ($conn->query($s) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . $conn->error;
      }
      
}
header("Location: entview.php");
?>
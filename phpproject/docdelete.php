<?php 
include 'registerdb.php';
unlink($_GET["$destination"]);

if(isset($_POST['delete'])){
    $id = $_POST['delete'];
$s ="DELETE FROM `files` WHERE `files`.`id` = $id";
    // $sql = "DELETE FROM videos WHERE id='.$id.'";
    if ($conn->query($s) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . $conn->error;
      }
      
}
header("Location: viewdoc.php");
?>
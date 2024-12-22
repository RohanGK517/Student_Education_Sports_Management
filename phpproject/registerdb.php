<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stumanage";

//connection create
$conn = mysqli_connect("localhost","root","", "Stumanage");

//connection check
if (!$conn)
 {
    die("connection failed".$conn);
}
else
{
//echo "Connection done successfully!!<br>";
}

// if(isset($_POST['Submit']))
// {
//     $Firstname = $_POST['First_name'];
//     $Lastname = $_POST['Last_name'];
//     $Email = $_POST['Email'];
//     $Contactnumber = $_POST['Contact_number'];
//     $Registernumber = $_POST['Register_number'];
//     $Password = $_POST['Password'];
//     $Confirmpassword = $_POST['Confirm_password'];

// }

// $sql = "INSERT INTO Register (First_name, Last_name, Email, Contact_number, Register_number, Password)
// VALUES ('".$_POST["First_name"]."','".$_POST["Last_name"]."','".$_POST["Email"]."','".$_POST["Contact_number"]."','".$_POST["Register_number"]."','".$_POST["Password"]."','".$_POST["Confirm_Password"]."')" ;


// $result = (mysqli_query($conn, $sql));
// if ($result == TRUE) {
//     echo "New record created successfully";
// }
// else
// {
//     echo "Error: " . $sql . "<br>" . $conn->error; 
// }

 ?>
